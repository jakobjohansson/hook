<?php

namespace Hook\BitBucket\Event;

abstract class Event
{
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
