<?php

namespace Hook\GitHub\Event;

class Delete extends Event
{
    /**
     * The reference that was deleted.
     *
     * @var string
     */
    public $ref;

    /**
     * The type of object that was deleted.
     *
     * @var string
     */
    public $ref_type;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login . ' just deleted the '
        . $this->ref_type . ' ' . $this->ref . " in the <a href='" . $this->repository->html_url
        . "'>" . $this->repository->full_name . '</a> repository.';
    }
}
