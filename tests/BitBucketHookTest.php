<?php

namespace Hook\Tests;

class BitBucketHookTest extends TestCase
{
    /**
     * Set the event header.
     *
     * @param string $event
     *
     * @return $this
     */
    public function event($event)
    {
        $this->headers['X-Event-Key'] = $event;

        return $this;
    }

    /**
     * @group failing
     */
    public function testRepoPushEvent()
    {
        $this->event('repo:push');

        $this->payload($this->bitBucket['repo:push']);

        $this->assertSame($this->response(), "emmap1 just pushed 1 commit(s) to <a href='https://bitbucket.org/user_name/repo_name/branches/compare/c4b2b7914156a878aa7c9da452a09fb50c2091f2..b99ea6dad8f416e57c5ca78c1ccef590600d841b'>team_name/repo_name</a>.");
    }
}
