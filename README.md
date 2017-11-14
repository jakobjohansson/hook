# What is this?
Hook is simply a library to quickly set up webhook endpoints from various git services, for whatever purpose. It provides an elegant API for GitHub, GitLab and BitBucket. Out of the box, standard messages are provided for all events, with the ability to customize individual callbacks.

# Documentation
Install through composer:
```bash
$ composer require jakobjohansson/hook
```

## Receive webhooks from GitHub
Set up the webhook:
```php
$hook = Hook\Hook::GitHub();
```
If you chose to use an authentication token for your webhook, simply provide it as an argument:
```php
$hook = Hook\Hook::GitHub('authentication-token');
```
Tell the hook which events to listen for:
```php
$hook = Hook\Hook::GitHub();
$hook->listen(['push', 'issue']);
```
If you wish to listen to all events, simply don't provide an argument at all.

#### What events are available?
The [GitHub documentation](https://developer.github.com/v3/activity/events/types/) provides a full list of events available.

### Get some output
Every registered event will be delegated down to its responsible handler. Now you can get a standardized message from the `output` property.
```php
$hook = Hook\Hook::GitHub();
$hook->listen(['push', 'issue']);

echo $hook->output;
```
For a push event, this would print something like this:
```html
jakobjohansson just pushed 1 commits to <a href='https://github.com/jakobjohansson/hook/compare/39d5ea25f9fb...4891054ffb83'>jakobjohansson/hook</a>.
 ```

### Providing callbacks
If you wish to do something more complex than printing a message, you can provide a callback to your event:
```php
$hook = Hook\Hook::GitHub();
$hook->listen(['push', 'issue' => 'issueCallback']);

function issueCallback($event) {
    // do something with $event
}
```

### Error messages
`$hook->errors` provides an array for troubleshooting or logging when something went wrong, for example when an invalid event was entered, an authentication token didn't match or a callback was missing.

## Receive webhooks from GitLab and BitBucket
The process is pretty much the same, only with different event labels, which can be found [here](https://docs.gitlab.com/ce/user/project/integrations/webhooks.html#events) for GitLab and [here](https://confluence.atlassian.com/bitbucket/event-payloads-740262817.html) for BitBucket.

Of course, also switch the hook method to `Hook\Hook::GitLab()` or `Hook\Hook::BitBucket()`.

### Observe when using BitBucket
BitBucket does currently not support authentication tokens in their webhooks.

# License
Hook is licensed under the [MIT License](https://github.com/jakobjohansson/hook/blob/master/LICENSE.txt).
