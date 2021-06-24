<h1 align="center">Mossengine/Helper</h1>

<p align="center">
    <strong>A PHP library for calling many different helpers from a single point.</strong>
</p>

<p align="center">
    <a href="https://github.com/Mossengine/Helper"><img src="https://badgen.net/packagist/name/Mossengine/Helper" alt="Source Code"></a>
    <a href="https://packagist.org/packages/Mossengine/Helper"><img src="https://badgen.net/packagist/v/Mossengine/Helper" alt="Download Package"></a>
    <a href="https://php.net"><img src="https://badgen.net/packagist/php/Mossengine/Helper" alt="PHP Programming Language"></a>
    <img src="https://badgen.net/circleci/github/Mossengine/Helper/master?icon=circleci" alt="Build Status">
    <a href="https://codecov.io/github/Mossengine/Helper"><img src="https://badgen.net/codecov/c/github/Mossengine/Helper/master?icon=codecov" alt="Codecov Code Coverage"></a>
    <a href="https://github.com/Mossengine/Helper/blob/master/LICENSE"><img src="https://badgen.net/packagist/license/Mossengine/Helper" alt="Read License"></a>
    <a href="https://packagist.org/packages/Mossengine/Helper/stats"><img src="https://badgen.net/packagist/dt/Mossengine/Helper" alt="Package downloads on Packagist"></a>
</p>


## Installation

### Using composer to install
```
$ composer require mossengine/helper
```

### Adding to package.json
```json
{
    "require": {
        "mossengine/helper": "~1.0.0"
    }
}
```

## Usage

### Call helper method on a specific helper class 
```php
// Require the autoloader, normal composer stuff
require 'vendor/autoload.php';

// Call the isAssociative method on the Arrays helper class
$result = Mossengine\Helper::Arrays()::isAssociative(['a' => 'A']);
// This results in true because this particular helper class method checks if the passed in argument is of type associative array.

// Call the is method on the Statements helper class
$result = Mossengine\Helper::Statements()::is([55, '=>', 40]);
// This results in true because 55 is greater or equal to 40
```

## Documentation
Read the <a href="/docs/readme.md">docs</a> for more details on Helper and how to call and extend with your own helper classes and methods
