<?php

namespace Hook\GitHub\Event;

class Push extends Event
{
    /**
     * URL to the event.
     *
     * @var string
     */
    public $compare = '';

    /**
     * Array with commits in the push.
     *
     * @var array
     */
    public $commits = '';

    /**
     * Object with name and email properties of the pusher.
     *
     * @var object
     */
    public $pusher = '';

    /**
     * The output to be sent to front end.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->pusher->name.' just pushed '.count($this->commits)
        ." commit(s) to <a href='".$this->compare."'>"
        .$this->repository->full_name.'</a>.';
    }
}
