<?php

namespace Hook;

class Hook
{
    /**
     * Webhook headers.
     *
     * @var array
     */
    public $headers;

    /**
     * Content-Type header
     * (application/json, application/x-www-form-urlencoded etc).
     *
     * @var string
     */
    protected $contentType;

    /**
     * The transmission payload encoded in JSON.
     *
     * @var object
     */
    public $payload = null;

    /**
     * Final output string, ready to be used.
     *
     * @var string
     */
    public $output = null;

    /**
     * Messages from the API used for trouble shooting or status texts.
     *
     * @var array
     */
    protected $apiMessages = [];

    /**
     * Fetch headers and payload.
     *
     * @return void
     */
    public function __construct()
    {
        $this->fetchHeaders();
        $this->fetchPayload();
    }

    /**
     * Returns the $apiMessages.
     *
     * @return array APIMessages
     */
    public function getApiMessages()
    {
        return $this->apiMessages;
    }

    /**
     * Fetches all the webhook headers and sets them as object properties.
     *
     * @return void
     */
    protected function fetchHeaders()
    {
        $this->headers = Request::headers();
        $this->contentType = Request::header('CONTENT_TYPE');
    }

    /**
     * Fetches the payload from the webhook.
     *
     * @return void
     */
    protected function fetchPayload()
    {
        switch ($this->contentType) {
            case 'application/json':
                $this->payload = json_decode(file_get_contents('php://input'));
            break;
            case 'application/x-www-form-urlencoded':
                $this->payload = Request::input('payload');
            break;
            default:
                $this->apiMessages[] = 'Invalid Content Type';
        }
    }

    /**
     * Return a GitHub Hook service.
     *
     * @param string $secret Authorization key.
     */
    public static function GitHub($secret = null)
    {
        return new GitHub\Hook($secret);
    }

    /**
     * Return a GitLab Hook service.
     *
     * @param string $secret Authorization key.
     */
    public static function GitLab($secret = null)
    {
        return new GitLab\Hook($secret);
    }
}
