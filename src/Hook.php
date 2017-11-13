<?php

namespace Hook;

use Hook\Traits\MapsEvents;
use Hook\Traits\HandlesEvents;

abstract class Hook
{
    use MapsEvents, HandlesEvents;

    /**
     * The final formatted output string.
     *
     * @var string
     */
    public $output = null;

    /**
     * Errors thrown by the hook.
     *
     * @var array
     */
    public $errors = [];

    /**
     * Return a GitHub Hook service.
     *
     * @param string $secret
     *
     * @return \Hook\GitHub\Hook
     */
    public static function GitHub($secret = null)
    {
        return new GitHub\Hook($secret);
    }

    /**
     * Return a GitLab Hook service.
     *
     * @param string $secret
     *
     * @return \Hook\GitLab\Hook
     */
    public static function GitLab($secret = null)
    {
        return new GitLab\Hook($secret);
    }

    /**
     * Return a Bitbucket Hook service.
     *
     * @return \Hook\BitBucket\Hook
     */
    public static function BitBucket()
    {
        return new BitBucket\Hook();
    }
}
