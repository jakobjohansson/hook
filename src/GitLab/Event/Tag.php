<?php

namespace Hook\GitLab\Event;

class Tag extends Event
{
    /**
     * The user who made the push.
     *
     * @var string
     */
    public $user_name;

    /**
     * The tag reference.
     *
     * @var string
     */
    public $ref;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->user_name . ' just pushed the tag '
        . explode('/', $this->ref)[2]
        . " to the <a href='" . $this->project->web_url
        . "'>" . $this->project->name . '</a> repository.';
    }
}
