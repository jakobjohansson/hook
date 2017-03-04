<?php
namespace GitLab\Event;
/**
 * GitLab wiki event class.
 * Can be straight up echoed for message.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Wiki extends Event {

    /**
     * The user who made the push
     * @var Object
     */
    public $user = "";

    /**
     * The state of the page, rendered in setState()
     * @var String
     */
    public $state = "";

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

        $this->setState();
    }

    public function setState() {
        switch ($this->object_attributes->action) {
            case 'create':
                $this->state = "created";
            break;
            case 'delete':
                $this->state = "deleted";
            break;
            case 'edit':
                $this->state = "edited";
            break;
            default:
                $this->state = "made a change";
            break;
        }
    }

    public function __toString() {
        return $this->user->name . " just " . $this->state . " a <a href='"
        . $this->object_attributes->url
        . "'>wiki page</a> in the <a href='" . $this->project->web_url
        . "'>" . $this->project->name . "</a> repository.";
    }
}
