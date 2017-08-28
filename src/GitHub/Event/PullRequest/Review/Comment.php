<?php

namespace GitHub\Event\PullRequest\Review;

/**
 * GitHub pull request review comment event class.
 *
 * @category   API
 *
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Comment extends \GitHub\Event\PullRequest\PullRequest
{
    /**
     * The comment object.
     *
     * @var object
     */
    public $comment = '';

    /**
     * The output to be sent to front end.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->comment->user->login.' just '.$this->action
        ." a comment on a pull request review in the <a href='".$this->comment->html_url
        ."'>".$this->repository->full_name.'</a> repository.';
    }
}
