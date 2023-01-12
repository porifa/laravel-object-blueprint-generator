

# Laravel Object Blue Generator (Like Actions, Services, Helpers, Enums, Contracts/Interfaces, Concerns/Traits)

[![Stable Version](https://img.shields.io/packagist/v/porifa/laravel-object-blueprint-generator.svg?style=flat)](https://packagist.org/packages/porifa/laravel-object-blueprint-generator)
[![GitHub Tests Action Status](<https://img.shields.io/github/workflow/status/porifa/laravel-object-blueprint-generator/pest?label=Tests%20(Pest)>)](https://github.com/porifa/laravel-object-blueprint-generator/actions?query=workflow%3Apest+branch%3Amain)
[![GitHub Code Style Action Status](<https://img.shields.io/github/workflow/status/porifa/laravel-object-blueprint-generator/Pint?label=Code%20Style%20(Pint)>)](https://github.com/porifa/laravel-object-blueprint-generator/actions?query=workflow%3A"Pint"+branch%3Amain)

<!-- [![StyleCI](https://github.styleci.io/repos/556416263/shield?style=flat&branch=main)](https://github.styleci.io/repos/556416263?branch=main) -->
<!-- [![Quality Score](https://img.shields.io/scrutinizer/g/porifa/laravel-object-blueprint-generator.svg?style=flat)](https://scrutinizer-ci.com/g/porifa/laravel-object-blueprint-generator) -->

[![Downloads](https://img.shields.io/packagist/dt/porifa/laravel-object-blueprint-generator.svg?style=flat)](https://packagist.org/packages/porifa/laravel-object-blueprint-generator)
[![License](https://img.shields.io/packagist/l/porifa/laravel-object-blueprint-generator.svg?style=flat)](https://packagist.org/packages/porifa/laravel-object-blueprint-generator)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require porifa/laravel-object-blueprint-generator
```

You can publish the migrations with:

```bash
php artisan vendor:publish --tag="laravel-object-blueprint-generator-migrations"
```

Now run the migrations with:

```bash
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-object-blueprint-generator-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-object-blueprint-generator-views"
```

## Usage

```php
$objectBlueprintGenerator = new Porifa\ObjectBlueprintGenerator();
echo $objectBlueprintGenerator->echoPhrase('Hello, Porifa!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/porifa/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Aamir Sohail KmAs](https://github.com/AamirSohailKmAs)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
