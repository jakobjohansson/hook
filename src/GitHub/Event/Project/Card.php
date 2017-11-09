<?php

namespace Hook\GitHub\Event\Project;

use Hook\GitHub\Event\Event;

class Card extends Event
{
    /**
     * The action performed on the project card.
     *
     * @var string
     */
    public $action = '';

    /**
     * The project card object.
     *
     * @var object
     */
    public $project_card = '';

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login . ' just ' . $this->action
        . " a project card in the <a href='" . $this->repository->html_url
        . "'>" . $this->repository->full_name . '</a> repository.';
    }
}
