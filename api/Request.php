<?php

class Request
{
    /**
     * Fetch the request method.
     *
     * @return string Request method
     */
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Fetch a POST input.
     *
     * @param string $name name of the input
     *
     * @return mixed
     */
    public static function input($name)
    {
        return $_POST[$name];
    }

    /**
     * Returns an array of the request headers.
     *
     * @return array
     */
    public static function headers()
    {
        return $_SERVER;
    }

    /**
     * Returns a specified header.
     *
     * @param  string $header
     * @return string|null
     */
    public static function header($header)
    {
        return $_SERVER[$header] ?? null;
    }
}
