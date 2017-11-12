<?php

namespace Hook\BitBucket\Event\PullRequest\Comment;

use Hook\BitBucket\Event\Event;

class Deleted extends Event
{
    /**
     * The user who deleted their comment.
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
     * The comment.
     *
     * @var object
     */
    public $comment;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->actor->username . " just deleted their comment on a <a href='" . $this->pullrequest->links->html->href . "'>pull request</a> in the " . $this->repository->full_name . ' repository.';
    }
}
