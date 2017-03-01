<?php
namespace GitHub\Event\PullRequest;
/**
 * GitHub pull request event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class PullRequest extends \GitHub\Event\Event {

    /**
     * The action performed on the pull request
     * @var string
     */
    public $action = "";

    /**
     * The pull request object
     * @var Object
     */
    public $pull_request = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->sender->login . " just " . $this->action
        . " a pull request in the <a href='" . $this->pull_request->html_url
        . "'>" . $this->repository->full_name . "</a> repository.";
    }
}
