<?php
namespace Hook\GitHub;
/**
 * GitHub repository event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class GitHubRepositoryEvent extends GitHubEvent {

    /**
     * The action performed on the repository
     * @var string
     */
    public $action = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->sender->login . " just " . $this->action
        . " the <a href='" . $this->repository->html_url
        . "'>" . $this->repository->full_name . "</a>.";
    }
}
