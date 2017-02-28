<?php
namespace Hook\GitHub;
/**
 * GitHub delete event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class GitHubDeleteEvent extends GitHubEvent {

    /**
     * The git ref (name) that was deleted
     * @var String
     */
    public $ref = "";

    /**
     * The type of object that was deleted
     * @var string
     */
    public $ref_type = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->sender->login . " just deleted the "
        . $this->ref_type . " " . $this->ref . "in the <a href='" . $this->html_url
        . "'>" . $this->repository->full_name . "</a> repository.";
    }
}
