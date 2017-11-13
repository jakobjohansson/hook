<?php

namespace Hook\BitBucket;

use Hook\Request;
use Hook\EventMap;
use Hook\Hook as BaseHook;

class Hook extends BaseHook
{
    /**
     * Create a new Hook instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setEventMap(EventMap::BitBucket());

        if (!Request::header('HTTP_X_EVENT_KEY')) {
            $this->apiMessages[] = 'BitBucket Event header not present';

            return;
        }

        $this->event = Request::header('HTTP_X_EVENT_KEY');
    }
}
