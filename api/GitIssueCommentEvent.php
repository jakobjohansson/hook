<?php
/**
 * GitHub issue comment event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class GitIssueCommentEvent extends GitEvent {

    /**
     * The action performed on the comment
     * @var string
     */
    public $action = "";

    /**
     * The issue object the comment belongs to
     * @var Object
     */
    public $issue = "";

    /**
     * The comment object itself
     * @var Object
     */
    public $comment = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->comment->user->login . " just <a href='"
        . $this->comment->html_url . "'>" . $this->action
        . " a comment on an issue</a> in the " . $this->repository->full_name
        . " repository.";
    }
}
