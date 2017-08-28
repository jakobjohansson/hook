<?php

namespace GitHub\Event;

/**
 * GitHub label event class.
 *
 * @category   API
 *
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
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
        .$this->html_url."'>".$this->repository->full_name
        .'</a> repository.';
    }
}
