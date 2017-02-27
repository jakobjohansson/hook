<?php
/**
 * GitHub gollum event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class GitGollumEvent extends GitEvent {

    /**
     * The page array
     * @var Array
     */
    public $pages = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->sender->login . " just <a href='"
        . $this->pages[0]->html_url . "'>"
        . $this->pages[0]->action . " a wiki page</a> in the "
        . $this->repository->full_name . " repository.";
    }
}
