<?php

namespace Hook\GitHub\Event\PullRequest;

use Hook\GitHub\Event\Event;

class PullRequest extends Event
{
    /**
     * The action performed on the pull request.
     *
     * @var string
     */
    public $action = '';

    /**
     * The pull request object.
     *
     * @var object
     */
    public $pull_request = '';

    /**
     * The output to be sent to front end.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login.' just '.$this->action
        ." a pull request in the <a href='".$this->pull_request->html_url
        ."'>".$this->repository->full_name.'</a> repository.';
    }
}
