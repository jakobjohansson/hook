<?php
/**
 * Main webhook class, which can be used singularly or to return a service hook like GitHub, GitLab etc.
 * Provide preferred service and an optional authorization key in the constructor, i.e:
 * $hook = new Hook("GitHub", "secret");
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Hook {
    /**
     * Webhook headers
     * @var Array
     */
    protected $headers;

    /**
     * Content-Type header
     * (application/json, application/x-www-form-urlencoded etc)
     * @var String
     */
    protected $contentType;

    /**
     * The transmission payload encoded in JSON
     * @var Object
     */
    protected $payload = null;

    /**
     * Messages from the API used for trouble shooting or status texts
     * @var Array
     */
    protected $apiMessages = [];

    /**
     * Determine if to return a children hook like GitHub etc, also sends an authorization key if provided.
     * @param String $service "GitHub", "GitLab" etc
     * @param String $secret  Authorization key
     */
    public function __construct($service = null, $secret = null) {
        if ($service === "GitHub") {
            return new GitHubHook($secret);
        } else {
            $this->fetchHeaders();
            $this->fetchPayload();
        }
    }

    /**
     * Returns the payload for the front end.
     * @return Object JSON
     */
    public function getPayload() {
        return $this->payload;
    }

    /**
     * Returns the $apiMessages
     * @return Array APIMessages
     */
    public function getApiMessages() {
        return $this->apiMessages();
    }

    /**
     * Fetches all the webhook headers and sets them as object properties
     * @return void
     */
    protected function fetchHeaders() {
        $this->headers = apache_request_headers();
        $this->contentType = $this->headers['Content-Type'];
    }

    /**
     * Fetches the payload from the webhook.
     * @return void
     */
    protected function fetchPayload() {
        switch ($this->contentType) {
            case 'application/json':
                $this->payload = json_decode(file_get_contents('php://input'));
            break;
            case 'application/x-www-form-urlencoded':
                $this->payload = $_POST['payload'];
            break;
            default:
                $this->apiMessages[] = "Invalid Content Type";
        }
    }
}
