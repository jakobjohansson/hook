<?php

namespace Hook\GitLab\Event;

class Issue extends Event
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
        return $this->user->name . " just opened a new <a href='"
        . $this->object_attributes->url
        . "'>issue</a> in the <a href='" . $this->project->web_url
        . "'>" . $this->project->name . '</a> repository.';
    }
}
