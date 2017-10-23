<?php

namespace Hook\GitLab\Event;

class Build extends Event
{
    /**
     * The user who made the push.
     *
     * @var object
     */
    public $user;

    /**
     * The name of the repository.
     *
     * @var string
     */
    public $project_name;

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
        return $this->user->name . ' just changed the status of a build in the ' . $this->project_name . ' repository.';
    }
}
