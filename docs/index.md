# How to
In the root folder, create a .php file which will be linked to your webhook. An index.php file is fine for this. For starters, you will need to import the API into the file you just created:
```php
function __autoload($class) {
    $class = 'api/' . str_replace('\\', '/', $class) . '.php';
    require_once($class);
}
```
## Declaring the hook
Now you need to initiate the object, `$hook = new Hook();`, or if you are using it for a more narrowed down purpose like GitHub, `$hook = Hook::service("GitHub", $secret)`.
If you use a secret, or authorization key, you can provide this in the `$secret` holder, and the hook will authorize automatically for you.

## Check for API messages
For troubleshooting, there is a handy function `$hook->getApiMessages()`, which will return an array with error messages from the different steps. This is a good practice to be using in your own file:
```php
foreach ($hook->getApiMessages() as $message) {
    echo "$message <br/>";
}
```

[Part 2 - Services](services.md)
