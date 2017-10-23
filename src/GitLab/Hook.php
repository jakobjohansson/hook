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
     * Checking for X-Gitlab-Event header and authorizing.
     *
     * @param string $secret the authorization key
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
     * Authorizing method with the helper functions secretValidator() and checkSecret()
     * Sends message to apiMessages if a problem occurs.
     *
     * @return bool true | false
     */
    private function auth()
    {
        if (!array_key_exists('HTTP_X_GITLAB_TOKEN', $this->headers)) {
            $this->apiMessages[] = 'No signature provided';

            return false;
        }

        $this->signature = $this->headers['HTTP_X_GITLAB_TOKEN'];

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
        return $this->signature === $this->secret;
    }
}
