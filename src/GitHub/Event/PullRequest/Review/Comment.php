<?php

namespace Hook\GitHub\Event\PullRequest\Review;

use Hook\GitHub\Event\PullRequest\PullRequest as Event;

class Comment extends Event
{
    /**
     * The comment object.
     *
     * @var object
     */
    public $comment = '';

    /**
     * The output to be sent to front end.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->comment->user->login . ' just ' . $this->action
        . " a comment on a pull request review in the <a href='" . $this->comment->html_url
        . "'>" . $this->repository->full_name . '</a> repository.';
    }
}
