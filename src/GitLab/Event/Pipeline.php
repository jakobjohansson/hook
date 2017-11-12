<?php

namespace Hook\GitLab\Event;

class Pipeline extends Event
{
    /**
     * The user who made the push.
     *
     * @var object
     */
    public $user;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->user->name . " just changed the status of a pipeline in the <a href='" . $this->project->web_url
        . "'>" . $this->project->name . '</a> repository.';
    }
}
