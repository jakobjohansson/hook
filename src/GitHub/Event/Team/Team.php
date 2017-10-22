<?php

namespace Hook\GitHub\Event\Team;

use Hook\GitHub\Event\Event;

class Team extends Event
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
