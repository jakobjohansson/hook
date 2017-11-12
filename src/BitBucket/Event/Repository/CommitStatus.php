<?php

namespace Hook\BitBucket\Event\Repository;

use Hook\BitBucket\Event\Event;

class CommitStatus extends Event
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
     * The commit status object.
     *
     * @var object
     */
    public $commit_status;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->commit_status->key . ": <a href='" . $this->commit_status->url . "'>" . $this->commit_status->description . '</a>.';
    }
}
