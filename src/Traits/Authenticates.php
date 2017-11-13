<?php

namespace Hook\Traits;

trait Authenticates
{
    /**
     * The authentication key.
     *
     * @var string
     */
    protected $secret;

    /**
     * The request signature.
     *
     * @var string
     */
    private $signature;

    /**
     * Whether the request is authenticated or not.
     *
     * @var bool
     */
    protected $authenticated = false;

    abstract protected function auth();

    abstract protected function validate();
}
