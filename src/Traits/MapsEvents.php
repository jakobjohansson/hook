<?php

namespace Traits;

trait MapsEvents
{
    /**
     * The default available events to listen to.
     *
     * @var array
     */
    private $defaultListeners;

    /**
     * The GitHub Event map.
     *
     * @var array
     */
    private $eventMap;

    /**
     * Set the Event Map and the default listeners.
     *
     * @param array $map
     */
    private function setEventMap($map)
    {
        $this->eventMap = $map;
        $this->defaultListeners = array_keys($map);
    }
}
