<?php

namespace Hook\BitBucket\Event\Repository;

use Hook\BitBucket\Event\Event;

class Push extends Event
{
    /**
     * The user who pushed the commits.
     *
     * @var object
     */
    public $actor;

    /**
     * The repository with the commits.
     *
     * @var object
     */
    public $repository;

    /**
     * The details of the push.
     *
     * @var object
     */
    public $push;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->actor->username . ' just pushed ' . count($this->push->changes[0]->commits)
        . " commit(s) to <a href='" . $this->push->changes[0]->links->html->href . "'>" . $this->repository->full_name . "</a>.";
    }
}
