<?php

class EventMap
{
    /**
     * Returns the GitHub Event map.
     *
     * @return  array
     */
    public static function GitHub
    {
        return [
            'push' => 'Event\Push',
            'commit_comment' => 'Event\CommitComment',
            'create' => 'Event\Create',
            'delete' => 'Event\Delete',
            'fork' => 'Event\Fork',
            'gollum' => 'Event\Gollum',
            'issues' => 'Event\Issue\Issues',
            'issue_comment' => 'Event\Issue\Comment',
            'label' => 'Event\Label',
            'member' => 'Event\Member\Member',
            'membership' => 'Event\Member\Membership',
            'milestone' => 'Event\Milestone',
            'organization' => 'Event\Organization\Organization',
            'org_block' => 'Event\Organization\Block',
            'page_build' => 'Event\PageBuild',
            'project_card' => 'Event\Project\Card',
            'project_column' => 'Event\Project\Column',
            'project' => 'Event\Project\Project',
            'public' => 'Event\Repository\PublicRepository',
            'pull_request' => 'Event\PullRequest\PullRequest',
            'pull_request_review' => 'Event\PullRequest\Review\Review',
            'pull_request_review_comment' => 'Event\PullRequest\Review\Comment',
            'release' => 'Event\Release',
            'repository' => 'Event\Repository\Repository',
            'team' => 'Event\Team\Team',
            'team_add' => 'Event\Team\Add',
            'watch' => 'Event\Watch'
        ];
    }

    /**
     * Returns the GitLab Event map.
     *
     * @return  array
     */
    public static function GitLab
    {
        return [
            'Push Hook' => 'Event\Push',
            'Tag Push Hook' => 'Event\Tag',
            'Issue Hook' => 'Event\Issue',
            'Note Hook' => 'Event\Note',
            'Merge Request Hook' => 'Event\MergeRequest',
            'Wiki Page Hook' => 'Event\Wiki',
            'Pipeline Hook' => 'Event\Pipeline',
            'Build Hook' => 'Event\Build'
        ];
    }
}