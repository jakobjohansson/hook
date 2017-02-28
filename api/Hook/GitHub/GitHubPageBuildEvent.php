<?php
namespace Hook\GitHub;
/**
 * GitHub page build event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class GitHubPageBuildEvent extends GitHubEvent {

    /**
     * The build object
     * @var Object
     */
    public $build;

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->sender->login . " just " . $this->build->status
        . " a page in the <a href='" . $this->repository->html_url . "'"
        . $this->repository->full_name . " repository.";
    }
}
