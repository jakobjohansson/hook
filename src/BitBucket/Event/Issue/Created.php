<?php

namespace Hook\BitBucket\Event\Issue;

use Hook\BitBucket\Event\Event;

class Created extends Event
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
        return $this->actor->username . " just <a href='" . $this->issue->links->html->href . "'>opened an issue</a> in the " . $this->repository->full_name . ' repository.';
    }
}
