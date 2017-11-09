<?php

namespace Hook\GitLab\Event;

class Wiki extends Event
{
    /**
     * The user who made the push.
     *
     * @var object
     */
    public $user = '';

    /**
     * The state of the page, rendered in setState().
     *
     * @var string
     */
    public $state = '';

    /**
     * Gets the payload and selects the necessary properties.
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

        $this->setState();
    }

    /**
     * Set the state.
     *
     * @return void
     */
    public function setState()
    {
        switch ($this->object_attributes->action) {
            case 'create':
                $this->state = 'created';
            break;
            case 'delete':
                $this->state = 'deleted';
            break;
            case 'edit':
                $this->state = 'edited';
            break;
            default:
                $this->state = 'made a change';
            break;
        }
    }

    /**
     * Proxy the object properties into a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->user->name . ' just ' . $this->state . " a <a href='"
        . $this->object_attributes->url
        . "'>wiki page</a> in the <a href='" . $this->project->web_url
        . "'>" . $this->project->name . '</a> repository.';
    }
}
