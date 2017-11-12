<?php

namespace Hook\GitLab\Event;

class Push extends Event
{
    /**
     * The user who made the push.
     *
     * @var string
     */
    public $user_name;

    /**
     * The commit objects.
     *
     * @var array
     */
    public $commits;

    /**
     * The number of commits pushed.
     *
     * @var int
     */
    public $total_commits_count;

    /**
     * Get the payload and select the necessary properties.
     *
     * @param mixed $payload
     */
    public function __construct($payload)
    {
        foreach ($payload as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->user_name . ' just pushed ' . $this->total_commits_count
        . " commit(s) to the <a href='" . $this->project->web_url
        . "'>" . $this->project->name . '</a> repository.';
    }
}
