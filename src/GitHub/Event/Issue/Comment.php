<?php

namespace Hook\GitHub\Event\Issue;

class Comment extends Issues
{
    /**
     * The comment object.
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
        return $this->comment->user->login . " just <a href='"
        . $this->comment->html_url . "'>" . $this->action
        . ' a comment on an issue</a> in the ' . $this->repository->full_name
        . ' repository.';
    }
}
