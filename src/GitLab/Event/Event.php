<?php

namespace Hook\GitLab\Event;

abstract class Event
{
    /**
     * The project object in the event.
     *
     * @var object
     */
    public $project;

    /**
     * The attribute object.
     *
     * @var object
     */
    public $object_attributes;

    /**
     * Iterate the payload and set properties.
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
}
