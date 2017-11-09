<?php

namespace Hook\GitHub\Event;

class Create extends Event
{
    /**
     * The git ref (or null if a repository was created).
     *
     * @var string
     */
    public $ref = '';

    /**
     * The type of object that was created.
     *
     * @var string
     */
    public $ref_type = '';

    /**
     * The description of the current repository.
     *
     * @var string
     */
    public $description = '';

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login . ' just made a new '
        . $this->ref_type . " in the <a href='" . $this->repository->html_url
        . "'>" . $this->repository->full_name . '</a> repository.';
    }
}
