<?php
namespace Hook\GitHub;
/**
 * GitHub pull request review comment event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class GitHubPullRequestReviewCommentEvent extends GitHubEvent {

    /**
     * The action performed on the pull request
     * @var string
     */
    public $action = "";

    /**
     * The comment object
     * @var Object
     */
    public $comment = "";

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
        return $this->comment->user->login . " just " . $this->action
        . " a comment on a pull request review in the <a href='" . $this->comment->html_url
        . "'>" . $this->repository->full_name . "</a> repository.";
    }
}
