<?php

namespace Hook\GitHub\Event;

class CommitComment extends Event
{
    /**
     * Comment object from payload.
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
        return $this->comment->user->login." just <a href='".$this->comment->html_url
        ."'>made a comment</a> on a commit in the ".$this->repository->full_name
        .' repository: <br />'.$this->comment->body;
    }
}
