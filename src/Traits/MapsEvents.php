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
    protected $map;

    /**
     * Set the event map and the default listeners.
     *
     * @param array $map
     *
     * @return void
     */
    protected function map(array $map)
    {
        $this->map = $map;
        $this->defaultListeners = array_keys($map);
    }
}
