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

## About
Helper functions are an important part of any project, however, depending on the implementation they can come at a small or great cost to system resources such as memory.

When you have an included functions file full of functions that you use throughout the project but not all at any one time, the cost you have here is memory allocation to store the functions ready for calling... Other practices with using Helper classes with smaller sets of dedicated static methods are an improvement, but you're still using memory to store those methods that are not needed.

This package allows you to call specific functions under certain categories without needing to load into memory anything more than what you need, it uses a dynamic loading style and also specifically designed helper classes for each specific method so that we only need to load what's needed.

A comparison of memory allocation between a full class of helper methods and this individual loading solution, the results was a 20KB allocation of memory vs 6KB. Larger sets of helper class methods can expect memory allocation sizes higher than 20KB... especially for more complex helper methods with more than a few lines of code.

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

// Call the Test method on the Test helper class
$result = Mossengine\Helper::Test()::Test();
```

## Helpers
There are other helper classes you can use with this helper library

[Mossengine/HelpersArray](https://github.com/Mossengine/HelpersArray)
A library of array based helper methods to manipulate and analyse array structures.

[Mossengine/HelpersStatement](https://github.com/Mossengine/HelpersStatement)
A library of statement based helper methods to compare and evaluate variable structures against each other.

## Documentation
Read the <a href="/docs/readme.md">docs</a> for more details on Helper and how to call and extend with your own helper classes and methods
