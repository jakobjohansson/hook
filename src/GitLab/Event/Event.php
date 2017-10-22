<?php

namespace Hook\GitLab\Event;

abstract class Event
{
    /**
     * The project object in the event.
     *
     * @var object
     */
    public $project = '';

    /**
     * Object with attributes.
     *
     * @var object
     */
    public $object_attributes = '';

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
}
