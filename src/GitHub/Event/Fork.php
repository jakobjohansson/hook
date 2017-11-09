<?php

namespace Hook\GitHub\Event;

class Fork extends Event
{
    /**
     * The fork object.
     *
     * @var object
     */
    public $forkee = '';

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->forkee->owner->login . " <a href='"
        . $this->forkee->html_url . "'>just forked</a> a repository from "
        . $this->repository->owner->login . '.';
    }
}
