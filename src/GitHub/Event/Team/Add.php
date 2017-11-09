<?php

namespace Hook\GitHub\Event\Team;

use Hook\GitHub\Event\Event;

class Add extends Event
{
    /**
     * The team object.
     *
     * @var object
     */
    public $team;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login . " just added a <a href='"
        . $this->repository->html_url . "'>repository</a> to the "
        . $this->team->name . ' team.';
    }
}
