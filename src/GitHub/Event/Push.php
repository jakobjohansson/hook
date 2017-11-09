<?php

namespace Hook\GitHub\Event;

class Push extends Event
{
    /**
     * The URL to the event.
     *
     * @var string
     */
    public $compare;

    /**
     * The commits in the push.
     *
     * @var array
     */
    public $commits;

    /**
     * The pusher details object.
     *
     * @var object
     */
    public $pusher;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->pusher->name . ' just pushed ' . count($this->commits)
        . " commit(s) to <a href='" . $this->compare . "'>"
        . $this->repository->full_name . '</a>.';
    }
}
