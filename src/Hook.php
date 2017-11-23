<?php

namespace Hook;

use Hook\Concerns\MapsEvents;
use Hook\Concerns\HandlesEvents;

abstract class Hook
{
    use MapsEvents, HandlesEvents;

    /**
     * The formatted output string.
     *
     * @var string
     */
    public $output;

    /**
     * The errors thrown by the hook.
     *
     * @var array
     */
    public $errors = [];

    /**
     * Return a GitHub hook.
     *
     * @param string $secret
     *
     * @return \Hook\GitHub\Hook
     */
    public static function GitHub($secret = null)
    {
        return new GitHub\Hook(EventMap::GitHub(), $secret);
    }

    /**
     * Return a GitLab hook.
     *
     * @param string $secret
     *
     * @return \Hook\GitLab\Hook
     */
    public static function GitLab($secret = null)
    {
        return new GitLab\Hook(EventMap::GitLab(), $secret);
    }

    /**
     * Return a Bitbucket hook.
     *
     * @return \Hook\BitBucket\Hook
     */
    public static function BitBucket()
    {
        return new BitBucket\Hook(EventMap::BitBucket());
    }
}
