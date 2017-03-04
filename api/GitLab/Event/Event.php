<?php
namespace GitLab\Event;
/**
 * GitLab event parent.
 * Can be straight up echoed for message.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Event {
    /**
     * The project object in the event
     * @var Object
     */
    public $project = "";

    /**
     * Object with attributes
     * @var Object
     */
    public $object_attributes = "";

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
}
