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
        if (static::header('CONTENT_TYPE') === 'application/json') {
            return json_decode(file_get_contents('php://input'));
        }
    }
}
