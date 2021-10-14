# Countries helper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/eliseekn/countries-helper.svg?style=flat-square)](https://packagist.org/packages/eliseekn/countries-helper)
[![Total Downloads](https://img.shields.io/packagist/dt/eliseekn/countries-helper.svg?style=flat-square)](https://packagist.org/packages/eliseekn/countries-helper)

Helper for countries laravel package

## Installation

You can install the package via composer:

```bash
composer require eliseekn/countries-helper
```

## Usage

```php
//In your controller
$countries = CountriesHelper::getAll();

//In your blade file
@foreach($countries as $country)
@if (!is_null($country))
    @foreach($country as $key => $value)<option value="{{ $key }}">{{ $value }}</option>@endforeach
@endif
@endforeach
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email eliseekn@gmail.com instead of using the issue tracker.

## Credits

-   [N'Guessan Kouadio Elisée](https://github.com/eliseekn)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
