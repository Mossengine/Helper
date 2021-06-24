<h1 align="center">Helper: Documentation</h1>

## Arrays

### Usage
```php
Mossengine\Helper::Arrays()::{method}({...arguments});
```
`{method}` Is the name of the helper method within the helper class
`{...arguments}` Is the relevant arguments you pass into the helper method

### Methods

#### isAssociative
evaluates the first argument for being an associative array and returns a boolean indicated response.
```php
Mossengine\Helper::Arrays()::isAssociative(['a' => 'A']);
```

#### has
checks the first argument as an array to verify the second parameter as a key exists within the array and returns a boolean indicator response.
note: this supports dot notation key paths.
```php
Mossengine\Helper::Arrays()::has(['a' => 'A', 'a']);
```

#### get
Retruns the relative value at the second argument's key or uses the third argument as a default.
note: this supports dot notation key paths.
```php
Mossengine\Helper::Arrays()::get(['a' => 'A'], 'b', 'B');
```

#### set
Sets the third agrument value into the first argument's array at the second argument's key.
note: this supports dot notation key paths.
note: the first argument must be a defined variable.
```php
$array = ['a' => 'A'];
Mossengine\Helper::Arrays()::set($array, 'b', 'B');
```

#### forget
unsets a key from the first argument using the second argument as the indicated key.
note: this supports dot notation key paths.
note: the first argument must be a defined variable.
```php
$array = ['a' => 'A'];
Mossengine\Helper::Arrays()::forget($array, 'a');
```

#### every
Iterates over the second argument array using the first argument as a callable that must return a boolean like value, any non-true return will stop the iterator and return a false indicator result.
```php
Mossengine\Helper::Arrays()::every(function($value) { return $value > 0; }, ['a' => 1,'b' => 2,'c' => 3]);
```

#### some
Iterates over the second argument array using the first argument as a callable that must return a boolean like value, any true return will stop the iterator and return a true indicator result.
```php
Mossengine\Helper::Arrays()::some(function($value) { return $value > 0; }, ['a' => 0,'b' => 2,'c' => 3]);
```

#### firstKey
Returns the first key in the first argument's array
```php
Mossengine\Helper::Arrays()::firstKey(['a' => 'A', 'b' => 'B', 'c' => 'C']);
```

#### nthKey
Returns the key at the nth position in the first argument's array
```php
Mossengine\Helper::Arrays()::nthKey(['a' => 'A', 'b' => 'B', 'c' => 'C']);
```

#### lastKey
Returns the last key in the first argument's array
```php
Mossengine\Helper::Arrays()::lastKey(['a' => 'A', 'b' => 'B', 'c' => 'C']);
```

#### firstValue
Returns the first value in the first argument's array
```php
Mossengine\Helper::Arrays()::firstValue(['a' => 'A', 'b' => 'B', 'c' => 'C']);
```

#### nthValue
Returns the value at the nth position in the first argument's array
```php
Mossengine\Helper::Arrays()::nthValue(['a' => 'A', 'b' => 'B', 'c' => 'C']);
```

#### lastValue
Returns the last value in the first argument's array
```php
Mossengine\Helper::Arrays()::lastValue(['a' => 'A', 'b' => 'B', 'c' => 'C']);
```
