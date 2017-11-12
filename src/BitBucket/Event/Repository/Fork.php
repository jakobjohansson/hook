<?php

namespace Hook\BitBucket\Event\Repository;

use Hook\BitBucket\Event\Event;

class Fork extends Event
{
    /**
     * The user who made the fork.
     *
     * @var object
     */
    public $actor;

    /**
     * The forked repository.
     *
     * @var object
     */
    public $repository;

    /**
     * The new repository.
     *
     * @var object
     */
    public $fork;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->actor->username . " <a href='" . $this->fork->project->links->html->href . "'>just forked</a> a repository from " . $this->repository->owner->username . '.';
    }
}
