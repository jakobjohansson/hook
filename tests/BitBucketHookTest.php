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

    public function testRepoPushEvent()
    {
        $this->event('repo:push');

        $this->payload($this->bitBucket['repo:push']);

        $this->assertSame($this->response(), "emmap1 just pushed 1 commit(s) to <a href='https://bitbucket.org/user_name/repo_name/branches/compare/c4b2b7914156a878aa7c9da452a09fb50c2091f2..b99ea6dad8f416e57c5ca78c1ccef590600d841b'>team_name/repo_name</a>.");
    }

    public function testRepoForkEvent()
    {
        $this->event('repo:fork');

        $this->payload($this->bitBucket['repo:fork']);

        $this->assertSame($this->response(), "emmap1 <a href='https://bitbucket.org/account/user/teamawesome/projects/proj'>just forked</a> a repository from emmap1.");
    }

    public function testRepoUpdatedEvent()
    {
        $this->event('repo:updated');

        $this->payload($this->bitBucket['repo:updated']);

        $this->assertSame($this->response(), "emmap1 just updated some details in the <a href='https://bitbucket.org/account/user/teamawesome/projects/proj'>team_name/repo_name</a> repository.");
    }

    public function testRepoTransferEvent()
    {
        $this->event('repo:transfer');

        $this->payload($this->bitBucket['repo:transfer']);

        $this->assertSame($this->response(), "emmap1 just transferred the <a href='https://bitbucket.org/account/user/teamawesome/projects/proj'>repo_name</a> repository to emmap1.");
    }

    public function testCommitCommentCreatedEvent()
    {
        $this->event('repo:commit_comment_created');

        $this->payload($this->bitBucket['repo:commit_comment_created']);

        $this->assertSame($this->response(), "emmap1 just commented on a <a href='https://api.bitbucket.org/comment_id'>commit</a> in the team_name/repo_name repository.");
    }

    public function testCommitStatusCreatedEvent()
    {
        $this->event('repo:commit_status_created');

        $this->payload($this->bitBucket['repo:commit_status_created']);

        $this->assertSame($this->response(), "mybuildtool: <a href='https://my-build-tool.com/builds/MY-PROJECT/BUILD-777'>Build started</a>.");
    }

    public function testCommitStatusUpdatedEvent()
    {
        $this->event('repo:commit_status_updated');

        $this->payload($this->bitBucket['repo:commit_status_updated']);

        $this->assertSame($this->response(), "mybuildtool: <a href='https://my-build-tool.com/builds/MY-PROJECT/BUILD-777'>All tests passed</a>.");
    }

    public function testIssueCreatedEvent()
    {
        $this->event('issue:created');

        $this->payload($this->bitBucket['issue:created']);

        $this->assertSame($this->response(), "emmap1 just <a href='https://api.bitbucket.org/issue_id'>opened an issue</a> in the team_name/repo_name repository.");
    }

    public function testIssueUpdatedEvent()
    {
        $this->event('issue:updated');

        $this->payload($this->bitBucket['issue:updated']);

        $this->assertSame($this->response(), "emmap1 just <a href='https://api.bitbucket.org/issue_id'>updated their issue</a> in the team_name/repo_name repository.");
    }

    public function testIssueCommentCreatedEvent()
    {
        $this->event('issue:comment_created');

        $this->payload($this->bitBucket['issue:comment_created']);

        $this->assertSame($this->response(), "emmap1 just <a href='https://api.bitbucket.org/issue_id'>commented on an issue</a> in the team_name/repo_name repository.");
    }
}
