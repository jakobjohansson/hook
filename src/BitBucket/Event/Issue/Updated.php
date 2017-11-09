<?php

namespace Hook\BitBucket\Event\Issue;

use Hook\BitBucket\Event\Event;

class Updated extends Event
{
    /**
     * The user who made the commit.
     *
     * @var object
     */
    public $actor;

    /**
     * The repository.
     *
     * @var object
     */
    public $repository;

    /**
     * The issue.
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
        return $this->actor->username . " just <a href='" . $this->issue->links->html->href . "'>updated their issue</a> in the " . $this->repository->full_name . " repository.";
    }
}
