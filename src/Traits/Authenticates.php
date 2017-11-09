<?php

namespace Hook\Traits;

trait Authenticates
{
    /**
     * The optional authorization key.
     *
     * @var string
     */
    private $secret = null;

    /**
     * The secret provided in the token header.
     *
     * @var string
     */
    private $signature;

    abstract protected function auth();

    abstract protected function validate();

    /**
     * Return the payload temporarily for authorization.
     *
     * @return array
     */
    protected function getTemporaryPayload()
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
