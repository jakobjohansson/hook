<?php

namespace Hook\Concerns;

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
    protected $listeners;

    /**
     * Check if the assigned events actually exist.
     *
     * @param array $listeners
     *
     * @return bool
     */
    private function eventsAreNotValid(array $listeners)
    {
        foreach ($listeners as $key => $value) {
            if (!in_array($key, $this->defaultListeners, true) && !in_array($value, $this->defaultListeners, true)) {
                return true;
            }
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
                $this->errors[] = "Not watching {$this->event} event";
            }

            return true;
        }

        return false;
    }

    /**
     * Register the event and delegate to the responsible handler.
     *
     * @return void
     */
    private function registerEvent()
    {
        if (array_key_exists($this->event, $this->map)) {
            $this->output = new $this->map[$this->event](Request::payload());
        }

        if (isset($this->listeners[$this->event])) {
            $this->runCallback($this->listeners[$this->event]);
        }
    }

    /**
     * Run the event callback.
     *
     * @param callable $callback
     *
     * @return void
     */
    private function runCallback(callable $callback)
    {
        $callback($this->output);
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
        if (Request::method() !== 'POST') {
            return false;
        }

        if (property_exists($this, 'secret') && isset($this->secret) && !$this->authenticated) {
            return false;
        }

        if (empty($listeners)) {
            $listeners = $this->defaultListeners;
        }

        if ($this->eventsAreNotValid($listeners)) {
            $this->errors[] = "Can't watch an invalid event";

            return false;
        }

        $this->listeners = $listeners;

        if ($this->notWatchingEvent()) {
            return false;
        }

        $this->registerEvent();
    }
}
