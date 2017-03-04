<?php
namespace GitLab\Event;
/**
 * GitLab build event class.
 * Can be straight up echoed for message.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Build extends Event {

    /**
     * The user who made the push
     * @var Object
     */
    public $user;

    /**
     * Gets the payload and selects the necessary properties
     * @param Object $payload JSON
     */
    public function __construct($payload) {
        foreach ($payload as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function __toString() {
        return $this->user->name . " just changed the status of a build in the " . $this->project->name . " repository.";
    }
}
