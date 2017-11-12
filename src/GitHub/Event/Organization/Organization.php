<?php

namespace Hook\GitHub\Event\Organization;

use Hook\GitHub\Event\Event;

class Organization extends Event
{
    /**
     * The action performed on the organization.
     *
     * @var string
     */
    public $action;

    /**
     * The membership object.
     *
     * @var object
     */
    public $membership;

    /**
     * The organization object.
     *
     * @var object
     */
    public $organization;

    /**
     * The invitation object.
     *
     * @var object
     */
    public $invitation;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        switch ($this->action) {
            case 'member_invited':
                return $this->sender->login . " just invited <a href='https://github.com/" . $this->invitation->login . "'>"
                . $this->invitation->login . '</a> to the '
                . $this->organization->login . ' organization.';
            break;
            case 'member_added':
                return $this->sender->login . ' just added '
                . " <a href='" . $this->membership->user->html_url . "'>"
                . $this->membership->user->login . '</a> to the '
                . $this->organization->login . ' organization.';
            break;
            case 'member_removed':
                return $this->sender->login . ' just removed '
                . " <a href='" . $this->membership->user->html_url . "'>"
                . $this->membership->user->login . '</a> from the '
                . $this->organization->login . ' organization.';
            break;
        }
    }
}
