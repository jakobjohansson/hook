<?php

namespace Hook\Traits;

use Hook\Request;

trait HandlesEvents
{
    /**
     * The event header.
     *
     * @var string
     */
    protected $event;

    /**
     * The registered event listeners.
     *
     * @var array
     */
    protected $listeners = [];

    /**
     * Register the event and delegate to the appropriate handler.
     *
     * @return void
     */
    private function registerEvent()
    {
        if (array_key_exists($this->event, $this->eventMap)) {
            $this->output = new $this->eventMap[$this->event](Request::payload());
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
     * Set the event listeners.
     *
     * @param array $listeners
     *
     * @return mixed
     */
    public function listen(array $listeners = [])
    {
        if (property_exists($this, 'secret') && isset($this->secret) && !$this->authenticated) {
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
