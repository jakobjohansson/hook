<?php

namespace Hook;

class Request
{
    /**
     * Fetch the request method.
     *
     * @return string
     */
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Fetch a POST input.
     *
     * @param string $name
     *
     * @return mixed
     */
    public static function input($name)
    {
        return $_POST[$name];
    }

    /**
     * Fetch all request headers.
     *
     * @return array
     */
    public static function headers()
    {
        return $_SERVER;
    }

    /**
     * Fetch a specified header.
     *
     * @param string $header
     *
     * @return string|null
     */
    public static function header($header)
    {
        return $_SERVER[$header] ?? null;
    }
}
