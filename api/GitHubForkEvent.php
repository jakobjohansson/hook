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
class GitHubForkEvent extends GitHubEvent {

    /**
     * The fork object
     * @var Object
     */
    public $forkee = "";

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
