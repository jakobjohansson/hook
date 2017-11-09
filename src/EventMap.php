<?php

namespace Hook;

class EventMap
{
    /**
     * Return the GitHub Event map.
     *
     * @return array
     */
    public static function GitHub()
    {
        return [
            'push'                        => 'Hook\GitHub\Event\Push',
            'commit_comment'              => 'Hook\GitHub\Event\CommitComment',
            'create'                      => 'Hook\GitHub\Event\Create',
            'delete'                      => 'Hook\GitHub\Event\Delete',
            'fork'                        => 'Hook\GitHub\Event\Fork',
            'gollum'                      => 'Hook\GitHub\Event\Gollum',
            'issues'                      => 'Hook\GitHub\Event\Issue\Issues',
            'issue_comment'               => 'Hook\GitHub\Event\Issue\Comment',
            'label'                       => 'Hook\GitHub\Event\Label',
            'member'                      => 'Hook\GitHub\Event\Member\Member',
            'membership'                  => 'Hook\GitHub\Event\Member\Membership',
            'milestone'                   => 'Hook\GitHub\Event\Milestone',
            'organization'                => 'Hook\GitHub\Event\Organization\Organization',
            'org_block'                   => 'Hook\GitHub\Event\Organization\Block',
            'page_build'                  => 'Hook\GitHub\Event\PageBuild',
            'project_card'                => 'Hook\GitHub\Event\Project\Card',
            'project_column'              => 'Hook\GitHub\Event\Project\Column',
            'project'                     => 'Hook\GitHub\Event\Project\Project',
            'public'                      => 'Hook\GitHub\Event\Repository\PublicRepository',
            'pull_request'                => 'Hook\GitHub\Event\PullRequest\PullRequest',
            'pull_request_review'         => 'Hook\GitHub\Event\PullRequest\Review\Review',
            'pull_request_review_comment' => 'Hook\GitHub\Event\PullRequest\Review\Comment',
            'release'                     => 'Hook\GitHub\Event\Release',
            'repository'                  => 'Hook\GitHub\Event\Repository\Repository',
            'team'                        => 'Hook\GitHub\Event\Team\Team',
            'team_add'                    => 'Hook\GitHub\Event\Team\Add',
            'watch'                       => 'Hook\GitHub\Event\Watch',
        ];
    }

    /**
     * Return the GitLab Event map.
     *
     * @return array
     */
    public static function GitLab()
    {
        return [
            'Push Hook'          => 'Hook\GitLab\Event\Push',
            'Tag Push Hook'      => 'Hook\GitLab\Event\Tag',
            'Issue Hook'         => 'Hook\GitLab\Event\Issue',
            'Note Hook'          => 'Hook\GitLab\Event\Note',
            'Merge Request Hook' => 'Hook\GitLab\Event\MergeRequest',
            'Wiki Page Hook'     => 'Hook\GitLab\Event\Wiki',
            'Pipeline Hook'      => 'Hook\GitLab\Event\Pipeline',
            'Build Hook'         => 'Hook\GitLab\Event\Build',
        ];
    }

    /**
     * Return the BitBucket Event map.
     *
     * @return array
     */
    public static function BitBucket()
    {
        return [
            'repo:push' => 'Hook\BitBucket\Event\Repository\Push',
            'repo:fork' => 'Hook\BitBucket\Event\Repository\Fork',
            // 'repo:updated',
            // 'repo:transfer',
            // 'repo:commit_comment_created',
            // 'repo:commit_status_created',
            // 'repo:commit_status_updated',
            // 'issue:created',
            // 'issue:updated',
            // 'issue:comment_created',
            // 'pullrequest:created',
            // 'pullrequest:updated',
            // 'pullrequest:approved',
            // 'pullrequest:unapproved',
            // 'pullrequest:fulfilled',
            // 'pullrequest:rejected',
            // 'pullrequest:comment_created',
            // 'pullrequest:comment_updated',
            // 'pullrequest:comment_deleted',
        ];
    }
}
