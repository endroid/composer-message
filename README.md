# Composer Message

*By [endroid](https://endroid.nl/)*

[![Latest Stable Version](http://img.shields.io/packagist/v/endroid/composer-message.svg)](https://packagist.org/packages/endroid/composer-message)
[![Build Status](http://img.shields.io/travis/endroid/composer-message.svg)](http://travis-ci.org/endroid/composer-message)
[![Total Downloads](http://img.shields.io/packagist/dt/endroid/composer-message.svg)](https://packagist.org/packages/endroid/composer-message)
[![Monthly Downloads](http://img.shields.io/packagist/dm/endroid/composer-message.svg)](https://packagist.org/packages/endroid/composer-message)
[![License](http://img.shields.io/packagist/l/endroid/composer-message.svg)](https://packagist.org/packages/endroid/composer-message)



## Installation

``` bash
$ composer require endroid/composer-message
```

## Usage

Define the messages inside your composer.json like this.

```
"extra": {
    "endroid": {
        "message": [
            { "content": "This is a warning", "type": "warning" },
            { "content": "This is some info", "type": "info" }
        ]
    }
}
```

## Versioning

Version numbers follow the MAJOR.MINOR.PATCH scheme. Backwards compatible
changes will be kept to a minimum but be aware that these can occur. Lock
your dependencies for production and test your code when upgrading.

## License

This bundle is under the MIT license. For the full copyright and license
information please view the LICENSE file that was distributed with this source code.
