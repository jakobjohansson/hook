<?php
namespace GitHub;
/**
 * GitHub service for the webhook-api.
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
     * The X-GitHub-Event header, i.e push, issue, etc
     * @var String
     */
    private $event;

    /**
     * The hash string from the X-GitHub-Signature header
     * @var String
     */
    private $signature;

    /**
     * The hash algorithm used in the X-GitHub-Signature header
     * @var String
     */
    private $algorithm;

    /**
     * The events the API will listen to
     * @var Array
     */
    public $listeners = [];

    /**
     * Checking for X-GitHub-Event header and authorizing
     * @param String $secret the authorization key
     */
    public function __construct($secret = null) {
        $this->fetchHeaders();

        if (!array_key_exists('X-GitHub-Event', $this->headers)) {
            $this->apiMessages[] = "GitHub Event header not present";
        } else {
            $this->event = $this->headers['X-GitHub-Event'];
        }

        if (isset($secret)) {
            $this->secret = $secret;
            return $this->auth();
        } else {
            $this->fetchPayload();
        }
    }

    /**
     * Authorizing method with the helper functions secretValidator() and checkSecret()
     * Sends message to apiMessages if a problem occurs
     * @return boolean true | false
     */
    protected function auth() {
        if (!array_key_exists('X-Hub-Signature', $this->headers)) {
            $this->apiMessages[] = "No signature provided";
            return false;
        }

        list($this->algorithm, $this->signature) = explode("=", $this->headers['X-Hub-Signature'], 2);
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
        return hash_equals(hash_hmac($this->algorithm, $this->secretValidator(), $this->secret), $this->signature);
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
                return $_POST['payload'];
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
        $default = ['push', 'issues', 'repository', 'commit_comment',
        'create', 'delete', 'fork', 'gollum', 'issue_comment', 'label',
        'member', 'membership', 'milestone', 'organization', 'org_block',
        'page_build', 'project_card', 'project_column', 'project',
        'public', 'pull_request_review', 'pull_request_review_comment',
        'pull_request', 'team', 'team_add', 'watch', 'release'];

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

                case 'push':
                    $this->output = new Event\Push($this->payload);
                break;

                case 'commit_comment':
                    $this->output = new Event\CommitComment($this->payload);
                break;

                case 'create':
                    $this->output = new Event\Create($this->payload);
                break;

                case 'delete':
                    $this->output = new Event\Delete($this->payload);
                break;

                case 'fork':
                    $this->output = new Event\Fork($this->payload);
                break;

                case 'gollum':
                    $this->output = new Event\Gollum($this->payload);
                break;

                case 'issues':
                    $this->output = new Event\Issue\Issues($this->payload);
                break;

                case 'issue_comment':
                    $this->output = new Event\Issue\Comment($this->payload);
                break;

                case 'label':
                    $this->output = new Event\Label($this->payload);
                break;

                case 'member':
                    $this->output = new Event\Member\Member($this->payload);
                break;

                case 'membership':
                    $this->output = new Event\Member\Membership($this->payload);
                break;

                case 'milestone':
                    $this->output = new Event\Milestone($this->payload);
                break;

                case 'organization':
                    $this->output = new Event\Organization\Organization($this->payload);
                break;

                case 'org_block':
                    $this->output = new Event\Organization\Block($this->payload);
                break;

                case 'page_build':
                    $this->output = new Event\PageBuild($this->payload);
                break;

                case 'project_card':
                    $this->output = new Event\Project\Card($this->payload);
                break;

                case 'project_column':
                    $this->output = new Event\Project\Column($this->payload);
                break;

                case 'project':
                    $this->output = new Event\Project\Project($this->payload);
                break;

                case 'public':
                    $this->output = new Event\Repository\PublicRepository($this->payload);
                break;

                case 'pull_request':
                    $this->output = new Event\PullRequest\PullRequest($this->payload);
                break;

                case 'pull_request_review':
                    $this->output = new Event\PullRequest\Review\Review($this->payload);
                break;

                case 'pull_request_review_comment':
                    $this->output = new Event\PullRequest\Review\Comment($this->payload);
                break;

                case 'release':
                    $this->output = new Event\Release($this->payload);
                break;

                case 'repository':
                    $this->output = new Event\Repository\Repository($this->payload);
                break;

                case 'team':
                    $this->output = new Event\Team\Team($this->payload);
                break;

                case 'team_add':
                    $this->output = new Event\Team\Add($this->payload);
                break;

                case 'watch':
                    $this->output = new Event\Watch($this->payload);
                break;
            }

            if (isset($this->listeners[$this->event])) {
                call_user_func($this->listeners[$this->event], $this->output);
            }
        }
    }
}
