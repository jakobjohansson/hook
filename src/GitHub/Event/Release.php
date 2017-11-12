<?php

namespace Hook\GitHub\Event;

class Release extends Event
{
    /**
     * The action performed on the pull review.
     *
     * @var string
     */
    public $action;

    /**
     * The release object.
     *
     * @var object
     */
    public $release;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->release->author->login . ' just ' . $this->action
        . " a new release in the <a href='" . $this->release->html_url
        . "'>" . $this->repository->full_name . '</a> repository.';
    }
}
