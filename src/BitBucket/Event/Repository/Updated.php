<?php

namespace Hook\BitBucket\Event\Repository;

use Hook\BitBucket\Event\Event;

class Updated extends Event
{
    /**
     * The user who made the changes.
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
     * The changes made to the repository.
     *
     * @var object
     */
    public $changes;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->actor->username . " just updated some details in the <a href='" . $this->repository->project->links->html->href . "'>" . $this->repository->full_name . '</a> repository.';
    }
}
