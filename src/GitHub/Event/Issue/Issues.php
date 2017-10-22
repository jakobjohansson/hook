<?php

namespace Hook\GitHub\Event\Issue;

use Hook\GitHub\Event\Event;

class Issues extends Event
{
    /**
     * The action performed on the issue.
     *
     * @var string
     */
    public $action = '';

    /**
     * The issue object.
     *
     * @var object
     */
    public $issue = '';

    /**
     * The output to be sent to front end.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login." just <a href='"
        .$this->issue->html_url."'>".$this->action
        .' an issue</a> in the '.$this->repository->full_name.' repository.';
    }
}
