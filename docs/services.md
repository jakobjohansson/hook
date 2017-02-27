# Services
The API can be powerful if used for the integrated services like GitHub and GitLab. This is because of the sub classes for each event fired. In this article I will go through the steps you need to make full use of the API services.

## GitHub service
To set up the API for GitHub, first we need to enable the webhook in our repository. This can be done in settings, where we will have to provide the URL for the webhook (our php-file), then we will configure what events will be fired. We also have an option to set a secret token, to protect our API from invaders. If we don't set a secret, we will skip the second parameter down below. After we have done that, we will tell the API to listen to GitHub events:
```php
$hook = new Hook("GitHub", $secret);
```
We can now reach our service with `$hook->git;`. Now it's time to tell the API which events we want to listen to:
```php
$hook->git->listen(['push', 'release', 'issues']);
```
Now we have told the API to listen to the **push**, **release** and **issues** events. If we skip the listen step, the API will listen to **all** events.
