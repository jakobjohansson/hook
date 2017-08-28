<?php

namespace GitHub\Event\Team;

/**
 * GitHub team event class.
 *
 * @category   API
 *
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Team extends \GitHub\Event\Event
{
    /**
     * The action performed on team.
     *
     * @var string
     */
    public $action = '';

    /**
     * The team object.
     *
     * @var object
     */
    public $team = '';

    /**
     * The organization object.
     *
     * @var object
     */
    public $organization = '';

    /**
     * The output to be sent to front end.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login.' just '.$this->action
        ." a team/team member in the <a href='".$this->organization->html_url
        ."'>".$this->organization->login.'</a> organization.';
    }
}
