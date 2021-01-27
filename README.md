# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jmurphy/laravel-pascal.svg?style=flat-square)](https://packagist.org/packages/jmurphy/laravel-pascal)
[![Build Status](https://img.shields.io/travis/jmurphy/laravel-pascal/master.svg?style=flat-square)](https://travis-ci.org/jmurphy/laravel-pascal)
[![Quality Score](https://img.shields.io/scrutinizer/g/jmurphy/laravel-pascal.svg?style=flat-square)](https://scrutinizer-ci.com/g/jmurphy/laravel-pascal)
[![Total Downloads](https://img.shields.io/packagist/dt/jmurphy/laravel-pascal.svg?style=flat-square)](https://packagist.org/packages/jmurphy/laravel-pascal)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require jmurphy/laravel-pascal
```

## Usage

``` php
use Jmurphy\LaravelPascal\Concerns\PascalCase;

class ExampleTable extends Model
{
    use PascalCase;
    
    protected $table = 'ExampleTable';
    protected $primaryKey = 'ExampleID';
}
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email contact@jmurphy.us instead of using the issue tracker.

## Credits

- [Jay Murphy](https://github.com/jmurphy45)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
