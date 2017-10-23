<?php

namespace Hook\GitHub\Event\Project;

use Hook\GitHub\Event\Event;

class Column extends Event
{
    /**
     * The action performed on the project column.
     *
     * @var string
     */
    public $action = '';

    /**
     * The project column object.
     *
     * @var object
     */
    public $project_column = '';

    /**
     * The output to be sent to front end.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login . ' just ' . $this->action
        . " a project column in the <a href='" . $this->repository->html_url
        . "'>" . $this->repository->full_name . '</a> repository.';
    }
}
