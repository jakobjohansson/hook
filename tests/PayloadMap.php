<?php

namespace Hook\Tests;

class PayloadMap
{
    public static function GitHub()
    {
        return [
            'commit_comment' => '{
  "action": "created",
  "comment": {
    "url": "https://api.github.com/repos/baxterthehacker/public-repo/comments/11056394",
    "html_url": "https://github.com/baxterthehacker/public-repo/commit/9049f1265b7d61be4a8904a9a27120d2064dab3b#commitcomment-11056394",
    "id": 11056394,
    "user": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "position": null,
    "line": null,
    "path": null,
    "commit_id": "9049f1265b7d61be4a8904a9a27120d2064dab3b",
    "created_at": "2015-05-05T23:40:29Z",
    "updated_at": "2015-05-05T23:40:29Z",
    "body": "This is a really good change! :+1:"
  },
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:12Z",
    "pushed_at": "2015-05-05T23:40:27Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 2,
    "forks": 0,
    "open_issues": 2,
    "watchers": 0,
    "default_branch": "master"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  }
}',
            'create' => '{
  "ref": "0.0.1",
  "ref_type": "tag",
  "master_branch": "master",
  "description": "",
  "pusher_type": "user",
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:30Z",
    "pushed_at": "2015-05-05T23:40:38Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 2,
    "forks": 0,
    "open_issues": 2,
    "watchers": 0,
    "default_branch": "master"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  }
}',
            'delete' => '{
  "ref": "simple-tag",
  "ref_type": "tag",
  "pusher_type": "user",
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:30Z",
    "pushed_at": "2015-05-05T23:40:40Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 2,
    "forks": 0,
    "open_issues": 2,
    "watchers": 0,
    "default_branch": "master"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  }
}',
            'fork' => '{
  "forkee": {
    "id": 35129393,
    "name": "public-repo",
    "full_name": "baxterandthehackers/public-repo",
    "owner": {
      "login": "baxterandthehackers",
      "id": 7649605,
      "avatar_url": "https://avatars.githubusercontent.com/u/7649605?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterandthehackers",
      "html_url": "https://github.com/baxterandthehackers",
      "followers_url": "https://api.github.com/users/baxterandthehackers/followers",
      "following_url": "https://api.github.com/users/baxterandthehackers/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterandthehackers/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterandthehackers/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterandthehackers/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterandthehackers/orgs",
      "repos_url": "https://api.github.com/users/baxterandthehackers/repos",
      "events_url": "https://api.github.com/users/baxterandthehackers/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterandthehackers/received_events",
      "type": "Organization",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterandthehackers/public-repo",
    "description": "",
    "fork": true,
    "url": "https://api.github.com/repos/baxterandthehackers/public-repo",
    "forks_url": "https://api.github.com/repos/baxterandthehackers/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterandthehackers/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterandthehackers/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterandthehackers/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterandthehackers/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterandthehackers/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterandthehackers/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterandthehackers/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterandthehackers/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterandthehackers/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterandthehackers/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterandthehackers/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterandthehackers/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterandthehackers/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterandthehackers/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterandthehackers/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterandthehackers/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterandthehackers/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterandthehackers/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterandthehackers/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterandthehackers/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterandthehackers/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterandthehackers/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterandthehackers/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterandthehackers/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterandthehackers/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterandthehackers/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterandthehackers/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterandthehackers/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterandthehackers/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterandthehackers/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterandthehackers/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterandthehackers/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterandthehackers/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterandthehackers/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:30Z",
    "updated_at": "2015-05-05T23:40:30Z",
    "pushed_at": "2015-05-05T23:40:27Z",
    "git_url": "git://github.com/baxterandthehackers/public-repo.git",
    "ssh_url": "git@github.com:baxterandthehackers/public-repo.git",
    "clone_url": "https://github.com/baxterandthehackers/public-repo.git",
    "svn_url": "https://github.com/baxterandthehackers/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": false,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 0,
    "forks": 0,
    "open_issues": 0,
    "watchers": 0,
    "default_branch": "master",
    "public": true
  },
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:30Z",
    "pushed_at": "2015-05-05T23:40:27Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 1,
    "mirror_url": null,
    "open_issues_count": 2,
    "forks": 1,
    "open_issues": 2,
    "watchers": 0,
    "default_branch": "master"
  },
  "sender": {
    "login": "baxterandthehackers",
    "id": 7649605,
    "avatar_url": "https://avatars.githubusercontent.com/u/7649605?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterandthehackers",
    "html_url": "https://github.com/baxterandthehackers",
    "followers_url": "https://api.github.com/users/baxterandthehackers/followers",
    "following_url": "https://api.github.com/users/baxterandthehackers/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterandthehackers/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterandthehackers/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterandthehackers/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterandthehackers/orgs",
    "repos_url": "https://api.github.com/users/baxterandthehackers/repos",
    "events_url": "https://api.github.com/users/baxterandthehackers/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterandthehackers/received_events",
    "type": "Organization",
    "site_admin": false
  }
}',
            'gollum' => '{
  "pages": [
    {
      "page_name": "Home",
      "title": "Home",
      "summary": null,
      "action": "created",
      "sha": "91ea1bd42aa2ba166b86e8aefe049e9837214e67",
      "html_url": "https://github.com/baxterthehacker/public-repo/wiki/Home"
    }
  ],
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:12Z",
    "pushed_at": "2015-05-05T23:40:17Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 0,
    "forks": 0,
    "open_issues": 0,
    "watchers": 0,
    "default_branch": "master"
  },
  "sender": {
    "login": "jasonrudolph",
    "id": 2988,
    "avatar_url": "https://avatars.githubusercontent.com/u/2988?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/jasonrudolph",
    "html_url": "https://github.com/jasonrudolph",
    "followers_url": "https://api.github.com/users/jasonrudolph/followers",
    "following_url": "https://api.github.com/users/jasonrudolph/following{/other_user}",
    "gists_url": "https://api.github.com/users/jasonrudolph/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/jasonrudolph/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/jasonrudolph/subscriptions",
    "organizations_url": "https://api.github.com/users/jasonrudolph/orgs",
    "repos_url": "https://api.github.com/users/jasonrudolph/repos",
    "events_url": "https://api.github.com/users/jasonrudolph/events{/privacy}",
    "received_events_url": "https://api.github.com/users/jasonrudolph/received_events",
    "type": "User",
    "site_admin": true
  }
}',
            'issue_comment' => '{
  "action": "created",
  "issue": {
    "url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/2",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/2/labels{/name}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/2/comments",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/2/events",
    "html_url": "https://github.com/baxterthehacker/public-repo/issues/2",
    "id": 73464126,
    "number": 2,
    "title": "Spelling error in the README file",
    "user": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "labels": [
      {
        "url": "https://api.github.com/repos/baxterthehacker/public-repo/labels/bug",
        "name": "bug",
        "color": "fc2929"
      }
    ],
    "state": "open",
    "locked": false,
    "assignee": null,
    "milestone": null,
    "comments": 1,
    "created_at": "2015-05-05T23:40:28Z",
    "updated_at": "2015-05-05T23:40:28Z",
    "closed_at": null,
    "body": "It looks like you accidently spelled commit with two ts."
  },
  "comment": {
    "url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments/99262140",
    "html_url": "https://github.com/baxterthehacker/public-repo/issues/2#issuecomment-99262140",
    "issue_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/2",
    "id": 99262140,
    "user": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "created_at": "2015-05-05T23:40:28Z",
    "updated_at": "2015-05-05T23:40:28Z",
    "body": "You are totally right! Ill get this fixed right away."
  },
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:12Z",
    "pushed_at": "2015-05-05T23:40:27Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 2,
    "forks": 0,
    "open_issues": 2,
    "watchers": 0,
    "default_branch": "master"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  }
}',
            'issues' => '{
  "action": "opened",
  "issue": {
    "url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/2",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/2/labels{/name}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/2/comments",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/2/events",
    "html_url": "https://github.com/baxterthehacker/public-repo/issues/2",
    "id": 73464126,
    "number": 2,
    "title": "Spelling error in the README file",
    "user": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "labels": [
      {
        "id": 208045946,
        "url": "https://api.github.com/repos/baxterthehacker/public-repo/labels/bug",
        "name": "bug",
        "color": "fc2929",
        "default": true
      }
    ],
    "state": "open",
    "locked": false,
    "assignee": null,
    "milestone": null,
    "comments": 0,
    "created_at": "2015-05-05T23:40:28Z",
    "updated_at": "2015-05-05T23:40:28Z",
    "closed_at": null,
    "body": "It looks like you accidently spelled commit with two ts."
  },
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:12Z",
    "pushed_at": "2015-05-05T23:40:27Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 2,
    "forks": 0,
    "open_issues": 2,
    "watchers": 0,
    "default_branch": "master"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  }
}',
            'label' => '{
  "action":"created",
  "label":{
    "url":"https://api.github.com/repos/baxterandthehackers/public-repo/labels/blocked",
    "name":"blocked",
    "color":"ff0000"
  },
  "repository":{
    "id":67075329,
    "name":"public-repo",
    "full_name":"baxterandthehackers/public-repo",
    "owner":{
      "login":"baxterandthehackers",
      "id":4312013,
      "avatar_url":"https://avatars.githubusercontent.com/u/4312013?v=3",
      "gravatar_id":"",
      "url":"https://api.github.com/users/baxterandthehackers",
      "html_url":"https://github.com/baxterandthehackers",
      "followers_url":"https://api.github.com/users/baxterandthehackers/followers",
      "following_url":"https://api.github.com/users/baxterandthehackers/following{/other_user}",
      "gists_url":"https://api.github.com/users/baxterandthehackers/gists{/gist_id}",
      "starred_url":"https://api.github.com/users/baxterandthehackers/starred{/owner}{/repo}",
      "subscriptions_url":"https://api.github.com/users/baxterandthehackers/subscriptions",
      "organizations_url":"https://api.github.com/users/baxterandthehackers/orgs",
      "repos_url":"https://api.github.com/users/baxterandthehackers/repos",
      "events_url":"https://api.github.com/users/baxterandthehackers/events{/privacy}",
      "received_events_url":"https://api.github.com/users/baxterandthehackers/received_events",
      "type":"Organization",
      "site_admin":false
    },
    "private":true,
    "html_url":"https://github.com/baxterandthehackers/public-repo",
    "description":null,
    "fork":false,
    "url":"https://api.github.com/repos/baxterandthehackers/public-repo",
    "forks_url":"https://api.github.com/repos/baxterandthehackers/public-repo/forks",
    "keys_url":"https://api.github.com/repos/baxterandthehackers/public-repo/keys{/key_id}",
    "collaborators_url":"https://api.github.com/repos/baxterandthehackers/public-repo/collaborators{/collaborator}",
    "teams_url":"https://api.github.com/repos/baxterandthehackers/public-repo/teams",
    "hooks_url":"https://api.github.com/repos/baxterandthehackers/public-repo/hooks",
    "issue_events_url":"https://api.github.com/repos/baxterandthehackers/public-repo/issues/events{/number}",
    "events_url":"https://api.github.com/repos/baxterandthehackers/public-repo/events",
    "assignees_url":"https://api.github.com/repos/baxterandthehackers/public-repo/assignees{/user}",
    "branches_url":"https://api.github.com/repos/baxterandthehackers/public-repo/branches{/branch}",
    "tags_url":"https://api.github.com/repos/baxterandthehackers/public-repo/tags",
    "blobs_url":"https://api.github.com/repos/baxterandthehackers/public-repo/git/blobs{/sha}",
    "git_tags_url":"https://api.github.com/repos/baxterandthehackers/public-repo/git/tags{/sha}",
    "git_refs_url":"https://api.github.com/repos/baxterandthehackers/public-repo/git/refs{/sha}",
    "trees_url":"https://api.github.com/repos/baxterandthehackers/public-repo/git/trees{/sha}",
    "statuses_url":"https://api.github.com/repos/baxterandthehackers/public-repo/statuses/{sha}",
    "languages_url":"https://api.github.com/repos/baxterandthehackers/public-repo/languages",
    "stargazers_url":"https://api.github.com/repos/baxterandthehackers/public-repo/stargazers",
    "contributors_url":"https://api.github.com/repos/baxterandthehackers/public-repo/contributors",
    "subscribers_url":"https://api.github.com/repos/baxterandthehackers/public-repo/subscribers",
    "subscription_url":"https://api.github.com/repos/baxterandthehackers/public-repo/subscription",
    "commits_url":"https://api.github.com/repos/baxterandthehackers/public-repo/commits{/sha}",
    "git_commits_url":"https://api.github.com/repos/baxterandthehackers/public-repo/git/commits{/sha}",
    "comments_url":"https://api.github.com/repos/baxterandthehackers/public-repo/comments{/number}",
    "issue_comment_url":"https://api.github.com/repos/baxterandthehackers/public-repo/issues/comments{/number}",
    "contents_url":"https://api.github.com/repos/baxterandthehackers/public-repo/contents/{+path}",
    "compare_url":"https://api.github.com/repos/baxterandthehackers/public-repo/compare/{base}...{head}",
    "merges_url":"https://api.github.com/repos/baxterandthehackers/public-repo/merges",
    "archive_url":"https://api.github.com/repos/baxterandthehackers/public-repo/{archive_format}{/ref}",
    "downloads_url":"https://api.github.com/repos/baxterandthehackers/public-repo/downloads",
    "issues_url":"https://api.github.com/repos/baxterandthehackers/public-repo/issues{/number}",
    "pulls_url":"https://api.github.com/repos/baxterandthehackers/public-repo/pulls{/number}",
    "milestones_url":"https://api.github.com/repos/baxterandthehackers/public-repo/milestones{/number}",
    "notifications_url":"https://api.github.com/repos/baxterandthehackers/public-repo/notifications{?since,all,participating}",
    "labels_url":"https://api.github.com/repos/baxterandthehackers/public-repo/labels{/name}",
    "releases_url":"https://api.github.com/repos/baxterandthehackers/public-repo/releases{/id}",
    "deployments_url":"https://api.github.com/repos/baxterandthehackers/public-repo/deployments",
    "created_at":"2016-08-31T21:38:51Z",
    "updated_at":"2016-08-31T21:38:51Z",
    "pushed_at":"2016-08-31T21:38:51Z",
    "git_url":"git://github.com/baxterandthehackers/public-repo.git",
    "ssh_url":"git@github.com:baxterandthehackers/public-repo.git",
    "clone_url":"https://github.com/baxterandthehackers/public-repo.git",
    "svn_url":"https://github.com/baxterandthehackers/public-repo",
    "homepage":null,
    "size":0,
    "stargazers_count":0,
    "watchers_count":0,
    "language":null,
    "has_issues":true,
    "has_downloads":true,
    "has_wiki":true,
    "has_pages":false,
    "forks_count":0,
    "mirror_url":null,
    "open_issues_count":2,
    "forks":0,
    "open_issues":2,
    "watchers":0,
    "default_branch":"master"
  },
  "organization":{
    "login":"baxterandthehackers",
    "id":4312013,
    "url":"https://api.github.com/orgs/baxterandthehackers",
    "repos_url":"https://api.github.com/orgs/baxterandthehackers/repos",
    "events_url":"https://api.github.com/orgs/baxterandthehackers/events",
    "hooks_url":"https://api.github.com/orgs/baxterandthehackers/hooks",
    "issues_url":"https://api.github.com/orgs/baxterandthehackers/issues",
    "members_url":"https://api.github.com/orgs/baxterandthehackers/members{/member}",
    "public_members_url":"https://api.github.com/orgs/baxterandthehackers/public_members{/member}",
    "avatar_url":"https://avatars.githubusercontent.com/u/4312013?v=3",
    "description":""
  },
  "sender":{
    "login":"baxterthehacker",
    "id":7649605,
    "avatar_url":"https://avatars.githubusercontent.com/u/7649605?v=3",
    "gravatar_id":"",
    "url":"https://api.github.com/users/baxterthehacker",
    "html_url":"https://github.com/baxterthehacker",
    "followers_url":"https://api.github.com/users/baxterthehacker/followers",
    "following_url":"https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url":"https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url":"https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url":"https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url":"https://api.github.com/users/baxterthehacker/orgs",
    "repos_url":"https://api.github.com/users/baxterthehacker/repos",
    "events_url":"https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url":"https://api.github.com/users/baxterthehacker/received_events",
    "type":"User",
    "site_admin":true
  }
}',
            'member' => '{
  "action": "added",
  "member": {
    "login": "octocat",
    "id": 583231,
    "avatar_url": "https://avatars.githubusercontent.com/u/583231?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/octocat",
    "html_url": "https://github.com/octocat",
    "followers_url": "https://api.github.com/users/octocat/followers",
    "following_url": "https://api.github.com/users/octocat/following{/other_user}",
    "gists_url": "https://api.github.com/users/octocat/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/octocat/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/octocat/subscriptions",
    "organizations_url": "https://api.github.com/users/octocat/orgs",
    "repos_url": "https://api.github.com/users/octocat/repos",
    "events_url": "https://api.github.com/users/octocat/events{/privacy}",
    "received_events_url": "https://api.github.com/users/octocat/received_events",
    "type": "User",
    "site_admin": false
  },
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:30Z",
    "pushed_at": "2015-05-05T23:40:40Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 2,
    "forks": 0,
    "open_issues": 2,
    "watchers": 0,
    "default_branch": "master"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  }
}',
            'membership' => '{
  "action": "added",
  "scope": "team",
  "member": {
    "login": "kdaigle",
    "id": 2501,
    "avatar_url": "https://avatars.githubusercontent.com/u/2501?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/kdaigle",
    "html_url": "https://github.com/kdaigle",
    "followers_url": "https://api.github.com/users/kdaigle/followers",
    "following_url": "https://api.github.com/users/kdaigle/following{/other_user}",
    "gists_url": "https://api.github.com/users/kdaigle/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/kdaigle/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/kdaigle/subscriptions",
    "organizations_url": "https://api.github.com/users/kdaigle/orgs",
    "repos_url": "https://api.github.com/users/kdaigle/repos",
    "events_url": "https://api.github.com/users/kdaigle/events{/privacy}",
    "received_events_url": "https://api.github.com/users/kdaigle/received_events",
    "type": "User",
    "site_admin": true
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=2",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  },
  "team": {
    "name": "Contractors",
    "id": 123456,
    "slug": "contractors",
    "permission": "admin",
    "url": "https://api.github.com/teams/123456",
    "members_url": "https://api.github.com/teams/123456/members{/member}",
    "repositories_url": "https://api.github.com/teams/123456/repos"
  },
  "organization": {
    "login": "baxterandthehackers",
    "id": 7649605,
    "url": "https://api.github.com/orgs/baxterandthehackers",
    "repos_url": "https://api.github.com/orgs/baxterandthehackers/repos",
    "events_url": "https://api.github.com/orgs/baxterandthehackers/events",
    "members_url": "https://api.github.com/orgs/baxterandthehackers/members{/member}",
    "public_members_url": "https://api.github.com/orgs/baxterandthehackers/public_members{/member}",
    "avatar_url": "https://avatars.githubusercontent.com/u/7649605?v=2"
  }
}',
            'milestone' => '{
  "action":"created",
  "milestone":{
    "url":"https://api.github.com/repos/baxterandthehackers/public-repo/milestones/3",
    "html_url":"https://github.com/baxterandthehackers/public-repo/milestones/Test%20milestone%20creation%20webhook%20from%20command%20line2",
    "labels_url":"https://api.github.com/repos/baxterandthehackers/public-repo/milestones/3/labels",
    "id":2055681,
    "number":3,
    "title":"I am a milestone",
    "description":null,
    "creator":{
      "login":"baxterthehacker",
      "id":7649605,
      "avatar_url":"https://avatars.githubusercontent.com/u/7649605?v=3",
      "gravatar_id":"",
      "url":"https://api.github.com/users/baxterthehacker",
      "html_url":"https://github.com/baxterthehacker",
      "followers_url":"https://api.github.com/users/baxterthehacker/followers",
      "following_url":"https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url":"https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url":"https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url":"https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url":"https://api.github.com/users/baxterthehacker/orgs",
      "repos_url":"https://api.github.com/users/baxterthehacker/repos",
      "events_url":"https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url":"https://api.github.com/users/baxterthehacker/received_events",
      "type":"User",
      "site_admin":true
    },
    "open_issues":0,
    "closed_issues":0,
    "state":"open",
    "created_at":"2016-10-07T19:26:08Z",
    "updated_at":"2016-10-07T19:26:08Z",
    "due_on":null,
    "closed_at":null
  },
  "repository":{
    "id":70275481,
    "name":"public-repo",
    "full_name":"baxterandthehackers/public-repo",
    "owner":{
      "login":"baxterandthehackers",
      "id":4312013,
      "avatar_url":"https://avatars.githubusercontent.com/u/4312013?v=3",
      "gravatar_id":"",
      "url":"https://api.github.com/users/baxterandthehackers",
      "html_url":"https://github.com/baxterandthehackers",
      "followers_url":"https://api.github.com/users/baxterandthehackers/followers",
      "following_url":"https://api.github.com/users/baxterandthehackers/following{/other_user}",
      "gists_url":"https://api.github.com/users/baxterandthehackers/gists{/gist_id}",
      "starred_url":"https://api.github.com/users/baxterandthehackers/starred{/owner}{/repo}",
      "subscriptions_url":"https://api.github.com/users/baxterandthehackers/subscriptions",
      "organizations_url":"https://api.github.com/users/baxterandthehackers/orgs",
      "repos_url":"https://api.github.com/users/baxterandthehackers/repos",
      "events_url":"https://api.github.com/users/baxterandthehackers/events{/privacy}",
      "received_events_url":"https://api.github.com/users/baxterandthehackers/received_events",
      "type":"Organization",
      "site_admin":false
    },
    "private":true,
    "html_url":"https://github.com/baxterandthehackers/public-repo",
    "description":null,
    "fork":false,
    "url":"https://api.github.com/repos/baxterandthehackers/public-repo",
    "forks_url":"https://api.github.com/repos/baxterandthehackers/public-repo/forks",
    "keys_url":"https://api.github.com/repos/baxterandthehackers/public-repo/keys{/key_id}",
    "collaborators_url":"https://api.github.com/repos/baxterandthehackers/public-repo/collaborators{/collaborator}",
    "teams_url":"https://api.github.com/repos/baxterandthehackers/public-repo/teams",
    "hooks_url":"https://api.github.com/repos/baxterandthehackers/public-repo/hooks",
    "issue_events_url":"https://api.github.com/repos/baxterandthehackers/public-repo/issues/events{/number}",
    "events_url":"https://api.github.com/repos/baxterandthehackers/public-repo/events",
    "assignees_url":"https://api.github.com/repos/baxterandthehackers/public-repo/assignees{/user}",
    "branches_url":"https://api.github.com/repos/baxterandthehackers/public-repo/branches{/branch}",
    "tags_url":"https://api.github.com/repos/baxterandthehackers/public-repo/tags",
    "blobs_url":"https://api.github.com/repos/baxterandthehackers/public-repo/git/blobs{/sha}",
    "git_tags_url":"https://api.github.com/repos/baxterandthehackers/public-repo/git/tags{/sha}",
    "git_refs_url":"https://api.github.com/repos/baxterandthehackers/public-repo/git/refs{/sha}",
    "trees_url":"https://api.github.com/repos/baxterandthehackers/public-repo/git/trees{/sha}",
    "statuses_url":"https://api.github.com/repos/baxterandthehackers/public-repo/statuses/{sha}",
    "languages_url":"https://api.github.com/repos/baxterandthehackers/public-repo/languages",
    "stargazers_url":"https://api.github.com/repos/baxterandthehackers/public-repo/stargazers",
    "contributors_url":"https://api.github.com/repos/baxterandthehackers/public-repo/contributors",
    "subscribers_url":"https://api.github.com/repos/baxterandthehackers/public-repo/subscribers",
    "subscription_url":"https://api.github.com/repos/baxterandthehackers/public-repo/subscription",
    "commits_url":"https://api.github.com/repos/baxterandthehackers/public-repo/commits{/sha}",
    "git_commits_url":"https://api.github.com/repos/baxterandthehackers/public-repo/git/commits{/sha}",
    "comments_url":"https://api.github.com/repos/baxterandthehackers/public-repo/comments{/number}",
    "issue_comment_url":"https://api.github.com/repos/baxterandthehackers/public-repo/issues/comments{/number}",
    "contents_url":"https://api.github.com/repos/baxterandthehackers/public-repo/contents/{+path}",
    "compare_url":"https://api.github.com/repos/baxterandthehackers/public-repo/compare/{base}...{head}",
    "merges_url":"https://api.github.com/repos/baxterandthehackers/public-repo/merges",
    "archive_url":"https://api.github.com/repos/baxterandthehackers/public-repo/{archive_format}{/ref}",
    "downloads_url":"https://api.github.com/repos/baxterandthehackers/public-repo/downloads",
    "issues_url":"https://api.github.com/repos/baxterandthehackers/public-repo/issues{/number}",
    "pulls_url":"https://api.github.com/repos/baxterandthehackers/public-repo/pulls{/number}",
    "milestones_url":"https://api.github.com/repos/baxterandthehackers/public-repo/milestones{/number}",
    "notifications_url":"https://api.github.com/repos/baxterandthehackers/public-repo/notifications{?since,all,participating}",
    "labels_url":"https://api.github.com/repos/baxterandthehackers/public-repo/labels{/name}",
    "releases_url":"https://api.github.com/repos/baxterandthehackers/public-repo/releases{/id}",
    "deployments_url":"https://api.github.com/repos/baxterandthehackers/public-repo/deployments",
    "created_at":"2016-10-07T19:10:12Z",
    "updated_at":"2016-10-07T19:10:12Z",
    "pushed_at":"2016-10-07T19:10:13Z",
    "git_url":"git://github.com/baxterandthehackers/public-repo.git",
    "ssh_url":"git@github.com:baxterandthehackers/public-repo.git",
    "clone_url":"https://github.com/baxterandthehackers/public-repo.git",
    "svn_url":"https://github.com/baxterandthehackers/public-repo",
    "homepage":null,
    "size":0,
    "stargazers_count":0,
    "watchers_count":0,
    "language":null,
    "has_issues":true,
    "has_downloads":true,
    "has_wiki":true,
    "has_pages":false,
    "forks_count":0,
    "mirror_url":null,
    "open_issues_count":0,
    "forks":0,
    "open_issues":0,
    "watchers":0,
    "default_branch":"master"
  },
  "organization":{
    "login":"baxterandthehackers",
    "id":4312013,
    "url":"https://api.github.com/orgs/baxterandthehackers",
    "repos_url":"https://api.github.com/orgs/baxterandthehackers/repos",
    "events_url":"https://api.github.com/orgs/baxterandthehackers/events",
    "hooks_url":"https://api.github.com/orgs/baxterandthehackers/hooks",
    "issues_url":"https://api.github.com/orgs/baxterandthehackers/issues",
    "members_url":"https://api.github.com/orgs/baxterandthehackers/members{/member}",
    "public_members_url":"https://api.github.com/orgs/baxterandthehackers/public_members{/member}",
    "avatar_url":"https://avatars.githubusercontent.com/u/4312013?v=3",
    "description":""
  },
  "sender":{
    "login":"baxterthehacker",
    "id":7649605,
    "avatar_url":"https://avatars.githubusercontent.com/u/7649605?v=3",
    "gravatar_id":"",
    "url":"https://api.github.com/users/baxterthehacker",
    "html_url":"https://github.com/baxterthehacker",
    "followers_url":"https://api.github.com/users/baxterthehacker/followers",
    "following_url":"https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url":"https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url":"https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url":"https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url":"https://api.github.com/users/baxterthehacker/orgs",
    "repos_url":"https://api.github.com/users/baxterthehacker/repos",
    "events_url":"https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url":"https://api.github.com/users/baxterthehacker/received_events",
    "type":"User",
    "site_admin":true
  }
}',
            'organization' => '{
  "action": "member_invited",
  "invitation": {
    "id": 3294302,
    "login": "baxterthehacker",
    "email": null,
    "role": "direct_member"
  },
  "membership": {
    "url": "https://api.github.com/orgs/baxterandthehackers/memberships/baxterthehacker",
    "state": "active",
    "role": "member",
    "organization_url": "https://api.github.com/orgs/baxterandthehackers",
    "user": {
      "login": "baxterthehacker",
      "id": 7649605,
      "avatar_url": "https://avatars.githubusercontent.com/u/17085448?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    }
  },
  "organization": {
    "login": "baxterandthehackers",
    "id": 4312013,
    "url": "https://api.github.com/orgs/baxterandthehackers",
    "repos_url": "https://api.github.com/orgs/baxterandthehackers/repos",
    "events_url": "https://api.github.com/orgs/baxterandthehackers/events",
    "hooks_url": "https://api.github.com/orgs/baxterandthehackers/hooks",
    "issues_url": "https://api.github.com/orgs/baxterandthehackers/issues",
    "members_url": "https://api.github.com/orgs/baxterandthehackers/members{/member}",
    "public_members_url": "https://api.github.com/orgs/baxterandthehackers/public_members{/member}",
    "avatar_url": "https://avatars.githubusercontent.com/u/4312013?v=3",
    "description": ""
  },
  "sender":{
    "login":"baxterthehacker",
    "id":7649605,
    "avatar_url":"https://avatars.githubusercontent.com/u/7649605?v=3",
    "gravatar_id":"",
    "url":"https://api.github.com/users/baxterthehacker",
    "html_url":"https://github.com/baxterthehacker",
    "followers_url":"https://api.github.com/users/baxterthehacker/followers",
    "following_url":"https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url":"https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url":"https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url":"https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url":"https://api.github.com/users/baxterthehacker/orgs",
    "repos_url":"https://api.github.com/users/baxterthehacker/repos",
    "events_url":"https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url":"https://api.github.com/users/baxterthehacker/received_events",
    "type":"User",
    "site_admin":true
  }
}',
            'org_block' => '{
  "action": "blocked",
  "blocked_user": {
    "login": "octocat",
    "id": 583231,
    "avatar_url": "https://avatars.githubusercontent.com/u/583231?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/octocat",
    "html_url": "https://github.com/octocat",
    "followers_url": "https://api.github.com/users/octocat/followers",
    "following_url": "https://api.github.com/users/octocat/following{/other_user}",
    "gists_url": "https://api.github.com/users/octocat/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/octocat/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/octocat/subscriptions",
    "organizations_url": "https://api.github.com/users/octocat/orgs",
    "repos_url": "https://api.github.com/users/octocat/repos",
    "events_url": "https://api.github.com/users/octocat/events{/privacy}",
    "received_events_url": "https://api.github.com/users/octocat/received_events",
    "type": "User",
    "site_admin": false
  },
  "organization": {
    "login": "github",
    "id": 4366038,
    "url": "https://api.github.com/orgs/github",
    "repos_url": "https://api.github.com/orgs/github/repos",
    "events_url": "https://api.github.com/orgs/github/events",
    "hooks_url": "https://api.github.com/orgs/github/hooks",
    "issues_url": "https://api.github.com/orgs/github/issues",
    "members_url": "https://api.github.com/orgs/github/members{/member}",
    "public_members_url": "https://api.github.com/orgs/github/public_members{/member}",
    "avatar_url": "https://avatars.githubusercontent.com/u/4366038?v=3",
    "description": ""
  },
  "sender": {
    "login": "octodocs",
    "id": 25781999,
    "avatar_url": "https://avatars.githubusercontent.com/u/25781999?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/octodocs",
    "html_url": "https://github.com/octodocs",
    "followers_url": "https://api.github.com/users/octodocs/followers",
    "following_url": "https://api.github.com/users/octodocs/following{/other_user}",
    "gists_url": "https://api.github.com/users/octodocs/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/octodocs/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/octodocs/subscriptions",
    "organizations_url": "https://api.github.com/users/octodocs/orgs",
    "repos_url": "https://api.github.com/users/octodocs/repos",
    "events_url": "https://api.github.com/users/octodocs/events{/privacy}",
    "received_events_url": "https://api.github.com/users/octodocs/received_events",
    "type": "User",
    "site_admin": false
  }
}',
            'page_build' => '{
  "id": 15995382,
  "build": {
    "url": "https://api.github.com/repos/baxterthehacker/public-repo/pages/builds/15995382",
    "status": "built",
    "error": {
      "message": null
    },
    "pusher": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "commit": "053b99542c83021d6b202d1a1f5ecd5ef7084e55",
    "duration": 3790,
    "created_at": "2015-05-05T23:40:13Z",
    "updated_at": "2015-05-05T23:40:17Z"
  },
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:12Z",
    "pushed_at": "2015-05-05T23:40:17Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 0,
    "forks": 0,
    "open_issues": 0,
    "watchers": 0,
    "default_branch": "master"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  }
}',
            'project_card' => '{
  "action": "created",
  "project_card": {
    "url": "https://api.github.com/projects/columns/cards/1266091",
    "column_url": "https://api.github.com/projects/columns/515520",
    "column_id": 515520,
    "id": 1266091,
    "note": null,
    "creator": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=2",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "created_at": "2017-09-27T23:37:43Z",
    "updated_at": "2017-09-27T23:39:09Z",
    "content_url":  "https://api.github.com/repos/baxterthehacker/public-repo/issues/2"
  },
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:12Z",
    "pushed_at": "2015-05-05T23:40:27Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 2,
    "forks": 0,
    "open_issues": 2,
    "watchers": 0,
    "default_branch": "master"
  },
  "organization": {
    "login": "baxterandthehackers",
    "id": 7649605,
    "url": "https://api.github.com/orgs/baxterandthehackers",
    "repos_url": "https://api.github.com/orgs/baxterandthehackers/repos",
    "events_url": "https://api.github.com/orgs/baxterandthehackers/events",
    "members_url": "https://api.github.com/orgs/baxterandthehackers/members{/member}",
    "public_members_url": "https://api.github.com/orgs/baxterandthehackers/public_members{/member}",
    "avatar_url": "https://avatars.githubusercontent.com/u/7649605?v=2"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=2",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  }
}',
            'project_column' => '{
  "action": "created",
  "project_column": {
    "url": "https://api.github.com/projects/columns/515520",
    "project_url": "https://api.github.com/projects/288065",
    "cards_url": "https://api.github.com/projects/columns/515520/cards",
    "id": 515520,
    "name": "High Priority",
    "created_at": "2017-09-27T23:37:43Z",
    "updated_at": "2017-09-27T23:39:09Z"
  },
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:12Z",
    "pushed_at": "2015-05-05T23:40:27Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 2,
    "forks": 0,
    "open_issues": 2,
    "watchers": 0,
    "default_branch": "master"
  },
  "organization": {
    "login": "baxterandthehackers",
    "id": 7649605,
    "url": "https://api.github.com/orgs/baxterandthehackers",
    "repos_url": "https://api.github.com/orgs/baxterandthehackers/repos",
    "events_url": "https://api.github.com/orgs/baxterandthehackers/events",
    "members_url": "https://api.github.com/orgs/baxterandthehackers/members{/member}",
    "public_members_url": "https://api.github.com/orgs/baxterandthehackers/public_members{/member}",
    "avatar_url": "https://avatars.githubusercontent.com/u/7649605?v=2"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=2",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  }
}',
            'project' => '{
  "action": "created",
  "project": {
    "owner_url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "url": "https://api.github.com/projects/288065",
    "columns_url": "https://api.github.com/projects/288065/columns",
    "id": 288065,
    "name": "2017",
    "body": "Roadmap for work to be done in 2017",
    "number": 10,
    "state": "open",
    "creator": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=2",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "created_at": "2017-09-27T23:37:43Z",
    "updated_at": "2017-09-27T23:39:09Z"
  },
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:12Z",
    "pushed_at": "2015-05-05T23:40:27Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 2,
    "forks": 0,
    "open_issues": 2,
    "watchers": 0,
    "default_branch": "master"
  },
  "organization": {
    "login": "baxterandthehackers",
    "id": 7649605,
    "url": "https://api.github.com/orgs/baxterandthehackers",
    "repos_url": "https://api.github.com/orgs/baxterandthehackers/repos",
    "events_url": "https://api.github.com/orgs/baxterandthehackers/events",
    "members_url": "https://api.github.com/orgs/baxterandthehackers/members{/member}",
    "public_members_url": "https://api.github.com/orgs/baxterandthehackers/public_members{/member}",
    "avatar_url": "https://avatars.githubusercontent.com/u/7649605?v=2"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=2",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  }
}',
            'public' => '{
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:41Z",
    "pushed_at": "2015-05-05T23:40:40Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 2,
    "forks": 0,
    "open_issues": 2,
    "watchers": 0,
    "default_branch": "master"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  }
}',
            'pull_request' => '{
  "action": "opened",
  "number": 1,
  "pull_request": {
    "url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/1",
    "id": 34778301,
    "html_url": "https://github.com/baxterthehacker/public-repo/pull/1",
    "diff_url": "https://github.com/baxterthehacker/public-repo/pull/1.diff",
    "patch_url": "https://github.com/baxterthehacker/public-repo/pull/1.patch",
    "issue_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/1",
    "number": 1,
    "state": "open",
    "locked": false,
    "title": "Update the README with new information",
    "user": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "body": "This is a pretty simple change that we need to pull into master.",
    "created_at": "2015-05-05T23:40:27Z",
    "updated_at": "2015-05-05T23:40:27Z",
    "closed_at": null,
    "merged_at": null,
    "merge_commit_sha": null,
    "assignee": null,
    "milestone": null,
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/1/commits",
    "review_comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/1/comments",
    "review_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/comments{/number}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/1/comments",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c",
    "head": {
      "label": "baxterthehacker:changes",
      "ref": "changes",
      "sha": "0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c",
      "user": {
        "login": "baxterthehacker",
        "id": 6752317,
        "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
        "gravatar_id": "",
        "url": "https://api.github.com/users/baxterthehacker",
        "html_url": "https://github.com/baxterthehacker",
        "followers_url": "https://api.github.com/users/baxterthehacker/followers",
        "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
        "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
        "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
        "repos_url": "https://api.github.com/users/baxterthehacker/repos",
        "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
        "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
        "type": "User",
        "site_admin": false
      },
      "repo": {
        "id": 35129377,
        "name": "public-repo",
        "full_name": "baxterthehacker/public-repo",
        "owner": {
          "login": "baxterthehacker",
          "id": 6752317,
          "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
          "gravatar_id": "",
          "url": "https://api.github.com/users/baxterthehacker",
          "html_url": "https://github.com/baxterthehacker",
          "followers_url": "https://api.github.com/users/baxterthehacker/followers",
          "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
          "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
          "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
          "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
          "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
          "repos_url": "https://api.github.com/users/baxterthehacker/repos",
          "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
          "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
          "type": "User",
          "site_admin": false
        },
        "private": false,
        "html_url": "https://github.com/baxterthehacker/public-repo",
        "description": "",
        "fork": false,
        "url": "https://api.github.com/repos/baxterthehacker/public-repo",
        "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
        "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
        "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
        "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
        "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
        "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
        "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
        "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
        "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
        "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
        "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
        "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
        "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
        "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
        "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
        "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
        "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
        "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
        "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
        "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
        "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
        "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
        "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
        "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
        "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
        "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
        "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
        "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
        "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
        "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
        "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
        "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
        "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
        "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
        "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
        "created_at": "2015-05-05T23:40:12Z",
        "updated_at": "2015-05-05T23:40:12Z",
        "pushed_at": "2015-05-05T23:40:26Z",
        "git_url": "git://github.com/baxterthehacker/public-repo.git",
        "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
        "clone_url": "https://github.com/baxterthehacker/public-repo.git",
        "svn_url": "https://github.com/baxterthehacker/public-repo",
        "homepage": null,
        "size": 0,
        "stargazers_count": 0,
        "watchers_count": 0,
        "language": null,
        "has_issues": true,
        "has_downloads": true,
        "has_wiki": true,
        "has_pages": true,
        "forks_count": 0,
        "mirror_url": null,
        "open_issues_count": 1,
        "forks": 0,
        "open_issues": 1,
        "watchers": 0,
        "default_branch": "master"
      }
    },
    "base": {
      "label": "baxterthehacker:master",
      "ref": "master",
      "sha": "9049f1265b7d61be4a8904a9a27120d2064dab3b",
      "user": {
        "login": "baxterthehacker",
        "id": 6752317,
        "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
        "gravatar_id": "",
        "url": "https://api.github.com/users/baxterthehacker",
        "html_url": "https://github.com/baxterthehacker",
        "followers_url": "https://api.github.com/users/baxterthehacker/followers",
        "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
        "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
        "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
        "repos_url": "https://api.github.com/users/baxterthehacker/repos",
        "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
        "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
        "type": "User",
        "site_admin": false
      },
      "repo": {
        "id": 35129377,
        "name": "public-repo",
        "full_name": "baxterthehacker/public-repo",
        "owner": {
          "login": "baxterthehacker",
          "id": 6752317,
          "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
          "gravatar_id": "",
          "url": "https://api.github.com/users/baxterthehacker",
          "html_url": "https://github.com/baxterthehacker",
          "followers_url": "https://api.github.com/users/baxterthehacker/followers",
          "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
          "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
          "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
          "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
          "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
          "repos_url": "https://api.github.com/users/baxterthehacker/repos",
          "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
          "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
          "type": "User",
          "site_admin": false
        },
        "private": false,
        "html_url": "https://github.com/baxterthehacker/public-repo",
        "description": "",
        "fork": false,
        "url": "https://api.github.com/repos/baxterthehacker/public-repo",
        "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
        "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
        "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
        "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
        "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
        "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
        "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
        "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
        "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
        "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
        "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
        "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
        "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
        "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
        "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
        "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
        "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
        "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
        "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
        "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
        "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
        "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
        "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
        "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
        "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
        "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
        "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
        "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
        "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
        "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
        "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
        "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
        "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
        "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
        "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
        "created_at": "2015-05-05T23:40:12Z",
        "updated_at": "2015-05-05T23:40:12Z",
        "pushed_at": "2015-05-05T23:40:26Z",
        "git_url": "git://github.com/baxterthehacker/public-repo.git",
        "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
        "clone_url": "https://github.com/baxterthehacker/public-repo.git",
        "svn_url": "https://github.com/baxterthehacker/public-repo",
        "homepage": null,
        "size": 0,
        "stargazers_count": 0,
        "watchers_count": 0,
        "language": null,
        "has_issues": true,
        "has_downloads": true,
        "has_wiki": true,
        "has_pages": true,
        "forks_count": 0,
        "mirror_url": null,
        "open_issues_count": 1,
        "forks": 0,
        "open_issues": 1,
        "watchers": 0,
        "default_branch": "master"
      }
    },
    "_links": {
      "self": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/1"
      },
      "html": {
        "href": "https://github.com/baxterthehacker/public-repo/pull/1"
      },
      "issue": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/issues/1"
      },
      "comments": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/issues/1/comments"
      },
      "review_comments": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/1/comments"
      },
      "review_comment": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/comments{/number}"
      },
      "commits": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/1/commits"
      },
      "statuses": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c"
      }
    },
    "merged": false,
    "mergeable": null,
    "mergeable_state": "unknown",
    "merged_by": null,
    "comments": 0,
    "review_comments": 0,
    "commits": 1,
    "additions": 1,
    "deletions": 1,
    "changed_files": 1
  },
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:12Z",
    "pushed_at": "2015-05-05T23:40:26Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 1,
    "forks": 0,
    "open_issues": 1,
    "watchers": 0,
    "default_branch": "master"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  },
  "installation": {
    "id": 234
  }
}',
            'pull_request_review' => '{
  "action": "submitted",
  "review": {
    "id": 2626884,
    "user": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "body": "Looks great!",
    "submitted_at": "2016-10-03T23:39:09Z",
    "state": "approved",
    "html_url": "https://github.com/baxterthehacker/public-repo/pull/8#pullrequestreview-2626884",
    "pull_request_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/8",
    "_links": {
      "html": {
        "href": "https://github.com/baxterthehacker/public-repo/pull/8#pullrequestreview-2626884"
      },
      "pull_request": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/8"
      }
    }
  },
  "pull_request": {
    "url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/8",
    "id": 87811438,
    "html_url": "https://github.com/baxterthehacker/public-repo/pull/8",
    "diff_url": "https://github.com/baxterthehacker/public-repo/pull/8.diff",
    "patch_url": "https://github.com/baxterthehacker/public-repo/pull/8.patch",
    "issue_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/8",
    "number": 8,
    "state": "open",
    "locked": false,
    "title": "Add a README description",
    "user": {
      "login": "skalnik",
      "id": 2546,
      "avatar_url": "https://avatars.githubusercontent.com/u/2546?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/skalnik",
      "html_url": "https://github.com/skalnik",
      "followers_url": "https://api.github.com/users/skalnik/followers",
      "following_url": "https://api.github.com/users/skalnik/following{/other_user}",
      "gists_url": "https://api.github.com/users/skalnik/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/skalnik/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/skalnik/subscriptions",
      "organizations_url": "https://api.github.com/users/skalnik/orgs",
      "repos_url": "https://api.github.com/users/skalnik/repos",
      "events_url": "https://api.github.com/users/skalnik/events{/privacy}",
      "received_events_url": "https://api.github.com/users/skalnik/received_events",
      "type": "User",
      "site_admin": true
    },
    "body": "Just a few more details",
    "created_at": "2016-10-03T23:37:43Z",
    "updated_at": "2016-10-03T23:39:09Z",
    "closed_at": null,
    "merged_at": null,
    "merge_commit_sha": "faea154a7decef6819754aab0f8c0e232e6c8b4f",
    "assignee": null,
    "assignees": [],
    "milestone": null,
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/8/commits",
    "review_comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/8/comments",
    "review_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/comments{/number}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/8/comments",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/b7a1f9c27caa4e03c14a88feb56e2d4f7500aa63",
    "head": {
      "label": "skalnik:patch-2",
      "ref": "patch-2",
      "sha": "b7a1f9c27caa4e03c14a88feb56e2d4f7500aa63",
      "user": {
        "login": "skalnik",
        "id": 2546,
        "avatar_url": "https://avatars.githubusercontent.com/u/2546?v=3",
        "gravatar_id": "",
        "url": "https://api.github.com/users/skalnik",
        "html_url": "https://github.com/skalnik",
        "followers_url": "https://api.github.com/users/skalnik/followers",
        "following_url": "https://api.github.com/users/skalnik/following{/other_user}",
        "gists_url": "https://api.github.com/users/skalnik/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/skalnik/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/skalnik/subscriptions",
        "organizations_url": "https://api.github.com/users/skalnik/orgs",
        "repos_url": "https://api.github.com/users/skalnik/repos",
        "events_url": "https://api.github.com/users/skalnik/events{/privacy}",
        "received_events_url": "https://api.github.com/users/skalnik/received_events",
        "type": "User",
        "site_admin": true
      },
      "repo": {
        "id": 69919152,
        "name": "public-repo",
        "full_name": "skalnik/public-repo",
        "owner": {
          "login": "skalnik",
          "id": 2546,
          "avatar_url": "https://avatars.githubusercontent.com/u/2546?v=3",
          "gravatar_id": "",
          "url": "https://api.github.com/users/skalnik",
          "html_url": "https://github.com/skalnik",
          "followers_url": "https://api.github.com/users/skalnik/followers",
          "following_url": "https://api.github.com/users/skalnik/following{/other_user}",
          "gists_url": "https://api.github.com/users/skalnik/gists{/gist_id}",
          "starred_url": "https://api.github.com/users/skalnik/starred{/owner}{/repo}",
          "subscriptions_url": "https://api.github.com/users/skalnik/subscriptions",
          "organizations_url": "https://api.github.com/users/skalnik/orgs",
          "repos_url": "https://api.github.com/users/skalnik/repos",
          "events_url": "https://api.github.com/users/skalnik/events{/privacy}",
          "received_events_url": "https://api.github.com/users/skalnik/received_events",
          "type": "User",
          "site_admin": true
        },
        "private": false,
        "html_url": "https://github.com/skalnik/public-repo",
        "description": null,
        "fork": true,
        "url": "https://api.github.com/repos/skalnik/public-repo",
        "forks_url": "https://api.github.com/repos/skalnik/public-repo/forks",
        "keys_url": "https://api.github.com/repos/skalnik/public-repo/keys{/key_id}",
        "collaborators_url": "https://api.github.com/repos/skalnik/public-repo/collaborators{/collaborator}",
        "teams_url": "https://api.github.com/repos/skalnik/public-repo/teams",
        "hooks_url": "https://api.github.com/repos/skalnik/public-repo/hooks",
        "issue_events_url": "https://api.github.com/repos/skalnik/public-repo/issues/events{/number}",
        "events_url": "https://api.github.com/repos/skalnik/public-repo/events",
        "assignees_url": "https://api.github.com/repos/skalnik/public-repo/assignees{/user}",
        "branches_url": "https://api.github.com/repos/skalnik/public-repo/branches{/branch}",
        "tags_url": "https://api.github.com/repos/skalnik/public-repo/tags",
        "blobs_url": "https://api.github.com/repos/skalnik/public-repo/git/blobs{/sha}",
        "git_tags_url": "https://api.github.com/repos/skalnik/public-repo/git/tags{/sha}",
        "git_refs_url": "https://api.github.com/repos/skalnik/public-repo/git/refs{/sha}",
        "trees_url": "https://api.github.com/repos/skalnik/public-repo/git/trees{/sha}",
        "statuses_url": "https://api.github.com/repos/skalnik/public-repo/statuses/{sha}",
        "languages_url": "https://api.github.com/repos/skalnik/public-repo/languages",
        "stargazers_url": "https://api.github.com/repos/skalnik/public-repo/stargazers",
        "contributors_url": "https://api.github.com/repos/skalnik/public-repo/contributors",
        "subscribers_url": "https://api.github.com/repos/skalnik/public-repo/subscribers",
        "subscription_url": "https://api.github.com/repos/skalnik/public-repo/subscription",
        "commits_url": "https://api.github.com/repos/skalnik/public-repo/commits{/sha}",
        "git_commits_url": "https://api.github.com/repos/skalnik/public-repo/git/commits{/sha}",
        "comments_url": "https://api.github.com/repos/skalnik/public-repo/comments{/number}",
        "issue_comment_url": "https://api.github.com/repos/skalnik/public-repo/issues/comments{/number}",
        "contents_url": "https://api.github.com/repos/skalnik/public-repo/contents/{+path}",
        "compare_url": "https://api.github.com/repos/skalnik/public-repo/compare/{base}...{head}",
        "merges_url": "https://api.github.com/repos/skalnik/public-repo/merges",
        "archive_url": "https://api.github.com/repos/skalnik/public-repo/{archive_format}{/ref}",
        "downloads_url": "https://api.github.com/repos/skalnik/public-repo/downloads",
        "issues_url": "https://api.github.com/repos/skalnik/public-repo/issues{/number}",
        "pulls_url": "https://api.github.com/repos/skalnik/public-repo/pulls{/number}",
        "milestones_url": "https://api.github.com/repos/skalnik/public-repo/milestones{/number}",
        "notifications_url": "https://api.github.com/repos/skalnik/public-repo/notifications{?since,all,participating}",
        "labels_url": "https://api.github.com/repos/skalnik/public-repo/labels{/name}",
        "releases_url": "https://api.github.com/repos/skalnik/public-repo/releases{/id}",
        "deployments_url": "https://api.github.com/repos/skalnik/public-repo/deployments",
        "created_at": "2016-10-03T23:23:31Z",
        "updated_at": "2016-08-15T17:19:01Z",
        "pushed_at": "2016-10-03T23:36:52Z",
        "git_url": "git://github.com/skalnik/public-repo.git",
        "ssh_url": "git@github.com:skalnik/public-repo.git",
        "clone_url": "https://github.com/skalnik/public-repo.git",
        "svn_url": "https://github.com/skalnik/public-repo",
        "homepage": null,
        "size": 233,
        "stargazers_count": 0,
        "watchers_count": 0,
        "language": null,
        "has_issues": false,
        "has_downloads": true,
        "has_wiki": true,
        "has_pages": false,
        "forks_count": 0,
        "mirror_url": null,
        "open_issues_count": 0,
        "forks": 0,
        "open_issues": 0,
        "watchers": 0,
        "default_branch": "master"
      }
    },
    "base": {
      "label": "baxterthehacker:master",
      "ref": "master",
      "sha": "9049f1265b7d61be4a8904a9a27120d2064dab3b",
      "user": {
        "login": "baxterthehacker",
        "id": 6752317,
        "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
        "gravatar_id": "",
        "url": "https://api.github.com/users/baxterthehacker",
        "html_url": "https://github.com/baxterthehacker",
        "followers_url": "https://api.github.com/users/baxterthehacker/followers",
        "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
        "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
        "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
        "repos_url": "https://api.github.com/users/baxterthehacker/repos",
        "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
        "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
        "type": "User",
        "site_admin": false
      },
      "repo": {
        "id": 35129377,
        "name": "public-repo",
        "full_name": "baxterthehacker/public-repo",
        "owner": {
          "login": "baxterthehacker",
          "id": 6752317,
          "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
          "gravatar_id": "",
          "url": "https://api.github.com/users/baxterthehacker",
          "html_url": "https://github.com/baxterthehacker",
          "followers_url": "https://api.github.com/users/baxterthehacker/followers",
          "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
          "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
          "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
          "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
          "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
          "repos_url": "https://api.github.com/users/baxterthehacker/repos",
          "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
          "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
          "type": "User",
          "site_admin": false
        },
        "private": false,
        "html_url": "https://github.com/baxterthehacker/public-repo",
        "description": "",
        "fork": false,
        "url": "https://api.github.com/repos/baxterthehacker/public-repo",
        "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
        "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
        "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
        "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
        "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
        "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
        "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
        "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
        "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
        "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
        "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
        "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
        "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
        "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
        "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
        "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
        "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
        "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
        "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
        "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
        "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
        "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
        "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
        "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
        "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
        "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
        "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
        "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
        "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
        "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
        "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
        "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
        "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
        "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
        "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
        "deployments_url": "https://api.github.com/repos/baxterthehacker/public-repo/deployments",
        "created_at": "2015-05-05T23:40:12Z",
        "updated_at": "2016-08-15T17:19:01Z",
        "pushed_at": "2016-10-03T23:37:43Z",
        "git_url": "git://github.com/baxterthehacker/public-repo.git",
        "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
        "clone_url": "https://github.com/baxterthehacker/public-repo.git",
        "svn_url": "https://github.com/baxterthehacker/public-repo",
        "homepage": null,
        "size": 233,
        "stargazers_count": 2,
        "watchers_count": 2,
        "language": null,
        "has_issues": true,
        "has_downloads": true,
        "has_wiki": true,
        "has_pages": true,
        "forks_count": 2,
        "mirror_url": null,
        "open_issues_count": 5,
        "forks": 2,
        "open_issues": 5,
        "watchers": 2,
        "default_branch": "master"
      }
    },
    "_links": {
      "self": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/8"
      },
      "html": {
        "href": "https://github.com/baxterthehacker/public-repo/pull/8"
      },
      "issue": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/issues/8"
      },
      "comments": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/issues/8/comments"
      },
      "review_comments": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/8/comments"
      },
      "review_comment": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/comments{/number}"
      },
      "commits": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/8/commits"
      },
      "statuses": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/b7a1f9c27caa4e03c14a88feb56e2d4f7500aa63"
      }
    }
  },
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "deployments_url": "https://api.github.com/repos/baxterthehacker/public-repo/deployments",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2016-08-15T17:19:01Z",
    "pushed_at": "2016-10-03T23:37:43Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 233,
    "stargazers_count": 2,
    "watchers_count": 2,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 2,
    "mirror_url": null,
    "open_issues_count": 5,
    "forks": 2,
    "open_issues": 5,
    "watchers": 2,
    "default_branch": "master"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  }
}',
            'pull_request_review_comment' => '{
  "action": "created",
  "comment": {
    "url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/comments/29724692",
    "id": 29724692,
    "diff_hunk": "@@ -1 +1 @@\n-# public-repo",
    "path": "README.md",
    "position": 1,
    "original_position": 1,
    "commit_id": "0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c",
    "original_commit_id": "0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c",
    "user": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "body": "Maybe you should use more emojji on this line.",
    "created_at": "2015-05-05T23:40:27Z",
    "updated_at": "2015-05-05T23:40:27Z",
    "html_url": "https://github.com/baxterthehacker/public-repo/pull/1#discussion_r29724692",
    "pull_request_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/1",
    "_links": {
      "self": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/comments/29724692"
      },
      "html": {
        "href": "https://github.com/baxterthehacker/public-repo/pull/1#discussion_r29724692"
      },
      "pull_request": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/1"
      }
    }
  },
  "pull_request": {
    "url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/1",
    "id": 34778301,
    "html_url": "https://github.com/baxterthehacker/public-repo/pull/1",
    "diff_url": "https://github.com/baxterthehacker/public-repo/pull/1.diff",
    "patch_url": "https://github.com/baxterthehacker/public-repo/pull/1.patch",
    "issue_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/1",
    "number": 1,
    "state": "open",
    "locked": false,
    "title": "Update the README with new information",
    "user": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "body": "This is a pretty simple change that we need to pull into master.",
    "created_at": "2015-05-05T23:40:27Z",
    "updated_at": "2015-05-05T23:40:27Z",
    "closed_at": null,
    "merged_at": null,
    "merge_commit_sha": "18721552ba489fb84e12958c1b5694b5475f7991",
    "assignee": null,
    "milestone": null,
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/1/commits",
    "review_comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/1/comments",
    "review_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/comments{/number}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/1/comments",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c",
    "head": {
      "label": "baxterthehacker:changes",
      "ref": "changes",
      "sha": "0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c",
      "user": {
        "login": "baxterthehacker",
        "id": 6752317,
        "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
        "gravatar_id": "",
        "url": "https://api.github.com/users/baxterthehacker",
        "html_url": "https://github.com/baxterthehacker",
        "followers_url": "https://api.github.com/users/baxterthehacker/followers",
        "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
        "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
        "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
        "repos_url": "https://api.github.com/users/baxterthehacker/repos",
        "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
        "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
        "type": "User",
        "site_admin": false
      },
      "repo": {
        "id": 35129377,
        "name": "public-repo",
        "full_name": "baxterthehacker/public-repo",
        "owner": {
          "login": "baxterthehacker",
          "id": 6752317,
          "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
          "gravatar_id": "",
          "url": "https://api.github.com/users/baxterthehacker",
          "html_url": "https://github.com/baxterthehacker",
          "followers_url": "https://api.github.com/users/baxterthehacker/followers",
          "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
          "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
          "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
          "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
          "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
          "repos_url": "https://api.github.com/users/baxterthehacker/repos",
          "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
          "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
          "type": "User",
          "site_admin": false
        },
        "private": false,
        "html_url": "https://github.com/baxterthehacker/public-repo",
        "description": "",
        "fork": false,
        "url": "https://api.github.com/repos/baxterthehacker/public-repo",
        "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
        "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
        "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
        "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
        "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
        "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
        "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
        "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
        "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
        "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
        "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
        "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
        "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
        "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
        "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
        "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
        "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
        "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
        "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
        "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
        "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
        "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
        "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
        "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
        "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
        "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
        "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
        "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
        "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
        "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
        "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
        "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
        "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
        "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
        "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
        "created_at": "2015-05-05T23:40:12Z",
        "updated_at": "2015-05-05T23:40:12Z",
        "pushed_at": "2015-05-05T23:40:27Z",
        "git_url": "git://github.com/baxterthehacker/public-repo.git",
        "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
        "clone_url": "https://github.com/baxterthehacker/public-repo.git",
        "svn_url": "https://github.com/baxterthehacker/public-repo",
        "homepage": null,
        "size": 0,
        "stargazers_count": 0,
        "watchers_count": 0,
        "language": null,
        "has_issues": true,
        "has_downloads": true,
        "has_wiki": true,
        "has_pages": true,
        "forks_count": 0,
        "mirror_url": null,
        "open_issues_count": 1,
        "forks": 0,
        "open_issues": 1,
        "watchers": 0,
        "default_branch": "master"
      }
    },
    "base": {
      "label": "baxterthehacker:master",
      "ref": "master",
      "sha": "9049f1265b7d61be4a8904a9a27120d2064dab3b",
      "user": {
        "login": "baxterthehacker",
        "id": 6752317,
        "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
        "gravatar_id": "",
        "url": "https://api.github.com/users/baxterthehacker",
        "html_url": "https://github.com/baxterthehacker",
        "followers_url": "https://api.github.com/users/baxterthehacker/followers",
        "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
        "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
        "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
        "repos_url": "https://api.github.com/users/baxterthehacker/repos",
        "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
        "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
        "type": "User",
        "site_admin": false
      },
      "repo": {
        "id": 35129377,
        "name": "public-repo",
        "full_name": "baxterthehacker/public-repo",
        "owner": {
          "login": "baxterthehacker",
          "id": 6752317,
          "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
          "gravatar_id": "",
          "url": "https://api.github.com/users/baxterthehacker",
          "html_url": "https://github.com/baxterthehacker",
          "followers_url": "https://api.github.com/users/baxterthehacker/followers",
          "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
          "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
          "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
          "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
          "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
          "repos_url": "https://api.github.com/users/baxterthehacker/repos",
          "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
          "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
          "type": "User",
          "site_admin": false
        },
        "private": false,
        "html_url": "https://github.com/baxterthehacker/public-repo",
        "description": "",
        "fork": false,
        "url": "https://api.github.com/repos/baxterthehacker/public-repo",
        "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
        "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
        "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
        "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
        "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
        "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
        "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
        "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
        "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
        "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
        "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
        "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
        "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
        "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
        "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
        "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
        "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
        "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
        "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
        "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
        "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
        "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
        "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
        "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
        "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
        "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
        "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
        "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
        "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
        "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
        "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
        "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
        "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
        "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
        "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
        "created_at": "2015-05-05T23:40:12Z",
        "updated_at": "2015-05-05T23:40:12Z",
        "pushed_at": "2015-05-05T23:40:27Z",
        "git_url": "git://github.com/baxterthehacker/public-repo.git",
        "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
        "clone_url": "https://github.com/baxterthehacker/public-repo.git",
        "svn_url": "https://github.com/baxterthehacker/public-repo",
        "homepage": null,
        "size": 0,
        "stargazers_count": 0,
        "watchers_count": 0,
        "language": null,
        "has_issues": true,
        "has_downloads": true,
        "has_wiki": true,
        "has_pages": true,
        "forks_count": 0,
        "mirror_url": null,
        "open_issues_count": 1,
        "forks": 0,
        "open_issues": 1,
        "watchers": 0,
        "default_branch": "master"
      }
    },
    "_links": {
      "self": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/1"
      },
      "html": {
        "href": "https://github.com/baxterthehacker/public-repo/pull/1"
      },
      "issue": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/issues/1"
      },
      "comments": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/issues/1/comments"
      },
      "review_comments": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/1/comments"
      },
      "review_comment": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/comments{/number}"
      },
      "commits": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/pulls/1/commits"
      },
      "statuses": {
        "href": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c"
      }
    }
  },
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:12Z",
    "pushed_at": "2015-05-05T23:40:27Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 1,
    "forks": 0,
    "open_issues": 1,
    "watchers": 0,
    "default_branch": "master"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  }
}',
            'push' => '{
          "ref": "refs/heads/changes",
          "before": "9049f1265b7d61be4a8904a9a27120d2064dab3b",
          "after": "0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c",
          "created": false,
          "deleted": false,
          "forced": false,
          "base_ref": null,
          "compare": "https://github.com/baxterthehacker/public-repo/compare/9049f1265b7d...0d1a26e67d8f",
          "commits": [
            {
              "id": "0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c",
              "tree_id": "f9d2a07e9488b91af2641b26b9407fe22a451433",
              "distinct": true,
              "message": "Update README.md",
              "timestamp": "2015-05-05T19:40:15-04:00",
              "url": "https://github.com/baxterthehacker/public-repo/commit/0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c",
              "author": {
                "name": "baxterthehacker",
                "email": "baxterthehacker@users.noreply.github.com",
                "username": "baxterthehacker"
              },
              "committer": {
                "name": "baxterthehacker",
                "email": "baxterthehacker@users.noreply.github.com",
                "username": "baxterthehacker"
              },
              "added": [

              ],
              "removed": [

              ],
              "modified": [
                "README.md"
              ]
            }
          ],
          "head_commit": {
            "id": "0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c",
            "tree_id": "f9d2a07e9488b91af2641b26b9407fe22a451433",
            "distinct": true,
            "message": "Update README.md",
            "timestamp": "2015-05-05T19:40:15-04:00",
            "url": "https://github.com/baxterthehacker/public-repo/commit/0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c",
            "author": {
              "name": "baxterthehacker",
              "email": "baxterthehacker@users.noreply.github.com",
              "username": "baxterthehacker"
            },
            "committer": {
              "name": "baxterthehacker",
              "email": "baxterthehacker@users.noreply.github.com",
              "username": "baxterthehacker"
            },
            "added": [

            ],
            "removed": [

            ],
            "modified": [
              "README.md"
            ]
          },
          "repository": {
            "id": 35129377,
            "name": "public-repo",
            "full_name": "baxterthehacker/public-repo",
            "owner": {
              "name": "baxterthehacker",
              "email": "baxterthehacker@users.noreply.github.com"
            },
            "private": false,
            "html_url": "https://github.com/baxterthehacker/public-repo",
            "description": "",
            "fork": false,
            "url": "https://github.com/baxterthehacker/public-repo",
            "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
            "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
            "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
            "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
            "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
            "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
            "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
            "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
            "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
            "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
            "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
            "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
            "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
            "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
            "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
            "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
            "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
            "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
            "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
            "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
            "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
            "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
            "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
            "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
            "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
            "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
            "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
            "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
            "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
            "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
            "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
            "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
            "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
            "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
            "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
            "created_at": 1430869212,
            "updated_at": "2015-05-05T23:40:12Z",
            "pushed_at": 1430869217,
            "git_url": "git://github.com/baxterthehacker/public-repo.git",
            "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
            "clone_url": "https://github.com/baxterthehacker/public-repo.git",
            "svn_url": "https://github.com/baxterthehacker/public-repo",
            "homepage": null,
            "size": 0,
            "stargazers_count": 0,
            "watchers_count": 0,
            "language": null,
            "has_issues": true,
            "has_downloads": true,
            "has_wiki": true,
            "has_pages": true,
            "forks_count": 0,
            "mirror_url": null,
            "open_issues_count": 0,
            "forks": 0,
            "open_issues": 0,
            "watchers": 0,
            "default_branch": "master",
            "stargazers": 0,
            "master_branch": "master"
          },
          "pusher": {
            "name": "baxterthehacker",
            "email": "baxterthehacker@users.noreply.github.com"
          },
          "sender": {
            "login": "baxterthehacker",
            "id": 6752317,
            "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
            "gravatar_id": "",
            "url": "https://api.github.com/users/baxterthehacker",
            "html_url": "https://github.com/baxterthehacker",
            "followers_url": "https://api.github.com/users/baxterthehacker/followers",
            "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
            "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
            "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
            "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
            "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
            "repos_url": "https://api.github.com/users/baxterthehacker/repos",
            "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
            "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
            "type": "User",
            "site_admin": false
          }
      }',
      'release' => '{
