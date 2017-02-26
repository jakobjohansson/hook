<?php
/**
 * GitHub service for the webhook-api.
 * This hook is returned if specified in the main constructor.
 * Will provide authorization if secret is provided.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class GitHubHook extends Hook {

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
     * Checking for X-GitHub-Event header and authorizing
     * @param String $secret the authorization key
     */
    public function __construct($secret = null) {
        $this->fetchHeaders();
        if (!array_key_exists('X-GitHub-Event', $this->headers)) {
            $this->apiMessages[] = "GitHub Event header not present";
            return false;
        }
        $this->event = $this->headers['X-GitHub-Event'];

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
                return json_decode(file_get_contents('php://input'));
            break;
            case 'application/x-www-form-urlencoded':
                return $_POST['payload'];
            break;
        }
    }
}
