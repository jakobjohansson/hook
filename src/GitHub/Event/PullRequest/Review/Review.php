<?php

namespace Hook\GitHub\Event\PullRequest\Review;

use Hook\GitHub\Event\PullRequest\PullRequest as Event;

class Review extends Event
{
    /**
     * The review object.
     *
     * @var object
     */
    public $review = '';

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->review->user->login . ' just ' . $this->action
        . " a review on a pull request in the <a href='" . $this->review->html_url
        . "'>" . $this->repository->full_name . '</a> repository.';
    }
}
