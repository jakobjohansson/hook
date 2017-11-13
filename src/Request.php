<?php

namespace Hook;

class Request
{
    /**
     * Get the request method.
     *
     * @return string
     */
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Get a POST input.
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
     * Get all request headers.
     *
     * @return array
     */
    public static function headers()
    {
        return $_SERVER;
    }

    /**
     * Get a specific header.
     *
     * @param string $header
     *
     * @return string|null
     */
    public static function header($header)
    {
        return $_SERVER[$header] ?? null;
    }

    /**
     * Get the payload.
     *
     * @return mixed
     */
    public static function payload()
    {
        switch (static::header('CONTENT_TYPE')) {
            case 'application/json':
                return json_decode(file_get_contents('php://input'));
            break;
            case 'application/x-www-form-urlencoded':
                return json_decode(json_encode(static::input('payload')));
            break;
            default:
                return false;
        }
    }
}
