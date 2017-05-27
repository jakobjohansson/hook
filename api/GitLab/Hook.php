<?php
namespace GitLab;
/**
 * GitLab service for the webhook-api.
 * This hook is returned if specified in the static service function.
 * Will provide authorization if secret is provided.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Hook extends \Hook {

    /**
     * Authorization key to be provided from the user
     * @var String null
     */
    private $secret = null;

    /**
     * The X-Gitlab-Event header, i.e push, issue, etc
     * @var String
     */
    private $event;

    /**
     * The secret provided in the X-Gitlab-Token header
     * @var String
     */
    private $signature;

    /**
     * The events the API will listen to
     * @var Array
     */
    public $listeners = [];

    /**
     * Checking for X-Gitlab-Event header and authorizing
     * @param String $secret the authorization key
     */
    public function __construct($secret = null) {
        $this->fetchHeaders();

        if (!array_key_exists('X-Gitlab-Event', $this->headers)) {
            $this->apiMessages[] = "GitLab Event header not present";
            return;
        }

        $this->event = $this->headers['X-Gitlab-Event'];

        if (isset($secret)) {
            $this->secret = $secret;
            return $this->auth();
        }

        $this->fetchPayload();
    }

    /**
     * Authorizing method with the helper functions secretValidator() and checkSecret()
     * Sends message to apiMessages if a problem occurs
     * @return boolean true | false
     */
    protected function auth() {
        if (!array_key_exists('X-Gitlab-Token', $this->headers)) {
            $this->apiMessages[] = "No signature provided";
            return false;
        }

        $this->signature = $this->headers['X-Gitlab-Token'];
        if (!$this->checkSecret()) {
            $this->apiMessages[] = "Signature not authorized";
            return false;
        } else {
            $this->fetchPayload();
            return true;
        }
    }

    /**
     * Compares the hashes provided by the webhook and the user
     * @return boolean hash
     */
    protected function checkSecret() {
        return $this->signature === $this->secret;
    }

    /**
     * Returns the payload temporarily for authorization needed in checkSecret()
     * @return Array payload
     */
    protected function secretValidator() {
        switch ($this->contentType) {
            case 'application/json':
                return file_get_contents('php://input');
            break;
            case 'application/x-www-form-urlencoded':
                return \Request::input('payload');
            break;
        }
    }

    /**
     * Sets the events to listen to
     * Needs to be declared to create any output
     * Empty array watches all events
     * Can be complemented with callback functions
     * @param  Array $listeners Array of events
     * @return Object | false   false if event is not being watched
     */
    public function listen(array $listeners) {
        $default = ['Push Hook', 'Tag Push Hook', 'Issue Hook',
                    'Note Hook', 'Merge Request Hook',
                    'Wiki Page Hook', 'Pipeline Hook', 'Build Hook'];

        if (empty($listeners)) {
            $this->listeners = $default;
        } else {
            foreach ($listeners as $listener => $callback) {
                if (!in_array($listener, $default) && !in_array($callback, $default)) {
                    $this->apiMessages[] = "Can't watch an invalid event";
                    return false;
                }
            }
            $this->listeners = $listeners;
        }

        if (!array_key_exists($this->event, $this->listeners) && !in_array($this->event, $this->listeners)) {
            if (!empty($this->event)) {
                $this->apiMessages[] = "Not watching $this->event event";
            }
            return false;
        } else {
            switch($this->event) {
                case 'Push Hook':
                    $this->output = new Event\Push($this->payload);
                break;
                case 'Tag Push Hook':
                    $this->output = new Event\Tag($this->payload);
                break;
                case 'Issue Hook':
                    $this->output = new Event\Issue($this->payload);
                break;
                case 'Note Hook':
                    $this->output = new Event\Note($this->payload);
                break;
                case 'Merge Request Hook':
                    $this->output = new Event\MergeRequest($this-payload);
                break;
                case 'Wiki Page Hook':
                    $this->output = new Event\Wiki($this->payload);
                break;
                case 'Pipeline Hook':
                    $this->output = new Event\Pipeline($this->payload);
                break;
                case 'Build Hook':
                    $this->output = new Event\Build($this->payload);
                break;
            }

            if (isset($this->listeners[$this->event])) {
                call_user_func($this->listeners[$this->event], $this->output->__toString());
            }
        }
    }
}
