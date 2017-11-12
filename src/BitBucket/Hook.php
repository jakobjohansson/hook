<?php

namespace Hook\BitBucket;

use Hook\EventMap;
use Hook\Hook as BaseHook;
use Hook\Traits\MapsEvents;
use Hook\Traits\HandlesEvents;

class Hook extends BaseHook
{
    use MapsEvents, HandlesEvents;

    /**
     * Create a new Hook instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setEventMap(EventMap::BitBucket());
        $this->fetchHeaders();

        if (!array_key_exists('HTTP_X_EVENT_KEY', $this->headers)) {
            $this->apiMessages[] = 'BitBucket Event header not present';

            return;
        }

        $this->event = $this->headers['HTTP_X_EVENT_KEY'];

        $this->fetchPayload();
    }
}
