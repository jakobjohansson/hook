<?php

namespace Hook\GitLab\Event;

class Tag extends Event
{
    /**
     * The user who made the push.
     *
     * @var string
     */
    public $user_name = '';

    /**
     * The ref pushed.
     *
     * @var string
     */
    public $ref = '';

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
        return $this->user_name . ' just pushed the tag '
        . explode('/', $this->ref)[2]
        . " to the <a href='" . $this->project->web_url
        . "'>" . $this->project->name . '</a> repository.';
    }
}