"action": "published",
"release": {
"url": "https://api.github.com/repos/baxterthehacker/public-repo/releases/1261438",
"assets_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases/1261438/assets",
"upload_url": "https://uploads.github.com/repos/baxterthehacker/public-repo/releases/1261438/assets{?name}",
"html_url": "https://github.com/baxterthehacker/public-repo/releases/tag/0.0.1",
"id": 1261438,
"tag_name": "0.0.1",
"target_commitish": "master",
"name": null,
"draft": false,
"author": {
"login": "baxterthehacker",
"id": 6752317,
"avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
"gravatar_id": "",
"url": "https://api.github.com/users/baxterthehacker",
"html_url": "https://github.com/baxterthehacker",
"followers_url": "https://api.github.com/users/baxterthehacker/followers",
"following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
"gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
"starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
"subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
"organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
"repos_url": "https://api.github.com/users/baxterthehacker/repos",
"events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
"received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
"type": "User",
"site_admin": false
},
"prerelease": false,
"created_at": "2015-05-05T23:40:12Z",
"published_at": "2015-05-05T23:40:38Z",
"assets": [

],
"tarball_url": "https://api.github.com/repos/baxterthehacker/public-repo/tarball/0.0.1",
"zipball_url": "https://api.github.com/repos/baxterthehacker/public-repo/zipball/0.0.1",
"body": null
},
"repository": {
"id": 35129377,
"name": "public-repo",
"full_name": "baxterthehacker/public-repo",
"owner": {
"login": "baxterthehacker",
"id": 6752317,
"avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
"gravatar_id": "",
"url": "https://api.github.com/users/baxterthehacker",
"html_url": "https://github.com/baxterthehacker",
"followers_url": "https://api.github.com/users/baxterthehacker/followers",
"following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
"gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
"starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
"subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
"organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
"repos_url": "https://api.github.com/users/baxterthehacker/repos",
"events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
"received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
"type": "User",
"site_admin": false
},
"private": false,
"html_url": "https://github.com/baxterthehacker/public-repo",
"description": "",
"fork": false,
"url": "https://api.github.com/repos/baxterthehacker/public-repo",
"forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
"keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
"collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
"teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
"hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
"issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
"events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
"assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
"branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
"tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
"blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
"git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
"git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
"trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
"statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
"languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
"stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
"contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
"subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
"subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
"commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
"git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
"comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
"issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
"contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
"compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
"merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
"archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
"downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
"issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
"pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
"milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
"notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
"labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
"releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
"created_at": "2015-05-05T23:40:12Z",
"updated_at": "2015-05-05T23:40:30Z",
"pushed_at": "2015-05-05T23:40:38Z",
"git_url": "git://github.com/baxterthehacker/public-repo.git",
"ssh_url": "git@github.com:baxterthehacker/public-repo.git",
"clone_url": "https://github.com/baxterthehacker/public-repo.git",
"svn_url": "https://github.com/baxterthehacker/public-repo",
"homepage": null,
"size": 0,
"stargazers_count": 0,
"watchers_count": 0,
"language": null,
"has_issues": true,
"has_downloads": true,
"has_wiki": true,
"has_pages": true,
"forks_count": 0,
"mirror_url": null,
"open_issues_count": 2,
"forks": 0,
"open_issues": 2,
"watchers": 0,
"default_branch": "master"
},
"sender": {
"login": "baxterthehacker",
"id": 6752317,
"avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
"gravatar_id": "",
"url": "https://api.github.com/users/baxterthehacker",
"html_url": "https://github.com/baxterthehacker",
"followers_url": "https://api.github.com/users/baxterthehacker/followers",
"following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
"gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
"starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
"subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
"organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
"repos_url": "https://api.github.com/users/baxterthehacker/repos",
"events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
"received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
"type": "User",
"site_admin": false
}
}',
      'repository' => '{
