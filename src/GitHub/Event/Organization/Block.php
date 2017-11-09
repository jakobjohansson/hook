<?php

namespace Hook\GitHub\Event\Organization;

use Hook\GitHub\Event\Event;

class Block extends Event
{
    /**
     * The action performed on the organization.
     *
     * @var string
     */
    public $action = '';

    /**
     * The blocked user object.
     *
     * @var object
     */
    public $blocked_user = '';

    /**
     * The organization object.
     *
     * @var object
     */
    public $organization = '';

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login . ' just ' . $this->action . " <a href='" . $this->blocked_user->html_url . "'>"
        . $this->blocked_user->login . '</a> from the '
        . $this->organization->login . ' organization.';
    }
}
