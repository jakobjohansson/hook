<?php

namespace Hook\BitBucket;

use Hook\Request;
use Hook\Hook as BaseHook;

class Hook extends BaseHook
{
    /**
     * Create a new Hook instance.
     *
     * @param array $map
     *
     * @return mixed
     */
    public function __construct(array $map)
    {
        $this->map($map);

        if (Request::method() !== 'POST') {
            $this->errors[] = 'Wrong request method';

            return;
        }

        if (!Request::header('HTTP_X_EVENT_KEY')) {
            $this->errors[] = 'BitBucket Event header not present';

            return;
        }

        $this->event = Request::header('HTTP_X_EVENT_KEY');
    }
}