"action": "created",
"repository": {
"id": 27496774,
"name": "new-repository",
"full_name": "baxterandthehackers/new-repository",
"owner": {
"login": "baxterandthehackers",
"id": 7649605,
"avatar_url": "https://avatars.githubusercontent.com/u/7649605?v=3",
"gravatar_id": "",
"url": "https://api.github.com/users/baxterandthehackers",
"html_url": "https://github.com/baxterandthehackers",
"followers_url": "https://api.github.com/users/baxterandthehackers/followers",
"following_url": "https://api.github.com/users/baxterandthehackers/following{/other_user}",
"gists_url": "https://api.github.com/users/baxterandthehackers/gists{/gist_id}",
"starred_url": "https://api.github.com/users/baxterandthehackers/starred{/owner}{/repo}",
"subscriptions_url": "https://api.github.com/users/baxterandthehackers/subscriptions",
"organizations_url": "https://api.github.com/users/baxterandthehackers/orgs",
"repos_url": "https://api.github.com/users/baxterandthehackers/repos",
"events_url": "https://api.github.com/users/baxterandthehackers/events{/privacy}",
"received_events_url": "https://api.github.com/users/baxterandthehackers/received_events",
"type": "Organization",
"site_admin": false
},
"private": true,
"html_url": "https://github.com/baxterandthehackers/new-repository",
"description": "",
"fork": false,
"url": "https://api.github.com/repos/baxterandthehackers/new-repository",
"forks_url": "https://api.github.com/repos/baxterandthehackers/new-repository/forks",
"keys_url": "https://api.github.com/repos/baxterandthehackers/new-repository/keys{/key_id}",
"collaborators_url": "https://api.github.com/repos/baxterandthehackers/new-repository/collaborators{/collaborator}",
"teams_url": "https://api.github.com/repos/baxterandthehackers/new-repository/teams",
"hooks_url": "https://api.github.com/repos/baxterandthehackers/new-repository/hooks",
"issue_events_url": "https://api.github.com/repos/baxterandthehackers/new-repository/issues/events{/number}",
"events_url": "https://api.github.com/repos/baxterandthehackers/new-repository/events",
"assignees_url": "https://api.github.com/repos/baxterandthehackers/new-repository/assignees{/user}",
"branches_url": "https://api.github.com/repos/baxterandthehackers/new-repository/branches{/branch}",
"tags_url": "https://api.github.com/repos/baxterandthehackers/new-repository/tags",
"blobs_url": "https://api.github.com/repos/baxterandthehackers/new-repository/git/blobs{/sha}",
"git_tags_url": "https://api.github.com/repos/baxterandthehackers/new-repository/git/tags{/sha}",
"git_refs_url": "https://api.github.com/repos/baxterandthehackers/new-repository/git/refs{/sha}",
"trees_url": "https://api.github.com/repos/baxterandthehackers/new-repository/git/trees{/sha}",
"statuses_url": "https://api.github.com/repos/baxterandthehackers/new-repository/statuses/{sha}",
"languages_url": "https://api.github.com/repos/baxterandthehackers/new-repository/languages",
"stargazers_url": "https://api.github.com/repos/baxterandthehackers/new-repository/stargazers",
"contributors_url": "https://api.github.com/repos/baxterandthehackers/new-repository/contributors",
"subscribers_url": "https://api.github.com/repos/baxterandthehackers/new-repository/subscribers",
"subscription_url": "https://api.github.com/repos/baxterandthehackers/new-repository/subscription",
"commits_url": "https://api.github.com/repos/baxterandthehackers/new-repository/commits{/sha}",
"git_commits_url": "https://api.github.com/repos/baxterandthehackers/new-repository/git/commits{/sha}",
"comments_url": "https://api.github.com/repos/baxterandthehackers/new-repository/comments{/number}",
"issue_comment_url": "https://api.github.com/repos/baxterandthehackers/new-repository/issues/comments/{number}",
"contents_url": "https://api.github.com/repos/baxterandthehackers/new-repository/contents/{+path}",
"compare_url": "https://api.github.com/repos/baxterandthehackers/new-repository/compare/{base}...{head}",
"merges_url": "https://api.github.com/repos/baxterandthehackers/new-repository/merges",
"archive_url": "https://api.github.com/repos/baxterandthehackers/new-repository/{archive_format}{/ref}",
"downloads_url": "https://api.github.com/repos/baxterandthehackers/new-repository/downloads",
"issues_url": "https://api.github.com/repos/baxterandthehackers/new-repository/issues{/number}",
"pulls_url": "https://api.github.com/repos/baxterandthehackers/new-repository/pulls{/number}",
"milestones_url": "https://api.github.com/repos/baxterandthehackers/new-repository/milestones{/number}",
"notifications_url": "https://api.github.com/repos/baxterandthehackers/new-repository/notifications{?since,all,participating}",
"labels_url": "https://api.github.com/repos/baxterandthehackers/new-repository/labels{/name}",
"releases_url": "https://api.github.com/repos/baxterandthehackers/new-repository/releases{/id}",
"created_at": "2014-12-03T16:39:25Z",
"updated_at": "2014-12-03T16:39:25Z",
"pushed_at": "2014-12-03T16:39:25Z",
"git_url": "git://github.com/baxterandthehackers/new-repository.git",
"ssh_url": "git@github.com:baxterandthehackers/new-repository.git",
"clone_url": "https://github.com/baxterandthehackers/new-repository.git",
"svn_url": "https://github.com/baxterandthehackers/new-repository",
"homepage": null,
"size": 0,
"stargazers_count": 0,
"watchers_count": 0,
"language": null,
"has_issues": true,
"has_downloads": true,
"has_wiki": true,
"has_pages": false,
"forks_count": 0,
"mirror_url": null,
"open_issues_count": 0,
"forks": 0,
"open_issues": 0,
"watchers": 0,
"default_branch": "master"
},
"organization": {
"login": "baxterandthehackers",
"id": 7649605,
"url": "https://api.github.com/orgs/baxterandthehackers",
"repos_url": "https://api.github.com/orgs/baxterandthehackers/repos",
"events_url": "https://api.github.com/orgs/baxterandthehackers/events",
"members_url": "https://api.github.com/orgs/baxterandthehackers/members{/member}",
"public_members_url": "https://api.github.com/orgs/baxterandthehackers/public_members{/member}",
"avatar_url": "https://avatars.githubusercontent.com/u/7649605?v=2"
},
"sender": {
"login": "baxterthehacker",
"id": 6752317,
"avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=2",
"gravatar_id": "",
"url": "https://api.github.com/users/baxterthehacker",
"html_url": "https://github.com/baxterthehacker",
"followers_url": "https://api.github.com/users/baxterthehacker/followers",
"following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
"gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
"starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
"subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
"organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
"repos_url": "https://api.github.com/users/baxterthehacker/repos",
"events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
"received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
"type": "User",
"site_admin": false
}
}',
      'team' => '{
