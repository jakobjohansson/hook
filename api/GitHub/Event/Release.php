<?php
namespace GitHub\Event;
/**
 * GitHub review event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Release extends Event {

    /**
     * The action performed on the pull review
     * @var string
     */
    public $action = "";

    /**
     * The release object
     * @var Object
     */
    public $release;

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->release->author->login . " just " . $this->action
        . " a new release in the <a href='" . $this->release->html_url
        . "'>" . $this->repository->full_name . "</a> repository.";
    }
}
