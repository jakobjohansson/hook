<?php

namespace GitHub\Event\Organization;

/**
 * GitHub organization event class.
 *
 * @category   API
 *
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Organization extends \GitHub\Event\Event
{
    /**
     * The action performed on the organization.
     *
     * @var string
     */
    public $action = '';

    /**
     * The membership object.
     *
     * @var object
     */
    public $membership = '';

    /**
     * The organization object.
     *
     * @var object
     */
    public $organization = '';

    /**
     * The invitation object.
     *
     * @var object
     */
    public $invitation = '';

    /**
     * The output to be sent to front end.
     *
     * @return string
     */
    public function __toString()
    {
        switch ($this->action) {
            case 'member_invited':
                return $this->sender->login." just invited <a href='".$this->invitation->html_url."'>"
                .$this->invitation->login.'</a> to the '
                .$this->organization->login.' organization.';
            break;
            case 'member_added':
                return $this->sender->login.' just added '
                ." <a href='".$this->membership->user->html_url."'>"
                .$this->membership->user->login.'</a> to the '
                .$this->organization->login.' organization.';
            break;
            case 'member_removed':
                return $this->sender->login.' just removed '
                ." <a href='".$this->membership->user->html_url."'>"
                .$this->membership->user->login.'</a> from the '
                .$this->organization->login.' organization.';
            break;
        }
    }
}
