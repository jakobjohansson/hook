<?php
/**
 * Main webhook class, which can be used singularly or to return a service hook like GitHub, GitLab etc.
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
     * Final output string, ready to be used.
     * @var String
     */
    public $output = null;

    /**
     * Messages from the API used for trouble shooting or status texts
     * @var Array
     */
    public $apiMessages = [];

    /**
     * Fetch headers and payload
     * @return void
     */
    public function __construct() {
        $this->fetchHeaders();
        $this->fetchPayload();
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
        $this->contentType = isset($this->headers['content-type']) ?: null;
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

    /**
     * Return a hook service
     * @param  String $service the specific service to use
     * @param  String $secret  Authorization key
     * @return Hook object
     */
    public static function service($service, $secret = null) {
        if ($service === "GitHub") {
            return new GitHub\Hook($secret);
        } elseif ($service === "GitLab") {
            return new GitLab\Hook($secret);
        }
    }
}
