# Project Zipper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/abdelhamiderrahmouni/project-zipper.svg?style=flat-square)](https://packagist.org/packages/abdelhamiderrahmouni/project-zipper)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/abdelhamiderrahmouni/project-zipper/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/abdelhamiderrahmouni/project-zipper/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/abdelhamiderrahmouni/project-zipper/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/abdelhamiderrahmouni/project-zipper/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/abdelhamiderrahmouni/project-zipper.svg?style=flat-square)](https://packagist.org/packages/abdelhamiderrahmouni/project-zipper)

Automate your Laravel project compression with a simple command.

## Installation

You can install the package via composer:

```bash
composer require abdelhamiderrahmouni/project-zipper
```

You can publish and run the migrations with:

You can publish the config file with:

```bash
php artisan vendor:publish --tag="project-zipper-config"
```

This is the contents of the published config file:

```php
return [

];
```

## Usage

```php
$zipper = new AbdelhamidErrahmouni\Zipper();
echo $zipper->echoPhrase('Hello, AbdelhamidErrahmouni!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Abdelhamid Errahmouni](https://github.com/abdelhamiderrahmouni)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
