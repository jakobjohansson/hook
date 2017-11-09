<?php

namespace Hook\BitBucket\Event;

abstract class Event
{
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
}
