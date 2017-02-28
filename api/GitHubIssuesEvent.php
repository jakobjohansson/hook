<?php
/**
 * GitHub issues event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class GitHubIssuesEvent extends GitHubEvent {

    /**
     * The action performed on the issue
     * @var string
     */
    public $action = "";

    /**
     * The issue object
     * @var Object
     */
    public $issue = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->sender->login . " just <a href='"
        . $this->issue->html_url . "'>" . $this->action
        . " an issue</a> in the " . $this->repository->full_name . " repository.";
    }
}
