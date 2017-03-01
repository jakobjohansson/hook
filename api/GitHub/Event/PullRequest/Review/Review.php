<?php
namespace GitHub\Event\PullRequest\Review;
/**
 * GitHub pull request reviewevent class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Review extends \GitHub\Event\PullRequest\PullRequest  {

    /**
     * The review object
     * @var Object
     */
    public $review = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->review->user->login . " just " . $this->action
        . " a review on a pull request in the <a href='" . $this->review->html_url
        . "'>" . $this->repository->full_name . "</a> repository.";
    }
}
