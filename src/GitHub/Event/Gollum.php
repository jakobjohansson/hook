<?php

namespace Hook\GitHub\Event;

class Gollum extends Event
{
    /**
     * The page array.
     *
     * @var array
     */
    public $pages;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        $output = $this->sender->login . ' just made these wiki changes: <br />';
        foreach ($this->pages as $page) {
            $output .= '<br />' . $page->action . " <a href='" . $page->html_url . "'>" . $page->page_name . '</a>';
        }
        $output .= "<br />In <a href='" . $this->repository->html_url . "'>" . $this->repository->full_name . '</a>.';

        return $output;
    }
}
