<?php

namespace Hook\GitHub\Event\Issue;

use Hook\GitHub\Event\Event;

class Issues extends Event
{
    /**
     * The action performed on the issue.
     *
     * @var string
     */
    public $action;

    /**
     * The issue object.
     *
     * @var object
     */
    public $issue;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->issue->user->login . " just <a href='"
        . $this->issue->html_url . "'>" . $this->action
        . ' an issue</a> in the ' . $this->repository->full_name . ' repository.';
    }
}
