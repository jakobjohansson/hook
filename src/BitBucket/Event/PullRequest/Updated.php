<?php

namespace Hook\BitBucket\Event\PullRequest;

use Hook\BitBucket\Event\Event;

class Updated extends Event
{
    /**
     * The user who updated the pull request.
     *
     * @var object
     */
    public $actor;

    /**
     * The pull request.
     *
     * @var object
     */
    public $pullrequest;

    /**
     * The repository.
     *
     * @var object
     */
    public $repository;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->actor->username . " just <a href='" . $this->pullrequest->links->html->href . "'>updated a pull request</a> in the " . $this->repository->full_name . ' repository.';
    }
}
