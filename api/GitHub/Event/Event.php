<?php
namespace GitHub\Event;
/**
 * GitHub event parent.
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
     * The repository object in the push
     * @var Object
     */
    public $repository = "";

    /**
     * The pusher object
     * @var Object
     */
    public $sender = "";

    /**
     * The URL of the repository
     * @var string
     */
    public $html_url = "";

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
