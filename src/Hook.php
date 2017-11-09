<?php

namespace Hook;

class Hook
{
    /**
     * The webhook headers.
     *
     * @var array
     */
    public $headers;

    /**
     * The content type header.
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
     * The final formatted output string,.
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
     * Create a new Hook instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->fetchHeaders();
        $this->fetchPayload();
    }

    /**
     * Return the API messages.
     *
     * @return array
     */
    public function getApiMessages()
    {
        return $this->apiMessages;
    }

    /**
     * Fetch all the webhook headers and set them as object properties.
     *
     * @return void
     */
    protected function fetchHeaders()
    {
        $this->headers = Request::headers();
        $this->contentType = Request::header('CONTENT_TYPE');
    }

    /**
     * Fetch the payload from the webhook.
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
     * @param string $secret
     *
     * @return \Hook\GitHub\Hook
     */
    public static function GitHub($secret = null)
    {
        return new GitHub\Hook($secret);
    }

    /**
     * Return a GitLab Hook service.
     *
     * @param string $secret
     *
     * @return \Hook\GitLab\Hook
     */
    public static function GitLab($secret = null)
    {
        return new GitLab\Hook($secret);
    }

    /**
     * Return a Bitbucket Hook service.
     *
     * @return \Hook\BitBucket\Hook
     */
    public static function BitBucket()
    {
        return new BitBucket\Hook();
    }
}
