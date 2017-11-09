<?php

namespace Hook\GitHub\Event;

class CommitComment extends Event
{
    /**
     * The comment object from the payload.
     *
     * @var object
     */
    public $comment = '';

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->comment->user->login . " just <a href='" . $this->comment->html_url
        . "'>made a comment</a> on a commit in the " . $this->repository->full_name
        . ' repository: <br />' . $this->comment->body;
    }
}
