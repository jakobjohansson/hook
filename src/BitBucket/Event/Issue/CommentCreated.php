<?php

namespace Hook\BitBucket\Event\Issue;

use Hook\BitBucket\Event\Event;

class CommentCreated extends Event
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
        return $this->actor->username . " just <a href='" . $this->issue->links->html->href . "'>commented on an issue</a> in the " . $this->repository->full_name . " repository.";
    }
}
