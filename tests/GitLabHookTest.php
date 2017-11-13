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

        $this->query['type'] = 'GitLab';

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
        $this->headers['X-Gitlab-Token'] = $signature;

        $this->query['auth'] = 'true';

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

        $this->assertSame($this->response(), 'User just changed the status of a build in the gitlab-org/gitlab-test repository.');
    }

    public function testCommentNoteHook()
    {
        $this->event('Note Hook');

        $this->payload($this->gitLab['Commit Note Hook']);

        $this->assertSame($this->response(), "Administrator just <a href='http://example.com/gitlab-org/gitlab-test/commit/cfe32cf61b73a0d5e9f13e774abde7ff789b1660#note_1243'>commented on a commit</a> in the <a href='http://example.com/gitlabhq/gitlab-test'>Gitlab Test</a> repository.");
    }

    public function testMergeRequestNoteHook()
    {
        $this->event('Note Hook');

        $this->payload($this->gitLab['Merge Request Note Hook']);

        $this->assertSame($this->response(), "Administrator just <a href='http://example.com/gitlab-org/gitlab-test/merge_requests/1#note_1244'>commented on a merge request</a> in the <a href='http://example.com/gitlab-org/gitlab-test'>Gitlab Test</a> repository.");
    }

    public function testIssueNoteHook()
    {
        $this->event('Note Hook');

        $this->payload($this->gitLab['Issue Note Hook']);

        $this->assertSame($this->response(), "Administrator just <a href='http://example.com/gitlab-org/gitlab-test/issues/17#note_1241'>commented on an issue </a> in the <a href='http://example.com/gitlab-org/gitlab-test'>Gitlab Test</a> repository.");
    }

    public function testSnippetNoteHook()
    {
        $this->event('Note Hook');

        $this->payload($this->gitLab['Snippet Note Hook']);

        $this->assertSame($this->response(), "Administrator just <a href='http://example.com/gitlab-org/gitlab-test/snippets/53#note_1245'>commented on a snippet</a> in the <a href='http://example.com/gitlab-org/gitlab-test'>Gitlab Test</a> repository.");
    }

    public function testHookShouldGetErrorMessageWhenNotAuthorized()
    {
        $this->event('Push Hook')->signature('incorrectlyformattedsignature');

        $this->payload($this->gitLab['Push Hook']);

        $this->assertSame($this->response(), 'Signature not authorized');
    }

    public function testHookShouldGetErrorMessageWhenNoAuthenticationSecret()
    {
        $this->event('Push Hook');

        $this->query['auth'] = 'true';

        $this->payload($this->gitLab['Push Hook']);

        $this->assertSame($this->response(), 'No signature provided');
    }

    public function testHookShouldWorkAsNormalWhenAuthorized()
    {
        $this->event('Push Hook')->signature('correct-signature');

        $this->payload($this->gitLab['Push Hook']);

        $this->assertSame($this->response(), "John Smith just pushed 4 commit(s) to the <a href='http://example.com/mike/diaspora'>Diaspora</a> repository.");
    }

    public function testUsingCallbackWithPushEvent()
    {
        $this->event('Push Hook')->useCallback();

        $this->payload($this->gitLab['Push Hook']);

        $this->assertSame($this->response(), 'Diaspora');
    }

    public function testHookShouldGiveErrorWhenNoEventHeaderIsPresent()
    {
        $this->query = ['type' => 'GitLab'];
        $this->payload($this->gitLab['Push Hook']);

        $this->assertSame($this->response(), 'GitLab Event header not present');
    }

    public function testHookShouldGiveErrorWhenInvalidEventIsWatched()
    {
        $this->event('Push Hook');

        $this->query['invalid-event'] = 'true';

        $this->payload($this->gitLab['Push Hook']);

        $this->assertSame($this->response(), "Can't watch an invalid event");
    }
}
