<?php

namespace Hook\BitBucket\Event\PullRequest\Comment;

use Hook\BitBucket\Event\Event;

class Updated extends Event
{
    /**
     * The user who updated their comment.
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
        return $this->actor->username . " just <a href='" . $this->comment->links->html->href . "'>updated their comment</a> on a pull request in the " . $this->repository->full_name . ' repository.';
    }
}
