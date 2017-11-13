<?php

namespace Hook;

abstract class Hook
{
    /**
     * The request headers.
     *
     * @var array
     */
    public $headers;

    /**
     * The content-type header.
     *
     * @var string
     */
    protected $contentType;

    /**
     * The request payload.
     *
     * @var object
     */
    public $payload = null;

    /**
     * The final formatted output string.
     *
     * @var string
     */
    public $output = null;

    /**
     * Messages from the API used for troubleshooting or status texts.
     *
     * @var array
     */
    protected $apiMessages = [];

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
        $this->payload = Request::payload();
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
