<?php
namespace GitHub\Event;
/**
 * GitHub commit comment event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class CommitComment extends Event {

    /**
     * Comment object from payload
     * @var Object
     */
    public $comment = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->comment->user->login . " just <a href='" . $this->comment->html_url
        . "'>made a comment</a> on a commit in the " . $this->repository->full_name
        . " repository: <br />" . $this->comment->body;
    }
}
