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
}
