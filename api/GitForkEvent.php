<?php
/**
 * GitHub fork event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class GitForkEvent extends GitEvent {

    /**
     * The fork object
     * @var Object
     */
    public $forkee = "";

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
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->forkee->owner->login . " <a href='"
        . $this->html_url . "'>just forked</a> a repository from "
        . $this->repository->owner->login . ".";
    }
}
