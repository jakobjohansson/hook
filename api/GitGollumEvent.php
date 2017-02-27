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
        $re = $this->sender->login . " just made these wiki changes: <br />";
        foreach ($this->pages as $page) {
            $re .= "<br />" . $page->action . " <a href='" . $page->html_url . "'>" . $page->page_name . "</a>";
        }
        $re .= "<br />In <a href='" . $this->html_url . "'>" . $this->repository->full_name . "</a>.";
        return $re;
    }
}
