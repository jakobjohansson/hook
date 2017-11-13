<?php

namespace Hook\GitLab;

use Hook\Request;
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

        if (!Request::header('HTTP_X_GITLAB_EVENT')) {
            $this->apiMessages[] = 'GitLab Event header not present';

            return;
        }

        $this->event = Request::header('HTTP_X_GITLAB_EVENT');

        if (isset($secret)) {
            $this->secret = $secret;

            return $this->auth();
        }

        $this->payload = Request::payload();
    }

    /**
     * Authorize the request provided a signature.
     *
     * @return bool
     */
    private function auth()
    {
        if (!Request::header('HTTP_X_GITLAB_TOKEN')) {
            $this->apiMessages[] = 'No signature provided';

            return false;
        }

        $this->signature = Request::header('HTTP_X_GITLAB_TOKEN');

        if (!$this->validate()) {
            $this->apiMessages[] = 'Signature not authorized';

            return false;
        }

        $this->payload = Request::payload();
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
