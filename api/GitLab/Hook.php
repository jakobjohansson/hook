<?php

namespace GitLab;

use EventMap;
use Traits\Authenticates;
use Traits\HandlesEvents;
use Traits\MapsEvents;

/**
 * GitLab service for the webhook-api.
 * This hook is returned if specified in the static service function.
 * Will provide authorization if secret is provided.
 *
 * @category   API
 *
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Hook extends \Hook
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

        if (!array_key_exists('X-Gitlab-Event', $this->headers)) {
            $this->apiMessages[] = 'GitLab Event header not present';

            return;
        }

        $this->event = $this->headers['X-Gitlab-Event'];

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
        if (!array_key_exists('X-Gitlab-Token', $this->headers)) {
            $this->apiMessages[] = 'No signature provided';

            return false;
        }

        $this->signature = $this->headers['X-Gitlab-Token'];

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
