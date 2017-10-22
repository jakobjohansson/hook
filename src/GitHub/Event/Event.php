<?php

namespace Hook\GitHub\Event;

abstract class Event
{
    /**
     * The repository object in the push.
     *
     * @var object
     */
    public $repository = '';

    /**
     * The pusher object.
     *
     * @var object
     */
    public $sender = '';

    /**
     * The URL of the repository.
     *
     * @var string
     */
    public $html_url = '';

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
