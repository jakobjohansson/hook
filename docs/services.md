# Services
The API can be powerful if used with the integrated services like GitHub and GitLab. This is because of the sub classes for each event fired. In this article I will go through the steps you need to make full use of the API services.

## GitHub service
To set up the API for GitHub, first we need to enable the webhook in our repository. This can be done in settings, where we will have to provide the URL for the webhook (our php-file), then we will configure what events will be fired. We also have an option to set a secret token, to protect our API from invaders. If we don't set a secret, we will skip the second parameter down below. After we have done that, we will tell the API to listen to GitHub events:
```php
$hook = Hook::service("GitHub", $secret);
```
We can now reach our service with `$hook`. Now it's time to tell the API which events we want to listen to:
```php
$hook->listen(['push', 'release', 'issues']);
```
Now we have told the API to listen to the **push**, **release** and **issues** events. If we leave the listen array empty, the API will listen to **all** events. When an event is incoming, the hook will check it and reassign it to a sub class like GitPushEvent, GitIssuesEvent, etc. That object will be linked to `$hook->output`, which when echoed will return a message looking something like this:
```html
jakobjohansson just pushed 1 commits to <a href='https://github.com/jakobjohansson/webhook-api/compare/39d5ea25f9fb...4891054ffb83'>jakobjohansson/webhook-api</a>.
```
We can now use the `$hook->output` variable for whatever purpose we choose.

### Providing a callback
Say we want some different functions to execute for each type of events. All we then have to do is to change our listen into a `$key => $value` structure, pointing the `$value` to our function:
```php
function dumpPushOnly($content) {
    var_dump($content);
}

$hook->listen(['release', 'issues', 'push' => 'dumpPushOnly']);
```
The **release** and **issues** events can be handled with `$hook->output` as normal. The **push** however, will be sent automatically to our assigned function.

### Currently supported listeners
Right now these events can be listened to:
- create, delete, fork, gollum, issue_comment, issues, push, commit_comment, label, member, membership, milestone, organization, org_block, page_build, project, project_card, project_column, public, pull_request, pull_request_review, pull_request_review_comment, release, repository, team, team_add, watch.
