<?php

namespace Hook\BitBucket\Event\Repository;

use Hook\BitBucket\Event\Event;

class Transfer extends Event
{
    /**
     * The new user.
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
     * The old user.
     *
     * @var object
     */
    public $previous_owner;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->previous_owner->username . " just transferred the <a href='" . $this->repository->project->links->html->href . "'>" . $this->repository->name . "</a> repository to " . $this->actor->username . ".";
    }
}
