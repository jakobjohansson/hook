<?php

namespace Hook\GitHub\Event;

class Watch extends Event
{
    /**
     * The output to be sent to front end.
     *
     * @return string
     */
    public function __toString()
    {
        return "<a href='".$this->sender->html_url."'>"
        .$this->sender->login."</a> just watched the <a href='"
        .$this->repository->html_url."'>".$this->repository->full_name.
         '</a> repository.';
    }
}
