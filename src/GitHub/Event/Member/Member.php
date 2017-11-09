<?php

namespace Hook\GitHub\Event\Member;

use Hook\GitHub\Event\Event;

class Member extends Event
{
    /**
     * The action performed on the member.
     *
     * @var string
     */
    public $action = '';

    /**
     * The member object.
     *
     * @var object
     */
    public $member = '';

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login . ' just ' . $this->action
        . " <a href='" . $this->member->html_url . "'>"
        . $this->member->login . '</a> in the '
        . $this->repository->full_name . ' repository.';
    }
}
