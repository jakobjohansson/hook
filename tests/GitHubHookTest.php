<?php

namespace Hook\Tests;

class PushTest extends TestCase
{
    public function testCommitCommentEvent()
    {
        $this->event('commit_comment');

        $this->payload($this->gitHub['commit_comment']);

        $this->assertSame($this->response(), "baxterthehacker just <a href='https://github.com/baxterthehacker/public-repo/commit/9049f1265b7d61be4a8904a9a27120d2064dab3b#commitcomment-11056394'>made a comment</a> on a commit in the baxterthehacker/public-repo repository: <br />This is a really good change! :+1:");
    }

    public function testCreateEvent()
    {
        $this->event('create');

        $this->payload($this->gitHub['create']);

        $this->assertSame($this->response(), "baxterthehacker just made a new tag in the <a href='https://github.com/baxterthehacker/public-repo'>baxterthehacker/public-repo</a> repository.");
    }

    public function testDeleteEvent()
    {
        $this->event('delete');

        $this->payload($this->gitHub['delete']);

        $this->assertSame($this->response(), "baxterthehacker just deleted the tag simple-tag in the <a href='https://github.com/baxterthehacker/public-repo'>baxterthehacker/public-repo</a> repository.");
    }

    public function testForkEvent()
    {
        $this->event('fork');

        $this->payload($this->gitHub['fork']);

        $this->assertSame($this->response(), "baxterandthehackers <a href='https://github.com/baxterandthehackers/public-repo'>just forked</a> a repository from baxterthehacker.");
    }

    public function testGollumEvent()
    {
        $this->event('gollum');

        $this->payload($this->gitHub['gollum']);

        $this->assertSame($this->response(), "jasonrudolph just made these wiki changes: <br /><br />created <a href='https://github.com/baxterthehacker/public-repo/wiki/Home'>Home</a><br />In <a href='https://github.com/baxterthehacker/public-repo'>baxterthehacker/public-repo</a>.");
    }

    public function testIssueCommentEvent()
    {
        $this->event('issue_comment');

        $this->payload($this->gitHub['issue_comment']);

        $this->assertSame($this->response(), "baxterthehacker just <a href='https://github.com/baxterthehacker/public-repo/issues/2#issuecomment-99262140'>created a comment on an issue</a> in the baxterthehacker/public-repo repository.");
    }

    public function testIssuesEvent()
    {
        $this->event('issues');

        $this->payload($this->gitHub['issues']);

        $this->assertSame($this->response(), "baxterthehacker just <a href='https://github.com/baxterthehacker/public-repo/issues/2'>opened an issue</a> in the baxterthehacker/public-repo repository.");
    }

    public function testPushEvent()
    {
        $this->event('push');

        $this->payload($this->gitHub['push']);

        $this->assertSame($this->response(), "baxterthehacker just pushed 1 commit(s) to <a href='https://github.com/baxterthehacker/public-repo/compare/9049f1265b7d...0d1a26e67d8f'>baxterthehacker/public-repo</a>.");
    }
}