"action":"created",
"team":{
"name":"team baxter",
"id":2175394,
"slug":"team-baxter",
"description":"",
"privacy":"secret",
"url":"https:/api.github.com/teams/2175394",
"members_url":"https:/api.github.com/teams/2175394/members{/member}",
"repositories_url":"https:/api.github.com/teams/2175394/repos",
"permission":"pull"
},
"organization":{
"login":"baxterandthehackers",
"id":4312013,
"url":"https://api.github.com/orgs/baxterandthehackers",
"repos_url":"https://api.github.com/orgs/baxterandthehackers/repos",
"events_url":"https://api.github.com/orgs/baxterandthehackers/events",
"hooks_url":"https://api.github.com/orgs/baxterandthehackers/hooks",
"issues_url":"https://api.github.com/orgs/baxterandthehackers/issues",
"members_url":"https://api.github.com/orgs/baxterandthehackers/members{/member}",
"public_members_url":"https://api.github.com/orgs/baxterandthehackers/public_members{/member}",
"avatar_url":"https://avatars.githubusercontent.com/u/4312013?v=3",
"description":""
},
"sender": {
"login": "baxterthehacker",
"id": 6752317,
"avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
"gravatar_id": "",
"url": "https://api.github.com/users/baxterthehacker",
"html_url": "https://github.com/baxterthehacker",
"followers_url": "https://api.github.com/users/baxterthehacker/followers",
"following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
"gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
"starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
"subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
"organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
"repos_url": "https://api.github.com/users/baxterthehacker/repos",
"events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
"received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
"type": "User",
"site_admin": false
}
}',
      'team_add' => '{
