<?php

namespace Hook\GitHub;

use Hook\EventMap;
use Hook\Traits\Authenticates;
use Hook\Traits\HandlesEvents;
use Hook\Traits\MapsEvents;

class Hook extends \Hook
{
    use MapsEvents, HandlesEvents, Authenticates;

    /**
     * The hash algorithm used in the X-GitHub-Signature header.
     *
     * @var string
     */
    private $algorithm;

    /**
     * Checking for X-GitHub-Event header and authorizing.
     *
     * @param string $secret the authorization key
     */
    public function __construct($secret = null)
    {
        $this->setEventMap(EventMap::GitHub());
        $this->fetchHeaders();

        if (!array_key_exists('X-GitHub-Event', $this->headers)) {
            $this->apiMessages[] = 'GitHub Event header not present';

            return;
        }

        $this->event = $this->headers['X-GitHub-Event'];

        if (isset($secret)) {
            $this->secret = $secret;

            return $this->auth();
        }

        $this->fetchPayload();
    }

    /**
     * Authorizing method with the helper functions secretValidator() and checkSecret()
     * Sends message to apiMessages if a problem occurs.
     *
     * @return bool true | false
     */
    private function auth()
    {
        if (!array_key_exists('X-Hub-Signature', $this->headers)) {
            $this->apiMessages[] = 'No signature provided';

            return false;
        }

        list($this->algorithm, $this->signature) = explode('=', $this->headers['X-Hub-Signature'], 2);

        if (!$this->checkSecret()) {
            $this->apiMessages[] = 'Signature not authorized';

            return false;
        }

        $this->fetchPayload();

        return true;
    }

    /**
     * Compares the hashes provided by the webhook and the user.
     *
     * @return bool hash
     */
    private function checkSecret()
    {
        return hash_equals(
            hash_hmac(
                $this->algorithm,
                $this->secretValidator(),
                $this->secret
            ),
            $this->signature);
    }
}
