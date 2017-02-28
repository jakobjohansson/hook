<?php
namespace Hook\GitHub;
/**
 * GitHub milestone event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class GitHubMilestoneEvent extends GitHubEvent {

    /**
     * The action performed on the milestone
     * @var string
     */
    public $action = "";

    /**
     * The milstone object
     * @var Object
     */
    public $milestone = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->sender->login . " just " . $this->action
        . " <a href='" . $this->milestone->html_url . "'>"
        . $this->milestone->title . "</a> in the "
        . $this->repository->full_name . " repository.";
    }
}
