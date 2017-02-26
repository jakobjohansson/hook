# How to
In the root folder, create a .php file which will be linked to your webhook. An index.php file is fine for this. For starters, you will need to import the API into the file you just created:
```php
function __autoload($class) {
    require_once("api/$class.php");
}
```
## Declaring the hook
Now you need to initiate the object, `$hook = new Hook();`, or if you are using it for a more narrowed down purpose like GitHub, `$hook = new Hook("GitHub", $secret)`.
If you a secret, or authorization key, you can provide this in the `$secret` holder, and the hook will authorize automatically for you.

## Accessing the data
To access the data, you can now use `$hook->getPayload()` to access the object.

## Check for API messages
For troubleshooting, there is a handy function `$hook->getApiMessages()`, which will return an array with error messages from the different steps. This is a good practice to be using in your own file:
```php
foreach ($hook->getApiMessages() as $message) {
    echo "$message <br/>";
}
```