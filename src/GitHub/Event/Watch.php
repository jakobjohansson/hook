<?php

namespace GitHub\Event;

/**
 * GitHub watch event class.
 *
 * @category   API
 *
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
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
