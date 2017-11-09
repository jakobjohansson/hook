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
     * Get the payload and select the necessary properties.
     *
     * @param mixed $payload
     */
    public function __construct($payload)
    {
        foreach ($payload as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->user->name . ' just changed the status of a build in the ' . $this->project_name . ' repository.';
    }
}
