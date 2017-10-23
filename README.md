# hook [![Build Status](https://travis-ci.org/jakobjohansson/hook.svg?branch=master)](https://travis-ci.org/jakobjohansson/hook) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/aec1b5740a6b43bd8754ae2bfad56bc7)](https://www.codacy.com/app/jakobjohansson2/hook?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=jakobjohansson/hook&amp;utm_campaign=Badge_Grade) [![StyleCI](https://styleci.io/repos/83210515/shield?branch=master&style=flat)](https://styleci.io/repos/83210515)

A webhook API I'm working on to streamline my processes. This is a purely hobbyist project and is in no way a claim to be the most efficient or smartest way to handle webhooks.

## Documentation
### Installing
Clone the repository:
```
git clone https://github.com/jakobjohansson/hook.git
```
Generate autoloader with composer:
```
composer dump-autoload --optimize
```

### GitHub integration
To set up the API for GitHub, first we need to enable the webhook in our repository. This can be done in the repository settings, where we will have to provide the URL for the webhook, then we will configure what events will be fired. We also have an option to set a secret token, to protect our API from invaders. If we don't set a secret, we will skip the second parameter down below. After we have done that, we will tell the API to listen to GitHub events:
```php
$hook = Hook\Hook::GitHub($secret);
```
We can now reach our service with `$hook`. Now it's time to tell the hook which events we want to listen to:
```php
$hook->listen(['push', 'release', 'issues']);
```
Now we have told the hook to listen to the **push**, **release** and **issues** events. If we dont specify an argument, the hook will listen to **all** events.

When an event is successfully provided, we can access the event class through the `$hook->output` property. Every event class can be echoed, looking something like this:

```html
jakobjohansson just pushed 1 commits to <a href='https://github.com/jakobjohansson/hook/compare/39d5ea25f9fb...4891054ffb83'>jakobjohansson/hook</a>.
```

#### Providing a callback
Say we want some different functions to execute for each type of events. All we then have to do is to change our listen into a `$key => $value` structure, pointing the `$value` to our function:
```php
function dumpPushOnly($content) {
    var_dump($content);
}

$hook->listen(['release', 'issues', 'push' => 'dumpPushOnly']);
```
The **release** and **issues** events can be handled with `$hook->output` as normal. The **push** however, will be sent automatically to our assigned function.

#### Currently supported listeners
Right now these events can be listened to:
- create, delete, fork, gollum, issue_comment, issues, push, commit_comment, label, member, membership, milestone, organization, org_block, page_build, project, project_card, project_column, public, pull_request, pull_request_review, pull_request_review_comment, release, repository, team, team_add, watch.

### GitLab service
The GitLab service works in the same fashion as the GitHub service, only there are fewer events to choose from and they have a different name pattern. Start by declaring the hook and an optional secret:
```php
$hook = Hook\Hook::GitLab($secret);
```
Now it's just a matter of setting the listeners once again:
```php
$hook->listen(['Push Hook', 'Merge Request Hook']);
```
You can now provide callback functions as usual.

#### Currently supported listeners
All current GitLab hooks are supported, including:
- Push Hook, Tag Push Hook, Issue Hook , Note Hook, Merge Request Hook, Wiki Page Hook, Pipeline Hook, Build Hook.

### Troubleshooting
The hook method `getApiMessages()` will return an array with errors from the current request.
```php
foreach ($hook->getApiMessages() as $message) {
    echo "$message <br/>";
}
```
