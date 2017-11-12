<?php

namespace Hook\Traits;

trait HandlesEvents
{
    /**
     * The X-GitHub-Event header, i.e push, issue, etc.
     *
     * @var string
     */
    private $event;

    /**
     * The events the API will listen to.
     *
     * @var array
     */
    public $listeners = [];

    /**
     * Register the event and send the payload to its configured class.
     *
     * @return void
     */
    private function registerEvent()
    {
        if (array_key_exists($this->event, $this->eventMap)) {
            $this->output = new $this->eventMap[$this->event]($this->payload);
        }
    }

    /**
     * Check if the event is set up to be watched.
     *
     * @return bool
     */
    private function notWatchingEvent()
    {
        if (!array_key_exists($this->event, $this->listeners) && !in_array($this->event, $this->listeners)) {
            if (!empty($this->event)) {
                $this->apiMessages[] = "Not watching $this->event event";
            }

            return true;
        }

        return false;
    }

    /**
     * Sets the events to listen to
     * Needs to be declared to create any output
     * Empty array watches all events
     * Can be complemented with callback functions.
     *
     * @param array $listeners Array of events
     *
     * @return object | false   false if event is not being watched
     */
    public function listen(array $listeners = [])
    {
        if ($this->secret && !$this->authenticated) {
            return false;
        }

        if (empty($listeners)) {
            $listeners = $this->defaultListeners;
        }

        foreach ($listeners as $listener => $callback) {
            if (!in_array($listener, $this->defaultListeners) && !in_array($callback, $this->defaultListeners)) {
                $this->apiMessages[] = "Can't watch an invalid event";

                return false;
            }
        }

        $this->listeners = $listeners;

        if ($this->notWatchingEvent()) {
            return false;
        }

        $this->registerEvent();

        if (isset($this->listeners[$this->event])) {
            call_user_func($this->listeners[$this->event], $this->output->__toString());
        }
    }
}