"team": {
"name": "github",
"id": 836012,
"slug": "github",
"description": "",
"permission": "pull",
"url": "https://api.github.com/teams/836012",
"members_url": "https://api.github.com/teams/836012/members{/member}",
"repositories_url": "https://api.github.com/teams/836012/repos"
},
"repository": {
"id": 35129393,
"name": "public-repo",
"full_name": "baxterandthehackers/public-repo",
"owner": {
"login": "baxterandthehackers",
"id": 7649605,
"avatar_url": "https://avatars.githubusercontent.com/u/7649605?v=3",
"gravatar_id": "",
"url": "https://api.github.com/users/baxterandthehackers",
"html_url": "https://github.com/baxterandthehackers",
"followers_url": "https://api.github.com/users/baxterandthehackers/followers",
"following_url": "https://api.github.com/users/baxterandthehackers/following{/other_user}",
"gists_url": "https://api.github.com/users/baxterandthehackers/gists{/gist_id}",
"starred_url": "https://api.github.com/users/baxterandthehackers/starred{/owner}{/repo}",
"subscriptions_url": "https://api.github.com/users/baxterandthehackers/subscriptions",
"organizations_url": "https://api.github.com/users/baxterandthehackers/orgs",
"repos_url": "https://api.github.com/users/baxterandthehackers/repos",
"events_url": "https://api.github.com/users/baxterandthehackers/events{/privacy}",
"received_events_url": "https://api.github.com/users/baxterandthehackers/received_events",
"type": "Organization",
"site_admin": false
},
"private": false,
"html_url": "https://github.com/baxterandthehackers/public-repo",
"description": "",
"fork": true,
"url": "https://api.github.com/repos/baxterandthehackers/public-repo",
"forks_url": "https://api.github.com/repos/baxterandthehackers/public-repo/forks",
"keys_url": "https://api.github.com/repos/baxterandthehackers/public-repo/keys{/key_id}",
"collaborators_url": "https://api.github.com/repos/baxterandthehackers/public-repo/collaborators{/collaborator}",
"teams_url": "https://api.github.com/repos/baxterandthehackers/public-repo/teams",
"hooks_url": "https://api.github.com/repos/baxterandthehackers/public-repo/hooks",
"issue_events_url": "https://api.github.com/repos/baxterandthehackers/public-repo/issues/events{/number}",
"events_url": "https://api.github.com/repos/baxterandthehackers/public-repo/events",
"assignees_url": "https://api.github.com/repos/baxterandthehackers/public-repo/assignees{/user}",
"branches_url": "https://api.github.com/repos/baxterandthehackers/public-repo/branches{/branch}",
"tags_url": "https://api.github.com/repos/baxterandthehackers/public-repo/tags",
"blobs_url": "https://api.github.com/repos/baxterandthehackers/public-repo/git/blobs{/sha}",
"git_tags_url": "https://api.github.com/repos/baxterandthehackers/public-repo/git/tags{/sha}",
"git_refs_url": "https://api.github.com/repos/baxterandthehackers/public-repo/git/refs{/sha}",
"trees_url": "https://api.github.com/repos/baxterandthehackers/public-repo/git/trees{/sha}",
"statuses_url": "https://api.github.com/repos/baxterandthehackers/public-repo/statuses/{sha}",
"languages_url": "https://api.github.com/repos/baxterandthehackers/public-repo/languages",
"stargazers_url": "https://api.github.com/repos/baxterandthehackers/public-repo/stargazers",
"contributors_url": "https://api.github.com/repos/baxterandthehackers/public-repo/contributors",
"subscribers_url": "https://api.github.com/repos/baxterandthehackers/public-repo/subscribers",
"subscription_url": "https://api.github.com/repos/baxterandthehackers/public-repo/subscription",
"commits_url": "https://api.github.com/repos/baxterandthehackers/public-repo/commits{/sha}",
"git_commits_url": "https://api.github.com/repos/baxterandthehackers/public-repo/git/commits{/sha}",
"comments_url": "https://api.github.com/repos/baxterandthehackers/public-repo/comments{/number}",
"issue_comment_url": "https://api.github.com/repos/baxterandthehackers/public-repo/issues/comments{/number}",
"contents_url": "https://api.github.com/repos/baxterandthehackers/public-repo/contents/{+path}",
"compare_url": "https://api.github.com/repos/baxterandthehackers/public-repo/compare/{base}...{head}",
"merges_url": "https://api.github.com/repos/baxterandthehackers/public-repo/merges",
"archive_url": "https://api.github.com/repos/baxterandthehackers/public-repo/{archive_format}{/ref}",
"downloads_url": "https://api.github.com/repos/baxterandthehackers/public-repo/downloads",
"issues_url": "https://api.github.com/repos/baxterandthehackers/public-repo/issues{/number}",
"pulls_url": "https://api.github.com/repos/baxterandthehackers/public-repo/pulls{/number}",
"milestones_url": "https://api.github.com/repos/baxterandthehackers/public-repo/milestones{/number}",
"notifications_url": "https://api.github.com/repos/baxterandthehackers/public-repo/notifications{?since,all,participating}",
"labels_url": "https://api.github.com/repos/baxterandthehackers/public-repo/labels{/name}",
"releases_url": "https://api.github.com/repos/baxterandthehackers/public-repo/releases{/id}",
"created_at": "2015-05-05T23:40:30Z",
"updated_at": "2015-05-05T23:40:30Z",
"pushed_at": "2015-05-05T23:40:27Z",
"git_url": "git://github.com/baxterandthehackers/public-repo.git",
"ssh_url": "git@github.com:baxterandthehackers/public-repo.git",
"clone_url": "https://github.com/baxterandthehackers/public-repo.git",
"svn_url": "https://github.com/baxterandthehackers/public-repo",
"homepage": null,
"size": 0,
"stargazers_count": 0,
"watchers_count": 0,
"language": null,
"has_issues": false,
"has_downloads": true,
"has_wiki": true,
"has_pages": true,
"forks_count": 0,
"mirror_url": null,
"open_issues_count": 0,
"forks": 0,
"open_issues": 0,
"watchers": 0,
"default_branch": "master"
},
"organization": {
"login": "baxterandthehackers",
"id": 7649605,
"url": "https://api.github.com/orgs/baxterandthehackers",
"repos_url": "https://api.github.com/orgs/baxterandthehackers/repos",
"events_url": "https://api.github.com/orgs/baxterandthehackers/events",
"members_url": "https://api.github.com/orgs/baxterandthehackers/members{/member}",
"public_members_url": "https://api.github.com/orgs/baxterandthehackers/public_members{/member}",
"avatar_url": "https://avatars.githubusercontent.com/u/7649605?v=3",
"description": null
},
"sender": {
"login": "baxterandthehackers",
"id": 7649605,
"avatar_url": "https://avatars.githubusercontent.com/u/7649605?v=3",
"gravatar_id": "",
"url": "https://api.github.com/users/baxterandthehackers",
"html_url": "https://github.com/baxterandthehackers",
"followers_url": "https://api.github.com/users/baxterandthehackers/followers",
"following_url": "https://api.github.com/users/baxterandthehackers/following{/other_user}",
"gists_url": "https://api.github.com/users/baxterandthehackers/gists{/gist_id}",
"starred_url": "https://api.github.com/users/baxterandthehackers/starred{/owner}{/repo}",
"subscriptions_url": "https://api.github.com/users/baxterandthehackers/subscriptions",
"organizations_url": "https://api.github.com/users/baxterandthehackers/orgs",
"repos_url": "https://api.github.com/users/baxterandthehackers/repos",
"events_url": "https://api.github.com/users/baxterandthehackers/events{/privacy}",
"received_events_url": "https://api.github.com/users/baxterandthehackers/received_events",
"type": "Organization",
"site_admin": false
}
}',
      'watch' => '{
