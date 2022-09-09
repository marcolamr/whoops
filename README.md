# Whoops Library

[![Maintainer](http://img.shields.io/badge/maintainer-@marcolamr-blue.svg?style=flat-square)](https://github.com/marcolamr)
[![Source Code](http://img.shields.io/badge/source-marcolamr/whoops-blue.svg?style=flat-square)](https://github.com/marcolamr/whoops)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/marcolamr/whoops.svg?style=flat-square)](https://packagist.org/packages/marcolamr/whoops)
[![Latest Version](https://img.shields.io/github/release/marcolamr/whoops.svg?style=flat-square)](https://github.com/marcolamr/whoops/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/marcolamr/whoops.svg?style=flat-square)](https://scrutinizer-ci.com/g/marcolamr/whoops)
[![Quality Score](https://img.shields.io/scrutinizer/g/marcolamr/whoops.svg?style=flat-square)](https://scrutinizer-ci.com/g/marcolamr/whoops)
[![Total Downloads](https://img.shields.io/packagist/dt/marcolamr/whoops.svg?style=flat-square)](https://packagist.org/packages/marcolamr/whoops)

###### Basic abstraction from [filp/whoops] https://github.com/filp/whoops)

Abstração básica do [filp/whoops] https://github.com/filp/whoops)

### Highlights

- Simple installation (Instalação simples)

## Installation

Whoops is available via Composer:

```bash
"marcolamr/whoops": "^1.0"
```

or run

```bash
composer require marcolamr/whoops
```

## Documentation

#### How to use:

```php
<?php

use MarcolaMr\Whoops\ErrorHandler;

require __DIR__ . "/vendor/autoload.php";

new ErrorHandler();

throw new Exception("Test Exception");
```
