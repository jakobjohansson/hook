<?php

namespace Hook\Tests;

class GitLabHookTest extends TestCase
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
        $this->headers['X-Gitlab-Event'] = $event;

        return $this;
    }

    /**
     * Set the signature header.
     *
     * @param string $signature
     *
     * @return $this
     */
    public function signature($signature)
    {
        $this->headers['X-GitHub-Token'] = $signature;

        return $this;
    }

    public function testPushEvent()
    {
        $this->event('Push Hook');

        $this->payload($this->gitLab['Push Hook']);

        $this->assertSame($this->response(), "John Smith just pushed 4 commit(s) to the <a href='http://example.com/mike/diaspora'>Diaspora</a> repository.");
    }

    public function testTagEvent()
    {
        $this->event('Tag Push Hook');

        $this->payload($this->gitLab['Tag Push Hook']);

        $this->assertSame($this->response(), "John Smith just pushed the tag v1.0.0 to the <a href='http://example.com/jsmith/example'>Example</a> repository.");
    }

    public function testIssuesEvent()
    {
        $this->event('Issue Hook');

        $this->payload($this->gitLab['Issue Hook']);

        $this->assertSame($this->response(), "Administrator just opened a new <a href='http://example.com/diaspora/issues/23'>issue</a> in the <a href='http://example.com/gitlabhq/gitlab-test'>Gitlab Test</a> repository.");
    }

    public function testMergeRequestEvent()
    {
        $this->event('Merge Request Hook');

        $this->payload($this->gitLab['Merge Request Hook']);

        $this->assertSame($this->response(), "Administrator just opened a new <a href='http://example.com/diaspora/merge_requests/1'>merge request</a> in the <a href='http://example.com/gitlabhq/gitlab-test'>Gitlab Test</a> repository.");
    }

    public function testWikiPageEvent()
    {
        $this->event('Wiki Page Hook');

        $this->payload($this->gitLab['Wiki Page Hook']);

        $this->assertSame($this->response(), "Administrator just created a <a href='http://example.com/root/awesome-project/wikis/awesome'>wiki page</a> in the <a href='http://example.com/root/awesome-project'>awesome-project</a> repository.");
    }

    public function testPipelineEvent()
    {
        $this->event('Pipeline Hook');

        $this->payload($this->gitLab['Pipeline Hook']);

        $this->assertSame($this->response(), "Administrator just changed the status of a pipeline in the <a href='http://192.168.64.1:3005/gitlab-org/gitlab-test'>Gitlab Test</a> repository.");
    }

    public function testBuildEvent()
    {
        $this->event('Build Hook');

        $this->payload($this->gitLab['Build Hook']);

        $this->assertSame($this->response(), "User just changed the status of a build in the gitlab-org/gitlab-test repository.");
    }

    // TODO: Make tests for comments
}
