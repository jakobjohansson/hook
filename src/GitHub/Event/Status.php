<?php

namespace Hook\GitHub\Event;

class Status extends Event
{
    /**
     * The description provided by the CI.
     *
     * @var string
     */
    public $description;

    /**
     * The URL provided by the CI.
     *
     * @var string
     */
    public $target_url;

    /**
     * The state.
     *
     * @var string
     */
    public $state;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->repository->full_name . ": <a href='" . $this->target_url . "'>" . $this->description . "</a>.";
    }

}
