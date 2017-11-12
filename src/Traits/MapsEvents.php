<?php

namespace Hook\Traits;

trait MapsEvents
{
    /**
     * The default available events.
     *
     * @var array
     */
    private $defaultListeners;

    /**
     * The event map.
     *
     * @var array
     */
    private $eventMap;

    /**
     * Set the event map and the default listeners.
     *
     * @param array $map
     *
     * @return void
     */
    private function setEventMap(array $map)
    {
        $this->eventMap = $map;
        $this->defaultListeners = array_keys($map);
    }
}
