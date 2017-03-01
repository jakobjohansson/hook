<?php
namespace GitHub\Event\Team;
/**
 * GitHub team add event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Add extends \Event {

    /**
     * The team object
     * @var Object
     */
    public $team = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->sender->login . " just added a <a href='"
        . $this->repository->html_url . "'>repository</a> to the "
        . $this->team->name . " team.";
    }
}
