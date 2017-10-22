<?php

namespace Hook\GitHub\Event\Project;

use Hook\GitHub\Event\Event;

class Project extends Event
{
    /**
     * The action performed on the project.
     *
     * @var string
     */
    public $action = '';

    /**
     * The project object.
     *
     * @var object
     */
    public $project = '';

    /**
     * The output to be sent to front end.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login.' just '.$this->action
        ." a project in the <a href='".$this->repository->html_url
        ."'>".$this->repository->full_name.'</a> repository.';
    }
}
