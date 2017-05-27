<?php
namespace GitHub\Event;
/**
 * GitHub gollum event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Gollum extends Event {

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
        $output = $this->sender->login . " just made these wiki changes: <br />";
        foreach ($this->pages as $page) {
            $output .= "<br />" . $page->action . " <a href='" . $page->html_url . "'>" . $page->page_name . "</a>";
        }
        $output .= "<br />In <a href='" . $this->html_url . "'>" . $this->repository->full_name . "</a>.";
        return $output;
    }
}
