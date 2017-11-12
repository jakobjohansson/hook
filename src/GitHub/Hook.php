<?php

namespace Hook\GitHub;

use Hook\EventMap;
use Hook\Hook as BaseHook;
use Hook\Traits\MapsEvents;
use Hook\Traits\Authenticates;
use Hook\Traits\HandlesEvents;

class Hook extends BaseHook
{
    use MapsEvents, HandlesEvents, Authenticates;

    /**
     * The hash algorithm used in the X-GitHub-Signature header.
     *
     * @var string
     */
    private $algorithm;

    /**
     * Create a new Hook instance.
     *
     * @param string $secret
     *
     * @return mixed
     */
    public function __construct($secret = null)
    {
        $this->setEventMap(EventMap::GitHub());
        $this->fetchHeaders();

        if (!array_key_exists('HTTP_X_GITHUB_EVENT', $this->headers)) {
            $this->apiMessages[] = 'GitHub Event header not present';

            return;
        }

        $this->event = $this->headers['HTTP_X_GITHUB_EVENT'];

        if (isset($secret)) {
            $this->secret = $secret;

            return $this->auth();
        }

        $this->fetchPayload();
    }

    /**
     * Authorize the request provided a signature.
     *
     * @return bool
     */
    private function auth()
    {
        if (!array_key_exists('HTTP_X_HUB_SIGNATURE', $this->headers)) {
            $this->apiMessages[] = 'No signature provided';

            return false;
        }

        if (strpos($this->headers['HTTP_X_HUB_SIGNATURE'], 'sha1=') !== 0) {
            return false;
        }

        list($this->algorithm, $this->signature) = explode('=', $this->headers['HTTP_X_HUB_SIGNATURE'], 2);

        if (!$this->validate()) {
            $this->apiMessages[] = 'Signature not authorized';

            return false;
        }

        $this->fetchPayload();
        $this->authenticated = true;

        return true;
    }

    /**
     * Compare the hashes provided by the request and the server.
     *
     * @return bool
     */
    private function validate()
    {
        return hash_equals(
            hash_hmac(
                $this->algorithm,
                $this->getTemporaryPayload(),
                $this->secret
            ),
            $this->signature);
    }

    /**
     * Return the payload temporarily for authorization.
     *
     * @return array
     */
    protected function getTemporaryPayload()
    {
        switch ($this->contentType) {
            case 'application/json':
                return file_get_contents('php://input');
            break;
            case 'application/x-www-form-urlencoded':
                return \Request::input('payload');
            break;
        }
    }
}
