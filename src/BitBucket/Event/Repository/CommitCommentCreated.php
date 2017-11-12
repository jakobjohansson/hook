<?php

namespace Hook\BitBucket\Event\Repository;

use Hook\BitBucket\Event\Event;

class CommitCommentCreated extends Event
{
    /**
     * The user who commented.
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
     * The actual comment.
     *
     * @var object
     */
    public $comment;

    /**
     * The commit details.
     *
     * @var object
     */
    public $commit;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->actor->username . " just commented on a <a href='" . $this->comment->links->html->href . "'>commit</a> in the " . $this->repository->full_name . ' repository.';
    }
}
