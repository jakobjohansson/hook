<?php

namespace Hook\GitLab;

use Hook\Request;
use Hook\EventMap;
use Hook\Hook as BaseHook;
use Hook\Traits\Authenticates;

class Hook extends BaseHook
{
    use Authenticates;

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
