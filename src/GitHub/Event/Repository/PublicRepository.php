<?php

namespace Hook\GitHub\Event\Repository;

use Hook\GitHub\Event\Event;

class PublicRepository extends Event
{
    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login . " just made the <a href='" . $this->repository->html_url
        . "'>" . $this->repository->full_name . '</a> repository public.';
    }
}
