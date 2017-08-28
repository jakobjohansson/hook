<?php

namespace GitLab\Event;

/**
 * GitLab note event class.
 * Can be straight up echoed for message.
 *
 * @category   API
 *
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Note extends Event
{
    /**
     * The user who made the push.
     *
     * @var object
     */
    public $user = '';

    /**
     * Gets the payload and selects the necessary properties.
     *
     * @param object $payload JSON
     */
    public function __construct($payload)
    {
        foreach ($payload as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function __toString()
    {
        switch ($this->object_attributes->noteable_type) {
            case 'Commit':
                return $this->user->name." just <a href='"
                .$this->object_attributes->url
                ."'>commented on a commit</a> in the <a href='".$this->project->web_url
                ."'>".$this->project->name.'</a> repository.';
            break;

            case 'MergeRequest':
                return $this->user->name." just <a href='"
                .$this->object_attributes->url
                ."'>commented on a merge request</a> in the <a href='".$this->project->web_url
                ."'>".$this->project->name.'</a> repository.';
            break;

            case 'Issue':
                return $this->user->name." just <a href='"
                .$this->object_attributes->url
                ."'>commented on an issue </a> in the <a href='".$this->project->web_url
                ."'>".$this->project->name.'</a> repository.';
            break;

            case 'Snippet':
                return $this->user->name." just <a href='"
                .$this->object_attributes->url
                ."'>commented on a snippet</a> in the <a href='".$this->project->web_url
                ."'>".$this->project->name.'</a> repository.';
            break;
        }
    }
}
