<?php

namespace Hook\GitHub\Event;

class PageBuild extends Event
{
    /**
     * The build object.
     *
     * @var object
     */
    public $build;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login . ' just ' . $this->build->status
        . " a page in the <a href='" . $this->repository->html_url . "'>"
        . $this->repository->full_name . '</a> repository.';
    }
}
