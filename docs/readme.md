<h1 align="center">Helper: Documentation</h1>

## Custom Helpers
You can add more helpers by creating your own classes or packages based on the same namespace as the helpers in this package.

### Namespace
All helpers are namespaced using the following template `Mossengine\Helpers\_{type}\_{method}`
- `type` represents the category for your helper, is it an `Array`, `Statement`, `Integer` etc... This is also the first part of the Helper class for execution so what ever you choose becomes part of the helper call.
- `method` is both the class and method on the class name, essentially the helper it's self so be sure to pick something appropriate.

### Class
All Helper classes need to provide a static method named the same as the class as the entry static call method.
```php
<?php namespace Mossengine\Helpers\_Custom;

class _Helper
{

    public static function _Helper(...$arguments) {
        return $arguments;
    }

}
```
You can have any kind of other methods, fields etc... within the class but do not use the `_` prefix on any of them as this may get used in future dependency needs.
