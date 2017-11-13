<?php

namespace Hook\Traits;

trait MapsEvents
{
    /**
     * The default available events.
     *
     * @var array
     */
    protected $defaultListeners;

    /**
     * The event map.
     *
     * @var array
     */
    protected $eventMap;

    /**
     * Set the event map and the default listeners.
     *
     * @param array $map
     *
     * @return void
     */
    protected function setEventMap(array $map)
    {
        $this->eventMap = $map;
        $this->defaultListeners = array_keys($map);
    }
}
