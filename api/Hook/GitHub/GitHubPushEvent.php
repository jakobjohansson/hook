<?php
namespace Hook\GitHub;
/**
 * GitHub push event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class GitHubPushEvent extends GitHubEvent {

    /**
     * URL to the event
     * @var String
     */
    public $compare = "";

    /**
     * Array with commits in the push
     * @var Array
     */
    public $commits = "";

    /**
     * Object with name and email properties of the pusher
     * @var Object
     */
    public $pusher = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->pusher->name . " just pushed " . count($this->commits)
        . " commit(s) to <a href='" . $this->compare . "'>"
        . $this->repository->full_name . "</a>.";
    }
}
