<?php

namespace Hook\Traits;

trait Authenticates
{
    /**
     * Authorization key to be provided from the user.
     *
     * @var string null
     */
    private $secret = null;

    /**
     * The secret provided in the token header.
     *
     * @var string
     */
    private $signature;

    /**
     * Whether the request is authenticated or not.
     *
     * @var bool
     */
    private $authenticated = false;

    abstract protected function auth();

    abstract protected function checkSecret();

    /**
     * Returns the payload temporarily for authorization needed in checkSecret().
     *
     * @return array payload
     */
    protected function secretValidator()
    {
        switch ($this->contentType) {
            case 'application/json':
                return file_get_contents('php://input');
            break;
            case 'application/x-www-form-urlencoded':
                return \Request::input('payload');
            break;
        }
    }
}
