<?php

namespace Hook\GitLab;

use Hook\EventMap;
use Hook\Hook as BaseHook;
use Hook\Traits\MapsEvents;
use Hook\Traits\Authenticates;
use Hook\Traits\HandlesEvents;

class Hook extends BaseHook
{
    use MapsEvents, HandlesEvents, Authenticates;

    /**
     * Create a new Hook instance.
     *
     * @param string $secret
     *
     * @return mixed
     */
    public function __construct($secret = null)
    {
        $this->setEventMap(EventMap::GitLab());
        $this->fetchHeaders();

        if (!array_key_exists('HTTP_X_GITLAB_EVENT', $this->headers)) {
            $this->apiMessages[] = 'GitLab Event header not present';

            return;
        }

        $this->event = $this->headers['HTTP_X_GITLAB_EVENT'];

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
        if (!array_key_exists('HTTP_X_GITLAB_TOKEN', $this->headers)) {
            $this->apiMessages[] = 'No signature provided';

            return false;
        }

        $this->signature = $this->headers['HTTP_X_GITLAB_TOKEN'];

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
        return $this->signature === $this->secret;
    }
}
