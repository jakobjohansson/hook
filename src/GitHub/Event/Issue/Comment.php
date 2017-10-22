<?php

namespace Hook\GitHub\Event\Issue;

class Comment extends Issues
{
    /**
     * The comment object itself.
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
        return $this->comment->user->login." just <a href='"
        .$this->comment->html_url."'>".$this->action
        .' a comment on an issue</a> in the '.$this->repository->full_name
        .' repository.';
    }
}
