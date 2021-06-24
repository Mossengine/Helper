<h1 align="center">Helper: Documentation</h1>

## Statements

### Usage
```php
Mossengine\Helper::Statements()::{method}({...arguments});
```
`{method}` Is the name of the helper method within the helper class
`{...arguments}` Is the relevant arguments you pass into the helper method

### Methods

#### is
This is a comparison between argument one and argument three using argument two as the operator, This returns a boolean indicated result.
```php
Mossengine\Helper::Statements()::is([2, '>', 1]);
```

#### isAlwaysTrue
Returns a true value regardless of arguments
```php
Mossengine\Helper::Statements()::isAlwaysTrue();
```

#### isAlwaysFalse
Returns a false value regardless of arguments
```php
Mossengine\Helper::Statements()::isAlwaysFalse();
```

#### isLike
This is a like comparison between argument one and argument two, This returns a boolean indicated result.
```php
Mossengine\Helper::Arrays()::isLike(1, '1');
```

#### isNotLike
This is a not like comparison between argument one and argument two, This returns a boolean indicated result.
```php
Mossengine\Helper::Arrays()::isNotLike(1, '2');
```

#### isSame
This is a exact comparison between argument one and argument two, This returns a boolean indicated result.
```php
Mossengine\Helper::Arrays()::isSame(1, 1);
```

#### isNotSame
This is a not exact comparison between argument one and argument two, This returns a boolean indicated result.
```php
Mossengine\Helper::Arrays()::isNotSame(1, 2);
```

#### isMore
This is a greater than comparison between argument one and argument two, This returns a boolean indicated result.
```php
Mossengine\Helper::Arrays()::isMore(2, 1);
```

#### isMoreOrSame
This is a greater than or same comparison between argument one and argument two, This returns a boolean indicated result.
```php
Mossengine\Helper::Arrays()::isMoreOrSame(2, 2);
```

#### isLess
This is a less than comparison between argument one and argument two, This returns a boolean indicated result.
```php
Mossengine\Helper::Arrays()::isLess(1, 2);
```

#### isLessOrSame
This is a less than or same comparison between argument one and argument two, This returns a boolean indicated result.
```php
Mossengine\Helper::Arrays()::isLessOrSame(2, 2);
```
