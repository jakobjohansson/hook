<?php

namespace Hook\Tests;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase as BaseTest;

abstract class TestCase extends BaseTest
{
    /**
     * The HTTP client.
     *
     * @var \GuzzleHttp\Client
     */
    public $client;

    /**
     * The payload to send.
     *
     * @var string
     */
    public $payload;

    /**
     * The map of pre defined GitHub payloads.
     *
     * @var array
     */
    public $gitHub;

    /**
     * The map of pre defined GitLab payloads.
     *
     * @var array
     */
    public $gitLab;

    /**
     * The map of pre defined BitBucket payloads.
     *
     * @var array
     */
    public $bitBucket;

    /**
     * Queries sent to the server to differentiate between testing modes.
     *
     * @var array
     */
    public $query;

    /**
     * The headers for the request.
     *
     * @var array
     */
    public $headers;

    /**
     * Set up a client when constructing the test.
     */
    public function setUp()
    {
        parent::setUp();

        $this->client = new Client(['base_uri' => 'http://localhost:8000']);
        $this->gitHub = PayloadMap::GitHub();
        $this->gitLab = PayloadMap::GitLab();
        $this->bitBucket = PayloadMap::BitBucket();
    }

    /**
     * Modify the request to use a callback.
     *
     * @return $this
     */
    public function useCallback()
    {
        $this->query['callback'] = 'true';

        return $this;
    }

    /**
     * Set the payload to send.
     *
     * @param array $payload
     *
     * @return $this
     */
    public function payload($payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Perform a JSON request.
     *
     * @return string
     */
    public function response()
    {
        return (string) $this->client->request('POST', '', [
            'query'   => $this->query,
            'headers' => $this->headers,
            'json'    => json_decode($this->payload, true),
        ])->getBody();
    }

    /**
     * Perform a form request.
     *
     * @return string
     */
    public function formResponse()
    {
        return (string) $this->client->request('POST', '', [
            'query'          => $this->query,
            'headers'        => $this->headers,
            'form_params'    => ['payload' => json_decode($this->payload, true)],
        ])->getBody();
    }

    /**
     * Helper assertion method for asserting both requests in one moethod.
     *
     * @param string $one
     * @param string $two
     * @param string $three
     *
     * @return void
     */
    public function assertSameThree($one, $two, $three)
    {
        $this->assertSame($one, $three);
        $this->assertSame($two, $three);
    }
}