"action": "started",
"repository": {
"id": 35129377,
"name": "public-repo",
"full_name": "baxterthehacker/public-repo",
"owner": {
"login": "baxterthehacker",
"id": 6752317,
"avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
"gravatar_id": "",
"url": "https://api.github.com/users/baxterthehacker",
"html_url": "https://github.com/baxterthehacker",
"followers_url": "https://api.github.com/users/baxterthehacker/followers",
"following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
"gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
"starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
"subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
"organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
"repos_url": "https://api.github.com/users/baxterthehacker/repos",
"events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
"received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
"type": "User",
"site_admin": false
},
"private": false,
"html_url": "https://github.com/baxterthehacker/public-repo",
"description": "",
"fork": false,
"url": "https://api.github.com/repos/baxterthehacker/public-repo",
"forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
"keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
"collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
"teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
"hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
"issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
"events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
"assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
"branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
"tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
"blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
"git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
"git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
"trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
"statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
"languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
"stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
"contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
"subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
"subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
"commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
"git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
"comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
"issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
"contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
"compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
"merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
"archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
"downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
"issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
"pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
"milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
"notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
"labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
"releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
"created_at": "2015-05-05T23:40:12Z",
"updated_at": "2015-05-05T23:40:30Z",
"pushed_at": "2015-05-05T23:40:27Z",
"git_url": "git://github.com/baxterthehacker/public-repo.git",
"ssh_url": "git@github.com:baxterthehacker/public-repo.git",
"clone_url": "https://github.com/baxterthehacker/public-repo.git",
"svn_url": "https://github.com/baxterthehacker/public-repo",
"homepage": null,
"size": 0,
"stargazers_count": 0,
"watchers_count": 0,
"language": null,
"has_issues": true,
"has_downloads": true,
"has_wiki": true,
"has_pages": true,
"forks_count": 0,
"mirror_url": null,
"open_issues_count": 2,
"forks": 0,
"open_issues": 2,
"watchers": 0,
"default_branch": "master"
},
"sender": {
"login": "baxterthehacker",
"id": 6752317,
"avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
"gravatar_id": "",
"url": "https://api.github.com/users/baxterthehacker",
"html_url": "https://github.com/baxterthehacker",
"followers_url": "https://api.github.com/users/baxterthehacker/followers",
"following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
"gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
"starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
"subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
"organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
"repos_url": "https://api.github.com/users/baxterthehacker/repos",
"events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
"received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
"type": "User",
"site_admin": false
}
}',
            'status' => '{
  "id": 214015194,
  "sha": "9049f1265b7d61be4a8904a9a27120d2064dab3b",
  "name": "baxterthehacker/public-repo",
  "target_url": "http://travis.url",
  "context": "default",
  "description": "The travis CI build passed",
  "state": "success",
  "commit": {
    "sha": "9049f1265b7d61be4a8904a9a27120d2064dab3b",
    "commit": {
      "author": {
        "name": "baxterthehacker",
        "email": "baxterthehacker@users.noreply.github.com",
        "date": "2015-05-05T23:40:12Z"
      },
      "committer": {
        "name": "baxterthehacker",
        "email": "baxterthehacker@users.noreply.github.com",
        "date": "2015-05-05T23:40:12Z"
      },
      "message": "Initial commit",
      "tree": {
        "sha": "02b49ad0ba4f1acd9f06531b21e16a4ac5d341d0",
        "url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees/02b49ad0ba4f1acd9f06531b21e16a4ac5d341d0"
      },
      "url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits/9049f1265b7d61be4a8904a9a27120d2064dab3b",
      "comment_count": 1
    },
    "url": "https://api.github.com/repos/baxterthehacker/public-repo/commits/9049f1265b7d61be4a8904a9a27120d2064dab3b",
    "html_url": "https://github.com/baxterthehacker/public-repo/commit/9049f1265b7d61be4a8904a9a27120d2064dab3b",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits/9049f1265b7d61be4a8904a9a27120d2064dab3b/comments",
    "author": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "committer": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "parents": [

    ]
  },
  "branches": [
    {
      "name": "master",
      "commit": {
        "sha": "9049f1265b7d61be4a8904a9a27120d2064dab3b",
        "url": "https://api.github.com/repos/baxterthehacker/public-repo/commits/9049f1265b7d61be4a8904a9a27120d2064dab3b"
      }
    },
    {
      "name": "changes",
      "commit": {
        "sha": "0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c",
        "url": "https://api.github.com/repos/baxterthehacker/public-repo/commits/0d1a26e67d8f5eaf1f6ba5c57fc3c7d91ac0fd1c"
      }
    },
    {
      "name": "gh-pages",
      "commit": {
        "sha": "b11bb7545ac14abafc6191a0481b0d961e7793c6",
        "url": "https://api.github.com/repos/baxterthehacker/public-repo/commits/b11bb7545ac14abafc6191a0481b0d961e7793c6"
      }
    }
  ],
  "created_at": "2015-05-05T23:40:39Z",
  "updated_at": "2015-05-05T23:40:39Z",
  "repository": {
    "id": 35129377,
    "name": "public-repo",
    "full_name": "baxterthehacker/public-repo",
    "owner": {
      "login": "baxterthehacker",
      "id": 6752317,
      "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
      "gravatar_id": "",
      "url": "https://api.github.com/users/baxterthehacker",
      "html_url": "https://github.com/baxterthehacker",
      "followers_url": "https://api.github.com/users/baxterthehacker/followers",
      "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
      "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
      "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
      "repos_url": "https://api.github.com/users/baxterthehacker/repos",
      "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
      "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/baxterthehacker/public-repo",
    "description": "",
    "fork": false,
    "url": "https://api.github.com/repos/baxterthehacker/public-repo",
    "forks_url": "https://api.github.com/repos/baxterthehacker/public-repo/forks",
    "keys_url": "https://api.github.com/repos/baxterthehacker/public-repo/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/baxterthehacker/public-repo/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/baxterthehacker/public-repo/teams",
    "hooks_url": "https://api.github.com/repos/baxterthehacker/public-repo/hooks",
    "issue_events_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/events{/number}",
    "events_url": "https://api.github.com/repos/baxterthehacker/public-repo/events",
    "assignees_url": "https://api.github.com/repos/baxterthehacker/public-repo/assignees{/user}",
    "branches_url": "https://api.github.com/repos/baxterthehacker/public-repo/branches{/branch}",
    "tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/tags",
    "blobs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/baxterthehacker/public-repo/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/baxterthehacker/public-repo/languages",
    "stargazers_url": "https://api.github.com/repos/baxterthehacker/public-repo/stargazers",
    "contributors_url": "https://api.github.com/repos/baxterthehacker/public-repo/contributors",
    "subscribers_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscribers",
    "subscription_url": "https://api.github.com/repos/baxterthehacker/public-repo/subscription",
    "commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/baxterthehacker/public-repo/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/baxterthehacker/public-repo/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/baxterthehacker/public-repo/contents/{+path}",
    "compare_url": "https://api.github.com/repos/baxterthehacker/public-repo/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/baxterthehacker/public-repo/merges",
    "archive_url": "https://api.github.com/repos/baxterthehacker/public-repo/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/baxterthehacker/public-repo/downloads",
    "issues_url": "https://api.github.com/repos/baxterthehacker/public-repo/issues{/number}",
    "pulls_url": "https://api.github.com/repos/baxterthehacker/public-repo/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/baxterthehacker/public-repo/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/baxterthehacker/public-repo/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/baxterthehacker/public-repo/labels{/name}",
    "releases_url": "https://api.github.com/repos/baxterthehacker/public-repo/releases{/id}",
    "created_at": "2015-05-05T23:40:12Z",
    "updated_at": "2015-05-05T23:40:30Z",
    "pushed_at": "2015-05-05T23:40:39Z",
    "git_url": "git://github.com/baxterthehacker/public-repo.git",
    "ssh_url": "git@github.com:baxterthehacker/public-repo.git",
    "clone_url": "https://github.com/baxterthehacker/public-repo.git",
    "svn_url": "https://github.com/baxterthehacker/public-repo",
    "homepage": null,
    "size": 0,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": null,
    "has_issues": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": true,
    "forks_count": 0,
    "mirror_url": null,
    "open_issues_count": 2,
    "forks": 0,
    "open_issues": 2,
    "watchers": 0,
    "default_branch": "master"
  },
  "sender": {
    "login": "baxterthehacker",
    "id": 6752317,
    "avatar_url": "https://avatars.githubusercontent.com/u/6752317?v=3",
    "gravatar_id": "",
    "url": "https://api.github.com/users/baxterthehacker",
    "html_url": "https://github.com/baxterthehacker",
    "followers_url": "https://api.github.com/users/baxterthehacker/followers",
    "following_url": "https://api.github.com/users/baxterthehacker/following{/other_user}",
    "gists_url": "https://api.github.com/users/baxterthehacker/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/baxterthehacker/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/baxterthehacker/subscriptions",
    "organizations_url": "https://api.github.com/users/baxterthehacker/orgs",
    "repos_url": "https://api.github.com/users/baxterthehacker/repos",
    "events_url": "https://api.github.com/users/baxterthehacker/events{/privacy}",
    "received_events_url": "https://api.github.com/users/baxterthehacker/received_events",
    "type": "User",
    "site_admin": false
  }
}'
        ];
    }

    public static function GitLab()
    {
        return [
            'Push Hook' => '{
  "object_kind": "push",
  "before": "95790bf891e76fee5e1747ab589903a6a1f80f22",
  "after": "da1560886d4f094c3e6c9ef40349f7d38b5d27d7",
  "ref": "refs/heads/master",
  "checkout_sha": "da1560886d4f094c3e6c9ef40349f7d38b5d27d7",
  "user_id": 4,
  "user_name": "John Smith",
  "user_username": "jsmith",
  "user_email": "john@example.com",
  "user_avatar": "https://s.gravatar.com/avatar/d4c74594d841139328695756648b6bd6?s=8://s.gravatar.com/avatar/d4c74594d841139328695756648b6bd6?s=80",
  "project_id": 15,
  "project":{
    "name":"Diaspora",
    "description":"",
    "web_url":"http://example.com/mike/diaspora",
    "avatar_url":null,
    "git_ssh_url":"git@example.com:mike/diaspora.git",
    "git_http_url":"http://example.com/mike/diaspora.git",
    "namespace":"Mike",
    "visibility_level":0,
    "path_with_namespace":"mike/diaspora",
    "default_branch":"master",
    "homepage":"http://example.com/mike/diaspora",
    "url":"git@example.com:mike/diaspora.git",
    "ssh_url":"git@example.com:mike/diaspora.git",
    "http_url":"http://example.com/mike/diaspora.git"
  },
  "repository":{
    "name": "Diaspora",
    "url": "git@example.com:mike/diaspora.git",
    "description": "",
    "homepage": "http://example.com/mike/diaspora",
    "git_http_url":"http://example.com/mike/diaspora.git",
    "git_ssh_url":"git@example.com:mike/diaspora.git",
    "visibility_level":0
  },
  "commits": [
    {
      "id": "b6568db1bc1dcd7f8b4d5a946b0b91f9dacd7327",
      "message": "Update Catalan translation to e38cb41.",
      "timestamp": "2011-12-12T14:27:31+02:00",
      "url": "http://example.com/mike/diaspora/commit/b6568db1bc1dcd7f8b4d5a946b0b91f9dacd7327",
      "author": {
        "name": "Jordi Mallach",
        "email": "jordi@softcatala.org"
      },
      "added": ["CHANGELOG"],
      "modified": ["app/controller/application.rb"],
      "removed": []
    },
    {
      "id": "da1560886d4f094c3e6c9ef40349f7d38b5d27d7",
      "message": "fixed readme",
      "timestamp": "2012-01-03T23:36:29+02:00",
      "url": "http://example.com/mike/diaspora/commit/da1560886d4f094c3e6c9ef40349f7d38b5d27d7",
      "author": {
        "name": "GitLab dev user",
        "email": "gitlabdev@dv6700.(none)"
      },
      "added": ["CHANGELOG"],
      "modified": ["app/controller/application.rb"],
      "removed": []
    }
  ],
  "total_commits_count": 4
}',
            'Tag Push Hook' => '{
  "object_kind": "tag_push",
  "before": "0000000000000000000000000000000000000000",
  "after": "82b3d5ae55f7080f1e6022629cdb57bfae7cccc7",
  "ref": "refs/tags/v1.0.0",
  "checkout_sha": "82b3d5ae55f7080f1e6022629cdb57bfae7cccc7",
  "user_id": 1,
  "user_name": "John Smith",
  "user_avatar": "https://s.gravatar.com/avatar/d4c74594d841139328695756648b6bd6?s=8://s.gravatar.com/avatar/d4c74594d841139328695756648b6bd6?s=80",
  "project_id": 1,
  "project":{
    "name":"Example",
    "description":"",
    "web_url":"http://example.com/jsmith/example",
    "avatar_url":null,
    "git_ssh_url":"git@example.com:jsmith/example.git",
    "git_http_url":"http://example.com/jsmith/example.git",
    "namespace":"Jsmith",
    "visibility_level":0,
    "path_with_namespace":"jsmith/example",
    "default_branch":"master",
    "homepage":"http://example.com/jsmith/example",
    "url":"git@example.com:jsmith/example.git",
    "ssh_url":"git@example.com:jsmith/example.git",
    "http_url":"http://example.com/jsmith/example.git"
  },
  "repository":{
    "name": "Example",
    "url": "ssh://git@example.com/jsmith/example.git",
    "description": "",
    "homepage": "http://example.com/jsmith/example",
    "git_http_url":"http://example.com/jsmith/example.git",
    "git_ssh_url":"git@example.com:jsmith/example.git",
    "visibility_level":0
  },
  "commits": [],
  "total_commits_count": 0
}',
            'Issue Hook' => '{
  "object_kind": "issue",
  "user": {
    "name": "Administrator",
    "username": "root",
    "avatar_url": "http://www.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61?s=40\u0026d=identicon"
  },
  "project": {
    "name":"Gitlab Test",
    "description":"Aut reprehenderit ut est.",
    "web_url":"http://example.com/gitlabhq/gitlab-test",
    "avatar_url":null,
    "git_ssh_url":"git@example.com:gitlabhq/gitlab-test.git",
    "git_http_url":"http://example.com/gitlabhq/gitlab-test.git",
    "namespace":"GitlabHQ",
    "visibility_level":20,
    "path_with_namespace":"gitlabhq/gitlab-test",
    "default_branch":"master",
    "homepage":"http://example.com/gitlabhq/gitlab-test",
    "url":"http://example.com/gitlabhq/gitlab-test.git",
    "ssh_url":"git@example.com:gitlabhq/gitlab-test.git",
    "http_url":"http://example.com/gitlabhq/gitlab-test.git"
  },
  "repository": {
    "name": "Gitlab Test",
    "url": "http://example.com/gitlabhq/gitlab-test.git",
    "description": "Aut reprehenderit ut est.",
    "homepage": "http://example.com/gitlabhq/gitlab-test"
  },
  "object_attributes": {
    "id": 301,
    "title": "New API: create/update/delete file",
    "assignee_ids": [51],
    "assignee_id": 51,
    "author_id": 51,
    "project_id": 14,
    "created_at": "2013-12-03T17:15:43Z",
    "updated_at": "2013-12-03T17:15:43Z",
    "position": 0,
    "branch_name": null,
    "description": "Create new API for manipulations with repository",
    "milestone_id": null,
    "state": "opened",
    "iid": 23,
    "url": "http://example.com/diaspora/issues/23",
    "action": "open"
  },
  "assignees": [{
    "name": "User1",
    "username": "user1",
    "avatar_url": "http://www.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61?s=40\u0026d=identicon"
  }],
  "assignee": {
    "name": "User1",
    "username": "user1",
    "avatar_url": "http://www.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61?s=40\u0026d=identicon"
  },
  "labels": [{
    "id": 206,
    "title": "API",
    "color": "#ffffff",
    "project_id": 14,
    "created_at": "2013-12-03T17:15:43Z",
    "updated_at": "2013-12-03T17:15:43Z",
    "template": false,
    "description": "API related issues",
    "type": "ProjectLabel",
    "group_id": 41
  }],
  "changes": {
    "updated_by_id": [null, 1],
    "updated_at": ["2017-09-15 16:50:55 UTC", "2017-09-15 16:52:00 UTC"],
    "labels": {
      "previous": [{
        "id": 206,
        "title": "API",
        "color": "#ffffff",
        "project_id": 14,
        "created_at": "2013-12-03T17:15:43Z",
        "updated_at": "2013-12-03T17:15:43Z",
        "template": false,
        "description": "API related issues",
        "type": "ProjectLabel",
        "group_id": 41
      }],
      "current": [{
        "id": 205,
        "title": "Platform",
        "color": "#123123",
        "project_id": 14,
        "created_at": "2013-12-03T17:15:43Z",
        "updated_at": "2013-12-03T17:15:43Z",
        "template": false,
        "description": "Platform related issues",
        "type": "ProjectLabel",
        "group_id": 41
      }]
    }
  }
}',
            'Merge Request Hook' => '{
  "object_kind": "merge_request",
  "user": {
    "name": "Administrator",
    "username": "root",
    "avatar_url": "http://www.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61?s=40\u0026d=identicon"
  },
  "project": {
    "name":"Gitlab Test",
    "description":"Aut reprehenderit ut est.",
    "web_url":"http://example.com/gitlabhq/gitlab-test",
    "avatar_url":null,
    "git_ssh_url":"git@example.com:gitlabhq/gitlab-test.git",
    "git_http_url":"http://example.com/gitlabhq/gitlab-test.git",
    "namespace":"GitlabHQ",
    "visibility_level":20,
    "path_with_namespace":"gitlabhq/gitlab-test",
    "default_branch":"master",
    "homepage":"http://example.com/gitlabhq/gitlab-test",
    "url":"http://example.com/gitlabhq/gitlab-test.git",
    "ssh_url":"git@example.com:gitlabhq/gitlab-test.git",
    "http_url":"http://example.com/gitlabhq/gitlab-test.git"
  },
  "repository": {
    "name": "Gitlab Test",
    "url": "http://example.com/gitlabhq/gitlab-test.git",
    "description": "Aut reprehenderit ut est.",
    "homepage": "http://example.com/gitlabhq/gitlab-test"
  },
  "object_attributes": {
    "id": 99,
    "target_branch": "master",
    "source_branch": "ms-viewport",
    "source_project_id": 14,
    "author_id": 51,
    "assignee_id": 6,
    "title": "MS-Viewport",
    "created_at": "2013-12-03T17:23:34Z",
    "updated_at": "2013-12-03T17:23:34Z",
    "st_commits": null,
    "st_diffs": null,
    "milestone_id": null,
    "state": "opened",
    "merge_status": "unchecked",
    "target_project_id": 14,
    "iid": 1,
    "description": "",
    "source": {
      "name":"Awesome Project",
      "description":"Aut reprehenderit ut est.",
      "web_url":"http://example.com/awesome_space/awesome_project",
      "avatar_url":null,
      "git_ssh_url":"git@example.com:awesome_space/awesome_project.git",
      "git_http_url":"http://example.com/awesome_space/awesome_project.git",
      "namespace":"Awesome Space",
      "visibility_level":20,
      "path_with_namespace":"awesome_space/awesome_project",
      "default_branch":"master",
      "homepage":"http://example.com/awesome_space/awesome_project",
      "url":"http://example.com/awesome_space/awesome_project.git",
      "ssh_url":"git@example.com:awesome_space/awesome_project.git",
      "http_url":"http://example.com/awesome_space/awesome_project.git"
    },
    "target": {
      "name":"Awesome Project",
      "description":"Aut reprehenderit ut est.",
      "web_url":"http://example.com/awesome_space/awesome_project",
      "avatar_url":null,
      "git_ssh_url":"git@example.com:awesome_space/awesome_project.git",
      "git_http_url":"http://example.com/awesome_space/awesome_project.git",
      "namespace":"Awesome Space",
      "visibility_level":20,
      "path_with_namespace":"awesome_space/awesome_project",
      "default_branch":"master",
      "homepage":"http://example.com/awesome_space/awesome_project",
      "url":"http://example.com/awesome_space/awesome_project.git",
      "ssh_url":"git@example.com:awesome_space/awesome_project.git",
      "http_url":"http://example.com/awesome_space/awesome_project.git"
    },
    "last_commit": {
      "id": "da1560886d4f094c3e6c9ef40349f7d38b5d27d7",
      "message": "fixed readme",
      "timestamp": "2012-01-03T23:36:29+02:00",
      "url": "http://example.com/awesome_space/awesome_project/commits/da1560886d4f094c3e6c9ef40349f7d38b5d27d7",
      "author": {
        "name": "GitLab dev user",
        "email": "gitlabdev@dv6700.(none)"
      }
    },
    "work_in_progress": false,
    "url": "http://example.com/diaspora/merge_requests/1",
    "action": "open",
    "assignee": {
      "name": "User1",
      "username": "user1",
      "avatar_url": "http://www.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61?s=40\u0026d=identicon"
    }
  },
  "labels": [{
    "id": 206,
    "title": "API",
    "color": "#ffffff",
    "project_id": 14,
    "created_at": "2013-12-03T17:15:43Z",
    "updated_at": "2013-12-03T17:15:43Z",
    "template": false,
    "description": "API related issues",
    "type": "ProjectLabel",
    "group_id": 41
  }],
  "changes": {
    "updated_by_id": [null, 1],
    "updated_at": ["2017-09-15 16:50:55 UTC", "2017-09-15 16:52:00 UTC"],
    "labels": {
      "previous": [{
        "id": 206,
        "title": "API",
        "color": "#ffffff",
        "project_id": 14,
        "created_at": "2013-12-03T17:15:43Z",
        "updated_at": "2013-12-03T17:15:43Z",
        "template": false,
        "description": "API related issues",
        "type": "ProjectLabel",
        "group_id": 41
      }],
      "current": [{
        "id": 205,
        "title": "Platform",
        "color": "#123123",
        "project_id": 14,
        "created_at": "2013-12-03T17:15:43Z",
        "updated_at": "2013-12-03T17:15:43Z",
        "template": false,
        "description": "Platform related issues",
        "type": "ProjectLabel",
        "group_id": 41
      }]
    }
  }
}',
            'Wiki Page Hook' => '{
  "object_kind": "wiki_page",
  "user": {
    "name": "Administrator",
    "username": "root",
    "avatar_url": "http://www.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61?s=80\u0026d=identicon"
  },
  "project": {
    "name": "awesome-project",
    "description": "This is awesome",
    "web_url": "http://example.com/root/awesome-project",
    "avatar_url": null,
    "git_ssh_url": "git@example.com:root/awesome-project.git",
    "git_http_url": "http://example.com/root/awesome-project.git",
    "namespace": "root",
    "visibility_level": 0,
    "path_with_namespace": "root/awesome-project",
    "default_branch": "master",
    "homepage": "http://example.com/root/awesome-project",
    "url": "git@example.com:root/awesome-project.git",
    "ssh_url": "git@example.com:root/awesome-project.git",
    "http_url": "http://example.com/root/awesome-project.git"
  },
  "wiki": {
    "web_url": "http://example.com/root/awesome-project/wikis/home",
    "git_ssh_url": "git@example.com:root/awesome-project.wiki.git",
    "git_http_url": "http://example.com/root/awesome-project.wiki.git",
    "path_with_namespace": "root/awesome-project.wiki",
    "default_branch": "master"
  },
  "object_attributes": {
    "title": "Awesome",
    "content": "awesome content goes here",
    "format": "markdown",
    "message": "adding an awesome page to the wiki",
    "slug": "awesome",
    "url": "http://example.com/root/awesome-project/wikis/awesome",
    "action": "create"
  }
}',
            'Pipeline Hook' => '{
   "object_kind": "pipeline",
   "object_attributes":{
      "id": 31,
      "ref": "master",
      "tag": false,
      "sha": "bcbb5ec396a2c0f828686f14fac9b80b780504f2",
      "before_sha": "bcbb5ec396a2c0f828686f14fac9b80b780504f2",
      "status": "success",
      "stages":[
         "build",
         "test",
         "deploy"
      ],
      "created_at": "2016-08-12 15:23:28 UTC",
      "finished_at": "2016-08-12 15:26:29 UTC",
      "duration": 63
   },
   "user":{
      "name": "Administrator",
      "username": "root",
      "avatar_url": "http://www.gravatar.com/avatar/e32bd13e2add097461cb96824b7a829c?s=80\u0026d=identicon"
   },
   "project":{
      "name": "Gitlab Test",
      "description": "Atque in sunt eos similique dolores voluptatem.",
      "web_url": "http://192.168.64.1:3005/gitlab-org/gitlab-test",
      "avatar_url": null,
      "git_ssh_url": "git@192.168.64.1:gitlab-org/gitlab-test.git",
      "git_http_url": "http://192.168.64.1:3005/gitlab-org/gitlab-test.git",
      "namespace": "Gitlab Org",
      "visibility_level": 20,
      "path_with_namespace": "gitlab-org/gitlab-test",
      "default_branch": "master"
   },
   "commit":{
      "id": "bcbb5ec396a2c0f828686f14fac9b80b780504f2",
      "message": "test\n",
      "timestamp": "2016-08-12T17:23:21+02:00",
      "url": "http://example.com/gitlab-org/gitlab-test/commit/bcbb5ec396a2c0f828686f14fac9b80b780504f2",
      "author":{
         "name": "User",
         "email": "user@gitlab.com"
      }
   },
   "builds":[
      {
         "id": 380,
         "stage": "deploy",
         "name": "production",
         "status": "skipped",
         "created_at": "2016-08-12 15:23:28 UTC",
         "started_at": null,
         "finished_at": null,
         "when": "manual",
         "manual": true,
         "user":{
            "name": "Administrator",
            "username": "root",
            "avatar_url": "http://www.gravatar.com/avatar/e32bd13e2add097461cb96824b7a829c?s=80\u0026d=identicon"
         },
         "runner": null,
         "artifacts_file":{
            "filename": null,
            "size": null
         }
      },
      {
         "id": 377,
         "stage": "test",
         "name": "test-image",
         "status": "success",
         "created_at": "2016-08-12 15:23:28 UTC",
         "started_at": "2016-08-12 15:26:12 UTC",
         "finished_at": null,
         "when": "on_success",
         "manual": false,
         "user":{
            "name": "Administrator",
            "username": "root",
            "avatar_url": "http://www.gravatar.com/avatar/e32bd13e2add097461cb96824b7a829c?s=80\u0026d=identicon"
         },
         "runner": null,
         "artifacts_file":{
            "filename": null,
            "size": null
         }
      },
      {
         "id": 378,
         "stage": "test",
         "name": "test-build",
         "status": "success",
         "created_at": "2016-08-12 15:23:28 UTC",
         "started_at": "2016-08-12 15:26:12 UTC",
         "finished_at": "2016-08-12 15:26:29 UTC",
         "when": "on_success",
         "manual": false,
         "user":{
            "name": "Administrator",
            "username": "root",
            "avatar_url": "http://www.gravatar.com/avatar/e32bd13e2add097461cb96824b7a829c?s=80\u0026d=identicon"
         },
         "runner": null,
         "artifacts_file":{
            "filename": null,
            "size": null
         }
      },
      {
         "id": 376,
         "stage": "build",
         "name": "build-image",
         "status": "success",
         "created_at": "2016-08-12 15:23:28 UTC",
         "started_at": "2016-08-12 15:24:56 UTC",
         "finished_at": "2016-08-12 15:25:26 UTC",
         "when": "on_success",
         "manual": false,
         "user":{
            "name": "Administrator",
            "username": "root",
            "avatar_url": "http://www.gravatar.com/avatar/e32bd13e2add097461cb96824b7a829c?s=80\u0026d=identicon"
         },
         "runner": null,
         "artifacts_file":{
            "filename": null,
            "size": null
         }
      },
      {
         "id": 379,
         "stage": "deploy",
         "name": "staging",
         "status": "created",
         "created_at": "2016-08-12 15:23:28 UTC",
         "started_at": null,
         "finished_at": null,
         "when": "on_success",
         "manual": false,
         "user":{
            "name": "Administrator",
            "username": "root",
            "avatar_url": "http://www.gravatar.com/avatar/e32bd13e2add097461cb96824b7a829c?s=80\u0026d=identicon"
         },
         "runner": null,
         "artifacts_file":{
            "filename": null,
            "size": null
         }
      }
   ]
}',
            'Build Hook' => '{
  "object_kind": "build",
  "ref": "gitlab-script-trigger",
  "tag": false,
  "before_sha": "2293ada6b400935a1378653304eaf6221e0fdb8f",
  "sha": "2293ada6b400935a1378653304eaf6221e0fdb8f",
  "build_id": 1977,
  "build_name": "test",
  "build_stage": "test",
  "build_status": "created",
  "build_started_at": null,
  "build_finished_at": null,
  "build_duration": null,
  "build_allow_failure": false,
  "project_id": 380,
  "project_name": "gitlab-org/gitlab-test",
  "user": {
    "id": 3,
    "name": "User",
    "email": "user@gitlab.com"
  },
  "commit": {
    "id": 2366,
    "sha": "2293ada6b400935a1378653304eaf6221e0fdb8f",
    "message": "test\n",
    "author_name": "User",
    "author_email": "user@gitlab.com",
    "status": "created",
    "duration": null,
    "started_at": null,
    "finished_at": null
  },
  "repository": {
    "name": "gitlab_test",
    "git_ssh_url": "git@192.168.64.1:gitlab-org/gitlab-test.git",
    "description": "Atque in sunt eos similique dolores voluptatem.",
    "homepage": "http://192.168.64.1:3005/gitlab-org/gitlab-test",
    "git_ssh_url": "git@192.168.64.1:gitlab-org/gitlab-test.git",
    "git_http_url": "http://192.168.64.1:3005/gitlab-org/gitlab-test.git",
    "visibility_level": 20
  }
}',
            'Commit Note Hook' => '{
  "object_kind": "note",
  "user": {
    "name": "Administrator",
    "username": "root",
    "avatar_url": "http://www.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61?s=40\u0026d=identicon"
  },
  "project_id": 5,
  "project":{
    "name":"Gitlab Test",
    "description":"Aut reprehenderit ut est.",
    "web_url":"http://example.com/gitlabhq/gitlab-test",
    "avatar_url":null,
    "git_ssh_url":"git@example.com:gitlabhq/gitlab-test.git",
    "git_http_url":"http://example.com/gitlabhq/gitlab-test.git",
    "namespace":"GitlabHQ",
    "visibility_level":20,
    "path_with_namespace":"gitlabhq/gitlab-test",
    "default_branch":"master",
    "homepage":"http://example.com/gitlabhq/gitlab-test",
    "url":"http://example.com/gitlabhq/gitlab-test.git",
    "ssh_url":"git@example.com:gitlabhq/gitlab-test.git",
    "http_url":"http://example.com/gitlabhq/gitlab-test.git"
  },
  "repository":{
    "name": "Gitlab Test",
    "url": "http://example.com/gitlab-org/gitlab-test.git",
    "description": "Aut reprehenderit ut est.",
    "homepage": "http://example.com/gitlab-org/gitlab-test"
  },
  "object_attributes": {
    "id": 1243,
    "note": "This is a commit comment. How does this work?",
    "noteable_type": "Commit",
    "author_id": 1,
    "created_at": "2015-05-17 18:08:09 UTC",
    "updated_at": "2015-05-17 18:08:09 UTC",
    "project_id": 5,
    "attachment":null,
    "line_code": "bec9703f7a456cd2b4ab5fb3220ae016e3e394e3_0_1",
    "commit_id": "cfe32cf61b73a0d5e9f13e774abde7ff789b1660",
    "noteable_id": null,
    "system": false,
    "st_diff": {
      "diff": "--- /dev/null\n+++ b/six\n@@ -0,0 +1 @@\n+Subproject commit 409f37c4f05865e4fb208c771485f211a22c4c2d\n",
      "new_path": "six",
      "old_path": "six",
      "a_mode": "0",
      "b_mode": "160000",
      "new_file": true,
      "renamed_file": false,
      "deleted_file": false
    },
    "url": "http://example.com/gitlab-org/gitlab-test/commit/cfe32cf61b73a0d5e9f13e774abde7ff789b1660#note_1243"
  },
  "commit": {
    "id": "cfe32cf61b73a0d5e9f13e774abde7ff789b1660",
    "message": "Add submodule\n\nSigned-off-by: Dmitriy Zaporozhets \u003cdmitriy.zaporozhets@gmail.com\u003e\n",
    "timestamp": "2014-02-27T10:06:20+02:00",
    "url": "http://example.com/gitlab-org/gitlab-test/commit/cfe32cf61b73a0d5e9f13e774abde7ff789b1660",
    "author": {
      "name": "Dmitriy Zaporozhets",
      "email": "dmitriy.zaporozhets@gmail.com"
    }
  }
}',
            'Merge Request Note Hook' => '{
  "object_kind": "note",
  "user": {
    "name": "Administrator",
    "username": "root",
    "avatar_url": "http://www.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61?s=40\u0026d=identicon"
  },
  "project_id": 5,
  "project":{
    "name":"Gitlab Test",
    "description":"Aut reprehenderit ut est.",
    "web_url":"http://example.com/gitlab-org/gitlab-test",
    "avatar_url":null,
    "git_ssh_url":"git@example.com:gitlab-org/gitlab-test.git",
    "git_http_url":"http://example.com/gitlab-org/gitlab-test.git",
    "namespace":"Gitlab Org",
    "visibility_level":10,
    "path_with_namespace":"gitlab-org/gitlab-test",
    "default_branch":"master",
    "homepage":"http://example.com/gitlab-org/gitlab-test",
    "url":"http://example.com/gitlab-org/gitlab-test.git",
    "ssh_url":"git@example.com:gitlab-org/gitlab-test.git",
    "http_url":"http://example.com/gitlab-org/gitlab-test.git"
  },
  "repository":{
    "name": "Gitlab Test",
    "url": "http://localhost/gitlab-org/gitlab-test.git",
    "description": "Aut reprehenderit ut est.",
    "homepage": "http://example.com/gitlab-org/gitlab-test"
  },
  "object_attributes": {
    "id": 1244,
    "note": "This MR needs work.",
    "noteable_type": "MergeRequest",
    "author_id": 1,
    "created_at": "2015-05-17 18:21:36 UTC",
    "updated_at": "2015-05-17 18:21:36 UTC",
    "project_id": 5,
    "attachment": null,
    "line_code": null,
    "commit_id": "",
    "noteable_id": 7,
    "system": false,
    "st_diff": null,
    "url": "http://example.com/gitlab-org/gitlab-test/merge_requests/1#note_1244"
  },
  "merge_request": {
    "id": 7,
    "target_branch": "markdown",
    "source_branch": "master",
    "source_project_id": 5,
    "author_id": 8,
    "assignee_id": 28,
    "title": "Tempora et eos debitis quae laborum et.",
    "created_at": "2015-03-01 20:12:53 UTC",
    "updated_at": "2015-03-21 18:27:27 UTC",
    "milestone_id": 11,
    "state": "opened",
    "merge_status": "cannot_be_merged",
    "target_project_id": 5,
    "iid": 1,
    "description": "Et voluptas corrupti assumenda temporibus. Architecto cum animi eveniet amet asperiores. Vitae numquam voluptate est natus sit et ad id.",
    "position": 0,
    "source":{
      "name":"Gitlab Test",
      "description":"Aut reprehenderit ut est.",
      "web_url":"http://example.com/gitlab-org/gitlab-test",
      "avatar_url":null,
      "git_ssh_url":"git@example.com:gitlab-org/gitlab-test.git",
      "git_http_url":"http://example.com/gitlab-org/gitlab-test.git",
      "namespace":"Gitlab Org",
      "visibility_level":10,
      "path_with_namespace":"gitlab-org/gitlab-test",
      "default_branch":"master",
      "homepage":"http://example.com/gitlab-org/gitlab-test",
      "url":"http://example.com/gitlab-org/gitlab-test.git",
      "ssh_url":"git@example.com:gitlab-org/gitlab-test.git",
      "http_url":"http://example.com/gitlab-org/gitlab-test.git"
    },
    "target": {
      "name":"Gitlab Test",
      "description":"Aut reprehenderit ut est.",
      "web_url":"http://example.com/gitlab-org/gitlab-test",
      "avatar_url":null,
      "git_ssh_url":"git@example.com:gitlab-org/gitlab-test.git",
      "git_http_url":"http://example.com/gitlab-org/gitlab-test.git",
      "namespace":"Gitlab Org",
      "visibility_level":10,
      "path_with_namespace":"gitlab-org/gitlab-test",
      "default_branch":"master",
      "homepage":"http://example.com/gitlab-org/gitlab-test",
      "url":"http://example.com/gitlab-org/gitlab-test.git",
      "ssh_url":"git@example.com:gitlab-org/gitlab-test.git",
      "http_url":"http://example.com/gitlab-org/gitlab-test.git"
    },
    "last_commit": {
      "id": "562e173be03b8ff2efb05345d12df18815438a4b",
      "message": "Merge branch another-branch into master\n\nCheck in this test\n",
      "timestamp": "2015-04-08T21: 00:25-07:00",
      "url": "http://example.com/gitlab-org/gitlab-test/commit/562e173be03b8ff2efb05345d12df18815438a4b",
      "author": {
        "name": "John Smith",
        "email": "john@example.com"
      }
    },
    "work_in_progress": false,
    "assignee": {
      "name": "User1",
      "username": "user1",
      "avatar_url": "http://www.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61?s=40\u0026d=identicon"
    }
  }
}',
            'Issue Note Hook' => '{
  "object_kind": "note",
  "user": {
    "name": "Administrator",
    "username": "root",
    "avatar_url": "http://www.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61?s=40\u0026d=identicon"
  },
  "project_id": 5,
  "project":{
    "name":"Gitlab Test",
    "description":"Aut reprehenderit ut est.",
    "web_url":"http://example.com/gitlab-org/gitlab-test",
    "avatar_url":null,
    "git_ssh_url":"git@example.com:gitlab-org/gitlab-test.git",
    "git_http_url":"http://example.com/gitlab-org/gitlab-test.git",
    "namespace":"Gitlab Org",
    "visibility_level":10,
    "path_with_namespace":"gitlab-org/gitlab-test",
    "default_branch":"master",
    "homepage":"http://example.com/gitlab-org/gitlab-test",
    "url":"http://example.com/gitlab-org/gitlab-test.git",
    "ssh_url":"git@example.com:gitlab-org/gitlab-test.git",
    "http_url":"http://example.com/gitlab-org/gitlab-test.git"
  },
  "repository":{
    "name":"diaspora",
    "url":"git@example.com:mike/diaspora.git",
    "description":"",
    "homepage":"http://example.com/mike/diaspora"
  },
  "object_attributes": {
    "id": 1241,
    "note": "Hello world",
    "noteable_type": "Issue",
    "author_id": 1,
    "created_at": "2015-05-17 17:06:40 UTC",
    "updated_at": "2015-05-17 17:06:40 UTC",
    "project_id": 5,
    "attachment": null,
    "line_code": null,
    "commit_id": "",
    "noteable_id": 92,
    "system": false,
    "st_diff": null,
    "url": "http://example.com/gitlab-org/gitlab-test/issues/17#note_1241"
  },
  "issue": {
    "id": 92,
    "title": "test",
    "assignee_ids": [],
    "assignee_id": null,
    "author_id": 1,
    "project_id": 5,
    "created_at": "2015-04-12 14:53:17 UTC",
    "updated_at": "2015-04-26 08:28:42 UTC",
    "position": 0,
    "branch_name": null,
    "description": "test",
    "milestone_id": null,
    "state": "closed",
    "iid": 17
  }
}',
            'Snippet Note Hook' => '{
  "object_kind": "note",
  "user": {
    "name": "Administrator",
    "username": "root",
    "avatar_url": "http://www.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61?s=40\u0026d=identicon"
  },
  "project_id": 5,
  "project":{
    "name":"Gitlab Test",
    "description":"Aut reprehenderit ut est.",
    "web_url":"http://example.com/gitlab-org/gitlab-test",
    "avatar_url":null,
    "git_ssh_url":"git@example.com:gitlab-org/gitlab-test.git",
    "git_http_url":"http://example.com/gitlab-org/gitlab-test.git",
    "namespace":"Gitlab Org",
    "visibility_level":10,
    "path_with_namespace":"gitlab-org/gitlab-test",
    "default_branch":"master",
    "homepage":"http://example.com/gitlab-org/gitlab-test",
    "url":"http://example.com/gitlab-org/gitlab-test.git",
    "ssh_url":"git@example.com:gitlab-org/gitlab-test.git",
    "http_url":"http://example.com/gitlab-org/gitlab-test.git"
  },
  "repository":{
    "name":"Gitlab Test",
    "url":"http://example.com/gitlab-org/gitlab-test.git",
    "description":"Aut reprehenderit ut est.",
    "homepage":"http://example.com/gitlab-org/gitlab-test"
  },
  "object_attributes": {
    "id": 1245,
    "note": "Is this snippet doing what its supposed to be doing?",
    "noteable_type": "Snippet",
    "author_id": 1,
    "created_at": "2015-05-17 18:35:50 UTC",
    "updated_at": "2015-05-17 18:35:50 UTC",
    "project_id": 5,
    "attachment": null,
    "line_code": null,
    "commit_id": "",
    "noteable_id": 53,
    "system": false,
    "st_diff": null,
    "url": "http://example.com/gitlab-org/gitlab-test/snippets/53#note_1245"
  },
  "snippet": {
    "id": 53,
    "title": "test",
    "content": "puts Hello world",
    "author_id": 1,
    "project_id": 5,
    "created_at": "2015-04-09 02:40:38 UTC",
    "updated_at": "2015-04-09 02:40:38 UTC",
    "file_name": "test.rb",
    "expires_at": null,
    "type": "ProjectSnippet",
    "visibility_level": 0
  }
}'
        ];
    }

    public static function BitBucket()
    {
        return [
            'repo:push' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project":{
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
},
  "push": {
    "changes": [
      {
        "new": {
          "type": "branch",
          "name": "name-of-branch",
          "target": {
            "type": "commit",
            "hash": "709d658dc5b6d6afcd46049c2f332ee3f515a67d",
            "author": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
            "message": "new commit message\n",
            "date": "2015-06-09T03:34:49+00:00",
            "parents": [
              {
                "type": "commit",
                "hash": "1e65c05c1d5171631d92438a13901ca7dae9618c",
                "links": {
                  "self": {
                    "href": "https://api.bitbucket.org/2.0/repositories/user_name/repo_name/commit/8cbbd65829c7ad834a97841e0defc965718036a0"
                  },
                  "html": {
                    "href": "https://bitbucket.org/user_name/repo_name/commits/8cbbd65829c7ad834a97841e0defc965718036a0"
                  }
                }
              }
            ],
            "links": {
              "self": {
                "href": "https://api.bitbucket.org/2.0/repositories/user_name/repo_name/commit/c4b2b7914156a878aa7c9da452a09fb50c2091f2"
              },
              "html": {
                "href": "https://bitbucket.org/user_name/repo_name/commits/c4b2b7914156a878aa7c9da452a09fb50c2091f2"
              }
            }
          },
          "links": {
            "self": {
              "href": "https://api.bitbucket.org/2.0/repositories/user_name/repo_name/refs/branches/master"
            },
            "commits": {
              "href": "https://api.bitbucket.org/2.0/repositories/user_name/repo_name/commits/master"
            },
            "html": {
              "href": "https://bitbucket.org/user_name/repo_name/branch/master"
            }
          }
        },
        "old": {
          "type": "branch",
          "name": "name-of-branch",
          "target": {
            "type": "commit",
            "hash": "1e65c05c1d5171631d92438a13901ca7dae9618c",
            "author": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
            "message": "old commit message\n",
            "date": "2015-06-08T21:34:56+00:00",
            "parents": [
              {
                "type": "commit",
                "hash": "e0d0c2041e09746be5ce4b55067d5a8e3098c843",
                "links": {
                  "self": {
                    "href": "https://api.bitbucket.org/2.0/repositories/user_name/repo_name/commit/9c4a3452da3bc4f37af5a6bb9c784246f44406f7"
                  },
                  "html": {
                    "href": "https://bitbucket.org/user_name/repo_name/commits/9c4a3452da3bc4f37af5a6bb9c784246f44406f7"
                  }
                }
              }
            ],
            "links": {
              "self": {
                "href": "https://api.bitbucket.org/2.0/repositories/user_name/repo_name/commit/b99ea6dad8f416e57c5ca78c1ccef590600d841b"
              },
              "html": {
                "href": "https://bitbucket.org/user_name/repo_name/commits/b99ea6dad8f416e57c5ca78c1ccef590600d841b"
              }
            }
          },
          "links": {
            "self": {
              "href": "https://api.bitbucket.org/2.0/repositories/user_name/repo_name/refs/branches/master"
            },
            "commits": {
              "href": "https://api.bitbucket.org/2.0/repositories/user_name/repo_name/commits/master"
            },
            "html": {
              "href": "https://bitbucket.org/user_name/repo_name/branch/master"
            }
          }
        },
        "links": {
          "html": {
            "href": "https://bitbucket.org/user_name/repo_name/branches/compare/c4b2b7914156a878aa7c9da452a09fb50c2091f2..b99ea6dad8f416e57c5ca78c1ccef590600d841b"
          },
          "diff": {
            "href": "https://api.bitbucket.org/2.0/repositories/user_name/repo_name/diff/c4b2b7914156a878aa7c9da452a09fb50c2091f2..b99ea6dad8f416e57c5ca78c1ccef590600d841b"
          },
          "commits": {
            "href": "https://api.bitbucket.org/2.0/repositories/user_name/repo_name/commits?include=c4b2b7914156a878aa7c9da452a09fb50c2091f2&exclude=b99ea6dad8f416e57c5ca78c1ccef590600d841b"
          }
        },
        "created": false,
        "forced": false,
        "closed": false,
        "commits": [
          {
            "hash": "03f4a7270240708834de475bcf21532d6134777e",
            "type": "commit",
            "message": "commit message\n",
            "author": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
            "links": {
              "self": {
                "href": "https://api.bitbucket.org/2.0/repositories/user/repo/commit/03f4a7270240708834de475bcf21532d6134777e"
              },
              "html": {
                "href": "https://bitbucket.org/user/repo/commits/03f4a7270240708834de475bcf21532d6134777e"
              }
            }
          }
        ],
        "truncated": false
      }
    ]
  }
}',
            'repo:fork' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
},
  "fork": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
}',
            'repo:updated' => '{
              "actor": {
              "type": "user",
              "username": "emmap1",
              "display_name": "Emma",
              "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
              "links": {
                "self": {
                  "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
                },
                "html": {
                  "href": "https://api.bitbucket.org/emmap1"
                },
                "avatar": {
                  "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
                }
              }
            },
              "repository": {
              "type": "repository",
              "links": {
                "self": {
                  "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
                },
                "html": {
                  "href": "https://api.bitbucket.org/bitbucket/bitbucket"
                },
                "avatar": {
                  "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
                }
              },
              "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
              "project": {
              "type": "project",
              "project": "Untitled project",
              "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
              "links": {
                "html": {
                  "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
                },
                "avatar": {
                  "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
                }
              },
              "key": "proj"
            },
              "full_name": "team_name/repo_name",
              "name": "repo_name",
              "website": "https://mywebsite.com/",
              "owner": {
              "type": "user",
              "username": "emmap1",
              "display_name": "Emma",
              "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
              "links": {
                "self": {
                  "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
                },
                "html": {
                  "href": "https://api.bitbucket.org/emmap1"
                },
                "avatar": {
                  "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
                }
              }
            },
              "scm": "git",
              "is_private": true
            },
              "changes": {
                "name": {
                  "new": "repository",
                  "old": "repository_name"
                },
                "website": {
                  "new": "http://www.example.com/",
                  "old": ""
                },
                "language": {
                  "new": "java",
                  "old": ""
                },
                "links": {
                  "new": {
                    "avatar": {
                      "href": "https://bitbucket.org/teamawesome/repository/avatar/32/"
                    },
                    "self": {
                      "href": "https://api.bitbucket.org/2.0/repositories/teamawesome/repository"
                    },
                    "html": {
                      "href": "https://bitbucket.org/teamawesome/repository"
                    }
                  },
                  "old": {
                    "avatar": {
                      "href": "https://bitbucket.org/teamawesome/repository_name/avatar/32/"
                    },
                    "self": {
                      "href": "https://api.bitbucket.org/2.0/repositories/teamawesome/repository_name"
                    },
                    "html": {
                      "href": "https://bitbucket.org/teamawesome/repository_name"
                    }
                  }
                },
                "description": {
                  "new": "This is a better description.",
                  "old": "This is a description."
                },
                "full_name": {
                  "new": "teamawesome/repository",
                  "old": "teamawesome/repository_name"
                }
              }
          }',
                'repo:transfer' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
},
  "previous_owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}
}',
            'repo:commit_comment_created' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "comment": {
   "id" : 17,
   "parent" : { "id":  16 },
   "content": {
     "raw": "Comment text",
     "html": "<p>Comment text</p>",
     "markup": "markdown"
   },
   "inline" : {
     "path" :  "path/to/file" ,
     "from" :  null ,
     "to" :  10
   },
   "created_on" :  "2015-04-06T16:52:29.982346+00:00" ,
   "updated_on" :  "2015-04-06T16:52:29.983730+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/comments/comment_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/comment_id"
    }
  }
}
,
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
},
  "commit": {
    "hash": "d3022fc0ca3d65c7f6654eea129d6bf0cf0ee08e"
  }
}',
            'repo:commit_status_created' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
},
  "commit_status": {
    "name": "Unit Tests (Python)",
    "description": "Build started",
    "state": "INPROGRESS",
    "key": "mybuildtool",
    "url": "https://my-build-tool.com/builds/MY-PROJECT/BUILD-777",
    "type": "build",
    "created_on": "2015-11-19T20:37:35.547563+00:00",
    "updated_on": "2015-11-19T20:37:35.547563+00:00",
    "links": {
      "commit": {
        "href": "http://api.bitbucket.org/2.0/repositories/tk/test/commit/9fec847784abb10b2fa567ee63b85bd238955d0e"
      },
      "self": {
        "href": "http://api.bitbucket.org/2.0/repositories/tk/test/commit/9fec847784abb10b2fa567ee63b85bd238955d0e/statuses/build/mybuildtool"
      }
    }
  }
}',
            'repo:commit_status_updated' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
},
  "commit_status": {
    "name": "Unit Tests (Python)",
    "description": "All tests passed",
    "state": "SUCCESSFUL",
    "key": "mybuildtool",
    "url": "https://my-build-tool.com/builds/MY-PROJECT/BUILD-777",
    "type": "build",
    "created_on": "2015-11-19T20:37:35.547563+00:00",
    "updated_on": "2015-11-19T20:37:35.547563+00:00",
    "links": {
      "commit": {
        "href": "http://api.bitbucket.org/2.0/repositories/tk/test/commit/9fec847784abb10b2fa567ee63b85bd238955d0e"
      },
      "self": {
        "href": "http://api.bitbucket.org/2.0/repositories/tk/test/commit/9fec847784abb10b2fa567ee63b85bd238955d0e/statuses/build/mybuildtool"
      }
    }
  }
}',
            'issue:created' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
},
 "issue": {
   "id" :  1 ,
   "component" :  "component" ,
   "title" :  "Issue title" ,
   "content" : {
     "raw" :  "Issue description" ,
     "html" :  "<p>Issue description</p>" ,
     "markup" :  "markdown"
   },
   "priority" :  "trivial|minor|major|critical|blocker" ,
   "state" :  "new|open|on hold|resolved|duplicate|invalid|wontfix|closed" ,
   "type" :  "bug|enhancement|proposal|task" ,
   "milestone" : {  "name" :  "milestone 1"  },
   "version" : {  "name" :  "version 1"  },
   "created_on" :  "2015-04-06T15:23:38.179678+00:00" ,
   "updated_on" :  "2015-04-06T15:23:38.179678+00:00" ,
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/issues/issue_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/issue_id"
    }
  }
}
}',
            'issue:updated' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
},
 "issue": {
   "id" :  1 ,
   "component" :  "component" ,
   "title" :  "Issue title" ,
   "content" : {
     "raw" :  "Issue description" ,
     "html" :  "<p>Issue description</p>" ,
     "markup" :  "markdown"
   },
   "priority" :  "trivial|minor|major|critical|blocker" ,
   "state" :  "new|open|on hold|resolved|duplicate|invalid|wontfix|closed" ,
   "type" :  "bug|enhancement|proposal|task" ,
   "milestone" : {  "name" :  "milestone 1"  },
   "version" : {  "name" :  "version 1"  },
   "created_on" :  "2015-04-06T15:23:38.179678+00:00" ,
   "updated_on" :  "2015-04-06T15:23:38.179678+00:00" ,
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/issues/issue_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/issue_id"
    }
  }
}, "changes": {
    "status": {
      "old": "open",
      "new": "on hold"
    },
    "comment": {
   "id" :  17 ,
   "parent" : {  "id" :  16  },
   "content" : {
     "raw" :  "Comment text" ,
     "html" :  "<p>Comment text</p>" ,
     "markup" :  "markdown"
   },
   "inline" : {
     "path" :  "path/to/file" ,
     "from" :  null ,
     "to" :  10
   },
   "created_on" :  "2015-04-06T16:52:29.982346+00:00" ,
   "updated_on" :  "2015-04-06T16:52:29.983730+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/comments/comment_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/comment_id"
    }
  }
}
}
}',
            'issue:comment_created' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
},
 "issue": {
   "id" :  1 ,
   "component" :  "component" ,
   "title" :  "Issue title" ,
   "content" : {
     "raw" :  "Issue description" ,
     "html" :  "<p>Issue description</p>" ,
     "markup" :  "markdown"
   },
   "priority" :  "trivial|minor|major|critical|blocker" ,
   "state" :  "new|open|on hold|resolved|duplicate|invalid|wontfix|closed" ,
   "type" :  "bug|enhancement|proposal|task" ,
   "milestone" : {  "name" :  "milestone 1"  },
   "version" : {  "name" :  "version 1"  },
   "created_on" :  "2015-04-06T15:23:38.179678+00:00" ,
   "updated_on" :  "2015-04-06T15:23:38.179678+00:00" ,
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/issues/issue_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/issue_id"
    }
  }
},
    "comment": {
   "id" :  17 ,
   "parent" : {  "id" :  16  },
   "content" : {
     "raw" :  "Comment text" ,
     "html" :  "<p>Comment text</p>" ,
     "markup" :  "markdown"
   },
   "inline" : {
     "path" :  "path/to/file" ,
     "from" :  null ,
     "to" :  10
   },
   "created_on" :  "2015-04-06T16:52:29.982346+00:00" ,
   "updated_on" :  "2015-04-06T16:52:29.983730+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/comments/comment_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/comment_id"
    }
  }
}
}',
            'pullrequest:created' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "pullrequest": {
   "id" :  1 ,
   "title" :  "Title of pull request" ,
   "description" :  "Description of pull request" ,
   "state" :  "OPEN|MERGED|DECLINED" ,
   "author" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "source" : {
     "branch" : {  "name" :  "branch2"  },
     "commit" : {  "hash" :  "d3022fc0ca3d"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "destination" : {
     "branch" : {  "name" :  "master"  },
     "commit" : {  "hash" :  "ce5965ddd289"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "merge_commit" : {  "hash" :  "764413d85e29"  },
   "participants" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "reviewers" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "close_source_branch" :  true ,
   "closed_by" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "reason" :  "reason for declining the PR (if applicable)" ,
   "created_on" :  "2015-04-06T15:23:38.179678+00:00" ,
   "updated_on" :  "2015-04-06T15:23:38.205705+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/pullrequests/pullrequest_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/pullrequest_id"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
}',
            'pullrequest:updated' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "pullrequest": {
   "id" :  1 ,
   "title" :  "Title of pull request" ,
   "description" :  "Description of pull request" ,
   "state" :  "OPEN|MERGED|DECLINED" ,
   "author" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "source" : {
     "branch" : {  "name" :  "branch2"  },
     "commit" : {  "hash" :  "d3022fc0ca3d"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "destination" : {
     "branch" : {  "name" :  "master"  },
     "commit" : {  "hash" :  "ce5965ddd289"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "merge_commit" : {  "hash" :  "764413d85e29"  },
   "participants" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "reviewers" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "close_source_branch" :  true ,
   "closed_by" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "reason" :  "reason for declining the PR (if applicable)" ,
   "created_on" :  "2015-04-06T15:23:38.179678+00:00" ,
   "updated_on" :  "2015-04-06T15:23:38.205705+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/pullrequests/pullrequest_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/pullrequest_id"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
}',
            'pullrequest:approved' => '
            {
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "pullrequest": {
   "id" :  1 ,
   "title" :  "Title of pull request" ,
   "description" :  "Description of pull request" ,
   "state" :  "OPEN|MERGED|DECLINED" ,
   "author" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "source" : {
     "branch" : {  "name" :  "branch2"  },
     "commit" : {  "hash" :  "d3022fc0ca3d"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "destination" : {
     "branch" : {  "name" :  "master"  },
     "commit" : {  "hash" :  "ce5965ddd289"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "merge_commit" : {  "hash" :  "764413d85e29"  },
   "participants" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "reviewers" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "close_source_branch" :  true ,
   "closed_by" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "reason" :  "reason for declining the PR (if applicable)" ,
   "created_on" :  "2015-04-06T15:23:38.179678+00:00" ,
   "updated_on" :  "2015-04-06T15:23:38.205705+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/pullrequests/pullrequest_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/pullrequest_id"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
},
"approval": {
    "date": "2015-04-06T16:34:59.195330+00:00",
    "user": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}
  }
}',
            'pullrequest:unapproved' => '
            {
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "pullrequest": {
   "id" :  1 ,
   "title" :  "Title of pull request" ,
   "description" :  "Description of pull request" ,
   "state" :  "OPEN|MERGED|DECLINED" ,
   "author" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "source" : {
     "branch" : {  "name" :  "branch2"  },
     "commit" : {  "hash" :  "d3022fc0ca3d"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "destination" : {
     "branch" : {  "name" :  "master"  },
     "commit" : {  "hash" :  "ce5965ddd289"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "merge_commit" : {  "hash" :  "764413d85e29"  },
   "participants" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "reviewers" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "close_source_branch" :  true ,
   "closed_by" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "reason" :  "reason for declining the PR (if applicable)" ,
   "created_on" :  "2015-04-06T15:23:38.179678+00:00" ,
   "updated_on" :  "2015-04-06T15:23:38.205705+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/pullrequests/pullrequest_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/pullrequest_id"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
},
"approval": {
    "date": "2015-04-06T16:34:59.195330+00:00",
    "user": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}
  }
}',
            'pullrequest:fulfilled' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "pullrequest": {
   "id" :  1 ,
   "title" :  "Title of pull request" ,
   "description" :  "Description of pull request" ,
   "state" :  "OPEN|MERGED|DECLINED" ,
   "author" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "source" : {
     "branch" : {  "name" :  "branch2"  },
     "commit" : {  "hash" :  "d3022fc0ca3d"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "destination" : {
     "branch" : {  "name" :  "master"  },
     "commit" : {  "hash" :  "ce5965ddd289"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "merge_commit" : {  "hash" :  "764413d85e29"  },
   "participants" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "reviewers" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "close_source_branch" :  true ,
   "closed_by" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "reason" :  "reason for declining the PR (if applicable)" ,
   "created_on" :  "2015-04-06T15:23:38.179678+00:00" ,
   "updated_on" :  "2015-04-06T15:23:38.205705+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/pullrequests/pullrequest_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/pullrequest_id"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
}',
            'pullrequest:rejected' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "pullrequest": {
   "id" :  1 ,
   "title" :  "Title of pull request" ,
   "description" :  "Description of pull request" ,
   "state" :  "OPEN|MERGED|DECLINED" ,
   "author" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "source" : {
     "branch" : {  "name" :  "branch2"  },
     "commit" : {  "hash" :  "d3022fc0ca3d"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "destination" : {
     "branch" : {  "name" :  "master"  },
     "commit" : {  "hash" :  "ce5965ddd289"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "merge_commit" : {  "hash" :  "764413d85e29"  },
   "participants" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "reviewers" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "close_source_branch" :  true ,
   "closed_by" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "reason" :  "reason for declining the PR (if applicable)" ,
   "created_on" :  "2015-04-06T15:23:38.179678+00:00" ,
   "updated_on" :  "2015-04-06T15:23:38.205705+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/pullrequests/pullrequest_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/pullrequest_id"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
}',
            'pullrequest:comment_created' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "pullrequest": {
   "id" :  1 ,
   "title" :  "Title of pull request" ,
   "description" :  "Description of pull request" ,
   "state" :  "OPEN|MERGED|DECLINED" ,
   "author" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "source" : {
     "branch" : {  "name" :  "branch2"  },
     "commit" : {  "hash" :  "d3022fc0ca3d"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "destination" : {
     "branch" : {  "name" :  "master"  },
     "commit" : {  "hash" :  "ce5965ddd289"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "merge_commit" : {  "hash" :  "764413d85e29"  },
   "participants" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "reviewers" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "close_source_branch" :  true ,
   "closed_by" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "reason" :  "reason for declining the PR (if applicable)" ,
   "created_on" :  "2015-04-06T15:23:38.179678+00:00" ,
   "updated_on" :  "2015-04-06T15:23:38.205705+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/pullrequests/pullrequest_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/pullrequest_id"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
},
"comment": {
   "id" :  17 ,
   "parent" : {  "id" :  16  },
   "content" : {
     "raw" :  "Comment text" ,
     "html" :  "<p>Comment text</p>" ,
     "markup" :  "markdown"
   },
   "inline" : {
     "path" :  "path/to/file" ,
     "from" :  null ,
     "to" :  10
   },
   "created_on" :  "2015-04-06T16:52:29.982346+00:00" ,
   "updated_on" :  "2015-04-06T16:52:29.983730+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/comments/comment_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/comment_id"
    }
  }
}
}',
            'pullrequest:comment_updated' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "pullrequest": {
   "id" :  1 ,
   "title" :  "Title of pull request" ,
   "description" :  "Description of pull request" ,
   "state" :  "OPEN|MERGED|DECLINED" ,
   "author" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "source" : {
     "branch" : {  "name" :  "branch2"  },
     "commit" : {  "hash" :  "d3022fc0ca3d"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "destination" : {
     "branch" : {  "name" :  "master"  },
     "commit" : {  "hash" :  "ce5965ddd289"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "merge_commit" : {  "hash" :  "764413d85e29"  },
   "participants" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "reviewers" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "close_source_branch" :  true ,
   "closed_by" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "reason" :  "reason for declining the PR (if applicable)" ,
   "created_on" :  "2015-04-06T15:23:38.179678+00:00" ,
   "updated_on" :  "2015-04-06T15:23:38.205705+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/pullrequests/pullrequest_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/pullrequest_id"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
},
"comment": {
   "id" :  17 ,
   "parent" : {  "id" :  16  },
   "content" : {
     "raw" :  "Comment text" ,
     "html" :  "<p>Comment text</p>" ,
     "markup" :  "markdown"
   },
   "inline" : {
     "path" :  "path/to/file" ,
     "from" :  null ,
     "to" :  10
   },
   "created_on" :  "2015-04-06T16:52:29.982346+00:00" ,
   "updated_on" :  "2015-04-06T16:52:29.983730+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/comments/comment_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/comment_id"
    }
  }
}
}',
            'pullrequest:comment_deleted' => '{
  "actor": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "pullrequest": {
   "id" :  1 ,
   "title" :  "Title of pull request" ,
   "description" :  "Description of pull request" ,
   "state" :  "OPEN|MERGED|DECLINED" ,
   "author" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "source" : {
     "branch" : {  "name" :  "branch2"  },
     "commit" : {  "hash" :  "d3022fc0ca3d"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "destination" : {
     "branch" : {  "name" :  "master"  },
     "commit" : {  "hash" :  "ce5965ddd289"  },
     "repository" : {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
}
   },
   "merge_commit" : {  "hash" :  "764413d85e29"  },
   "participants" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "reviewers" : [{
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
}],
   "close_source_branch" :  true ,
   "closed_by" : {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
   "reason" :  "reason for declining the PR (if applicable)" ,
   "created_on" :  "2015-04-06T15:23:38.179678+00:00" ,
   "updated_on" :  "2015-04-06T15:23:38.205705+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/pullrequests/pullrequest_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/pullrequest_id"
    }
  }
},
  "repository": {
  "type": "repository",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/repositories/bitbucket/bitbucket"
    },
    "html": {
      "href": "https://api.bitbucket.org/bitbucket/bitbucket"
    },
    "avatar": {
      "href": "https://api-staging-assetroot.s3.amazonaws.com/c/photos/2014/Aug/01/bitbucket-logo-2629490769-3_avatar.png"
    }
  },
  "uuid": "{673a6070-3421-46c9-9d48-90745f7bfe8e}",
  "project": {
  "type": "project",
  "project": "Untitled project",
  "uuid": "{3b7898dc-6891-4225-ae60-24613bb83080}",
  "links": {
    "html": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj"
    },
    "avatar": {
      "href": "https://bitbucket.org/account/user/teamawesome/projects/proj/avatar/32"
    }
  },
  "key": "proj"
},
  "full_name": "team_name/repo_name",
  "name": "repo_name",
  "website": "https://mywebsite.com/",
  "owner": {
  "type": "user",
  "username": "emmap1",
  "display_name": "Emma",
  "uuid": "{a54f16da-24e9-4d7f-a3a7-b1ba2cd98aa3}",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/users/emmap1"
    },
    "html": {
      "href": "https://api.bitbucket.org/emmap1"
    },
    "avatar": {
      "href": "https://bitbucket-api-assetroot.s3.amazonaws.com/c/photos/2015/Feb/26/3613917261-0-emmap1-avatar_avatar.png"
    }
  }
},
  "scm": "git",
  "is_private": true
},
"comment": {
   "id" :  17 ,
   "parent" : {  "id" :  16  },
   "content" : {
     "raw" :  "Comment text" ,
     "html" :  "<p>Comment text</p>" ,
     "markup" :  "markdown"
   },
   "inline" : {
     "path" :  "path/to/file" ,
     "from" :  null ,
     "to" :  10
   },
   "created_on" :  "2015-04-06T16:52:29.982346+00:00" ,
   "updated_on" :  "2015-04-06T16:52:29.983730+00:00",
  "links": {
    "self": {
      "href": "https://api.bitbucket.org/api/2.0/comments/comment_id"
    },
    "html": {
      "href": "https://api.bitbucket.org/comment_id"
    }
  }
}
}'
        ];
    }
}
