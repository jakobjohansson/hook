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
     * Gets the payload and selects the necessary properties.
     *
     * @param object $payload JSON
     */
    public function __construct($payload)
    {
        foreach ($payload as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function __toString()
    {
        return $this->user->name." just <a href='"
        .$this->object_attributes->url
        ."'>changed the status</a> of a pipeline in the <a href='".$this->project->web_url
        ."'>".$this->project->name.'</a> repository.';
    }
}
