<?php

namespace Hook\GitHub\Event;

class Label extends Event
{
    /**
     * The action performed on the label.
     *
     * @var string
     */
    public $action = '';

    /**
     * The label object.
     *
     * @var object
     */
    public $label = '';

    /**
     * The output to be sent to front end.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login.' just '.$this->action
        ." a label in the <a href='"
        .$this->repository->html_url."'>".$this->repository->full_name
        .'</a> repository.';
    }
}
