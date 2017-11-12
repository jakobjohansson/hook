<?php

namespace Hook\GitLab\Event;

class Note extends Event
{
    /**
     * The user who made the push.
     *
     * @var object
     */
    public $user;

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        switch ($this->object_attributes->noteable_type) {
            case 'Commit':
                return $this->user->name . " just <a href='"
                . $this->object_attributes->url
                . "'>commented on a commit</a> in the <a href='" . $this->project->web_url
                . "'>" . $this->project->name . '</a> repository.';
            break;

            case 'MergeRequest':
                return $this->user->name . " just <a href='"
                . $this->object_attributes->url
                . "'>commented on a merge request</a> in the <a href='" . $this->project->web_url
                . "'>" . $this->project->name . '</a> repository.';
            break;

            case 'Issue':
                return $this->user->name . " just <a href='"
                . $this->object_attributes->url
                . "'>commented on an issue </a> in the <a href='" . $this->project->web_url
                . "'>" . $this->project->name . '</a> repository.';
            break;

            case 'Snippet':
                return $this->user->name . " just <a href='"
                . $this->object_attributes->url
                . "'>commented on a snippet</a> in the <a href='" . $this->project->web_url
                . "'>" . $this->project->name . '</a> repository.';
            break;
        }
    }
}
