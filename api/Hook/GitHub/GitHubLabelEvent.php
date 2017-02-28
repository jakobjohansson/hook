<?php
namespace Hook\GitHub;
/**
 * GitHub label event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class GitHubLabelEvent extends GitHubEvent {

    /**
     * The action performed on the comment
     * @var string
     */
    public $action = "";

    /**
     * The label object
     * @var Object
     */
    public $label = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->sender->login . " just " . $this->action
        . " a label in the <a href='"
        . $this->html_url . "'>" . $this->repository->full_name
        . "</a> repository.";
    }
}
