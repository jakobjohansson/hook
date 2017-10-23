<?php

namespace Hook\GitHub\Event\Repository;

use Hook\GitHub\Event\Event;

class Repository extends Event
{
    /**
     * The action performed on the repository.
     *
     * @var string
     */
    public $action = '';

    /**
     * The output to be sent to front end.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login.' just '.$this->action
        ." the <a href='".$this->repository->html_url
        ."'>".$this->repository->full_name.'</a> repository.';
    }
}
