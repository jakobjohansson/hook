<?php
namespace GitHub\Event;
/**
 * GitHub organization block event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class OrganizationBlock extends Event {

    /**
     * The action performed on the organization
     * @var string
     */
    public $action = "";

    /**
     * The blocked user object
     * @var Object
     */
    public $blocked_user = "";

    /**
     * The organization object
     * @var Object
     */
    public $organization = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->sender->login . " just " . $this->action . " "
        . " <a href='" . $this->blocked_user->html_url . "'>"
        . $this->blocked_user->login . "</a> from the "
        . $this->organization->login . " organization.";
    }
}
