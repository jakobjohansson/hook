<?php

namespace GitHub\Event\Member;

/**
 * GitHub membership event class.
 *
 * @category   API
 *
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Membership extends Member
{
    /**
     * The scope of the membership.
     *
     * @var string
     */
    public $scope = '';

    /**
     * The team of the membership.
     *
     * @var object
     */
    public $team = '';

    /**
     * The output to be sent to front end.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login.' just '.$this->action
        ." <a href='".$this->member->html_url."'>"
        .$this->member->login.'</a> in the '
        .$this->team->name.' '.$this->scope.'.';
    }
}
