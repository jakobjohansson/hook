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
     * The output to be sent to front end.
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
