<?php

namespace Hook\Tests;

class GitHubHookTest extends TestCase
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

    public function testLabelEvent()
    {
        $this->event('label');

        $this->payload($this->gitHub['label']);

        $this->assertSame($this->response(), "baxterthehacker just created a label in the <a href='https://github.com/baxterandthehackers/public-repo'>baxterandthehackers/public-repo</a> repository.");
    }

    public function testMemberEvent()
    {
        $this->event('member');

        $this->payload($this->gitHub['member']);

        $this->assertSame($this->response(), "baxterthehacker just added <a href='https://github.com/octocat'>octocat</a> in the baxterthehacker/public-repo repository.");
    }

    public function testMembershipEvent()
    {
        $this->event('membership');

        $this->payload($this->gitHub['membership']);

        $this->assertSame($this->response(), "baxterthehacker just added <a href='https://github.com/kdaigle'>kdaigle</a> in the Contractors team.");
    }

    public function testMilestoneEvent()
    {
        $this->event('milestone');

        $this->payload($this->gitHub['milestone']);

        $this->assertSame($this->response(), "baxterthehacker just created <a href='https://github.com/baxterandthehackers/public-repo/milestones/Test%20milestone%20creation%20webhook%20from%20command%20line2'>I am a milestone</a> in the baxterandthehackers/public-repo repository.");
    }

    public function testOrganizationEvent()
    {
        $this->event('organization');

        $this->payload($this->gitHub['organization']);

        $this->assertSame($this->response(), "baxterthehacker just invited <a href='https://github.com/baxterthehacker'>baxterthehacker</a> to the baxterandthehackers organization.");
    }

    public function testOrganizationBlockEvent()
    {
        $this->event('org_block');

        $this->payload($this->gitHub['org_block']);

        $this->assertSame($this->response(), "octodocs just blocked <a href='https://github.com/octocat'>octocat</a> from the github organization.");
    }

    public function testPageBuildEvent()
    {
        $this->event('page_build');

        $this->payload($this->gitHub['page_build']);

        $this->assertSame($this->response(), "baxterthehacker just built a page in the <a href='https://github.com/baxterthehacker/public-repo'>baxterthehacker/public-repo</a> repository.");
    }

    public function testProjectCardEvent()
    {
        $this->event('project_card');

        $this->payload($this->gitHub['project_card']);

        $this->assertSame($this->response(), "baxterthehacker just created a project card in the <a href='https://github.com/baxterthehacker/public-repo'>baxterthehacker/public-repo</a> repository.");
    }

    public function testProjectColumnEvent()
    {
        $this->event('project_column');

        $this->payload($this->gitHub['project_card']);

        $this->assertSame($this->response(), "baxterthehacker just created a project column in the <a href='https://github.com/baxterthehacker/public-repo'>baxterthehacker/public-repo</a> repository.");
    }

    public function testProjectEvent()
    {
        $this->event('project');

        $this->payload($this->gitHub['project_card']);

        $this->assertSame($this->response(), "baxterthehacker just created a project in the <a href='https://github.com/baxterthehacker/public-repo'>baxterthehacker/public-repo</a> repository.");
    }

    public function testPublicRepositoryEvent()
    {
        $this->event('public');

        $this->payload($this->gitHub['public']);

        $this->assertSame($this->response(), "baxterthehacker just made the <a href='https://github.com/baxterthehacker/public-repo'>baxterthehacker/public-repo</a> repository public.");
    }

    public function testPullRequestEvent()
    {
        $this->event('pull_request');

        $this->payload($this->gitHub['pull_request']);

        $this->assertSame($this->response(), "baxterthehacker just opened a pull request in the <a href='https://github.com/baxterthehacker/public-repo/pull/1'>baxterthehacker/public-repo</a> repository.");
    }

    public function testPullRequestReviewEvent()
    {
        $this->event('pull_request_review');

        $this->payload($this->gitHub['pull_request_review']);

        $this->assertSame($this->response(), "baxterthehacker just submitted a review on a pull request in the <a href='https://github.com/baxterthehacker/public-repo/pull/8#pullrequestreview-2626884'>baxterthehacker/public-repo</a> repository.");
    }

    public function testPullRequestReviewCommentEvent()
    {
        $this->event('pull_request_review_comment');

        $this->payload($this->gitHub['pull_request_review_comment']);

        $this->assertSame($this->response(), "baxterthehacker just created a comment on a pull request review in the <a href='https://github.com/baxterthehacker/public-repo/pull/1#discussion_r29724692'>baxterthehacker/public-repo</a> repository.");
    }

    public function testPushEvent()
    {
        $this->event('push');

        $this->payload($this->gitHub['push']);

        $this->assertSame($this->response(), "baxterthehacker just pushed 1 commit(s) to <a href='https://github.com/baxterthehacker/public-repo/compare/9049f1265b7d...0d1a26e67d8f'>baxterthehacker/public-repo</a>.");
    }

    public function testReleaseEvent()
    {
        $this->event('release');

        $this->payload($this->gitHub['release']);

        $this->assertSame($this->response(), "baxterthehacker just published a new release in the <a href='https://github.com/baxterthehacker/public-repo/releases/tag/0.0.1'>baxterthehacker/public-repo</a> repository.");
    }

    public function testRepositoryEvent()
    {
        $this->event('repository');

        $this->payload($this->gitHub['repository']);

        $this->assertSame($this->response(), "baxterthehacker just created the <a href='https://github.com/baxterandthehackers/new-repository'>baxterandthehackers/new-repository</a> repository.");
    }

    public function testTeamEvent()
    {
        $this->event('team');

        $this->payload($this->gitHub['team']);

        $this->assertSame($this->response(), 'baxterthehacker just made changes to a team in the baxterandthehackers organization.');
    }

    public function testTeamAddEvent()
    {
        $this->event('team_add');

        $this->payload($this->gitHub['team_add']);

        $this->assertSame($this->response(), "baxterandthehackers just added a <a href='https://github.com/baxterandthehackers/public-repo'>repository</a> to the github team.");
    }

    public function testWatchEvent()
    {
        $this->event('watch');

        $this->payload($this->gitHub['watch']);

        $this->assertSame($this->response(), "<a href='https://github.com/baxterthehacker'>baxterthehacker</a> just watched the <a href='https://github.com/baxterthehacker/public-repo'>baxterthehacker/public-repo</a> repository.");
    }

    public function testHookShouldNotPrintAnythingWhenNotAuthorized()
    {
        $this->event('push')->signature('incorrectlyformattedsignature');

        $this->payload($this->gitHub['push']);

        $this->assertSame($this->response(), '');
    }

    public function testHookShouldWorkAsNormalWhenAuthorized()
    {
        $this->event('push')->signature('sha1=c5888174a18a46cb60f94f7ec589282673fe2c09');

        $this->payload($this->gitHub['push']);

        $this->assertSame($this->response(), "baxterthehacker just pushed 1 commit(s) to <a href='https://github.com/baxterthehacker/public-repo/compare/9049f1265b7d...0d1a26e67d8f'>baxterthehacker/public-repo</a>.");
    }
}
