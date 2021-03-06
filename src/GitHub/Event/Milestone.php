<?php

namespace Hook\GitHub\Event;

class Milestone extends Event
{
    /**
     * The action performed on the milestone.
     *
     * @var string
     */
    public $action;

    /**
     * The milstone object.
     *
     * @var object
     */
    public $milestone;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login . ' just ' . $this->action
        . " <a href='" . $this->milestone->html_url . "'>"
        . $this->milestone->title . '</a> in the '
        . $this->repository->full_name . ' repository.';
    }
}
