# A curated library to handle locale in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/macmotp/countries.svg)](https://packagist.org/packages/macmotp/countries)
[![Total Downloads](https://img.shields.io/packagist/dt/macmotp/countries.svg)](https://packagist.org/packages/macmotp/countries)

**Simple and light PHP library that handles Countries, Languages, and Timezones**

Useful for any application that needs localization.

## Requirements
- PHP >= 8.2

## Installation

Install the package via composer:

```bash
composer require macmotp/locale
```

## Usage

### Create Country objects
``` php
use Macmotp\Country;

// Create the object
$countryCode = Country::US; // Use alpha2 ISO code
$country = new Country($countryCode);

// equivalent to: 
// $country = Country::make($countryCode);

echo $country->toArray();

// [
//    'continent' => 'North America',
//    'name' => 'United States of America',
//    'capital' => 'Washington DC',
//    'code' => 'US',
//    'alpha3_code' => 'USA',
//    'dial_code' => '+1',
//    'tld' => '.us',
//    'date_format' => 'm-d-Y',
//    'default_currency_code' => 'USD',
//    'default_timezone' => 'America/New_York',
//    'default_language' => 'en',
//    'currencies' => ['USD'],
//    'timezones' => ['America/New_York', ...],
//    'languages' => ['en', ...],
// ]

```
### List of basic dynamic methods
- `getContinent()`: it returns the continent;
- `getName()`: it returns the name;
- `getCapital()`: it returns the capital;
- `getCode()`: it returns the country code (alpha2);
- `getAlpha3Code()`: it returns the country code (alpha3);
- `getDialCode()`: it returns the dial code;
- `getTld()`: it returns the internet tld;
- `getDateFormat()`: it returns the date format;
- `getDefaultCurrency()`: it returns the default currency;
- `getDefaultTimezone()`: it returns the default timezone;
- `getDefaultLanguage()`: it returns the default locale language;
- `toArray()`: it returns the object into array;

``` php
// Example
use Macmotp\Country;

$country = new Country(Country::US);

echo $country->getDefaultCurrency();
// (string) USD

```

### List of advanced dynamic methods
- `getCurrencies()`: it returns a Collection with all the currencies adopted in that country;
- `getTimezones()`: it returns a Collection with all the timezones applied in that country;
- `getLanguages()`: it returns a Collection with all the languages used in that country;

``` php
// Example
use Macmotp\Country;

$country = new Country(Country::US);

echo $country->getDefaultCurrency();
// (string) USD

```

### List of Countries in the package
``` php
use Macmotp\Country;

$list = Country::all();
// it returns a Collection with all countries
```

### Filter Countries by property
- `withCurrency($currencyCode)`: it returns a Collection with all the currencies adopted in that country;
- `speaking($language)`: it returns a Collection with all the countries speaking a specific language;
- `ofContinent($continent)`: it returns a Collection with all the countries that belong to a continent;

``` php
// Examples
use Macmotp\Continent;
use Macmotp\Country;
use Macmotp\Language;

echo Country::all()->withCurrency('USD');
// (Collection) [
//    [
//       'continent' => 'North America',
//       'name' => 'United States of America',
//       'code' => 'US',
//       ...
//    ],
//    [
//       'continent' => 'North America',
//       'name' => 'El Salvador',
//       'code' => 'ES',
//       ...
//    ],
//    ...
// ]

$list = Country::all()->speaking(Language::ENGLISH);
// it returns a Collection with a list of all countries using english language
```

__These methods can be chained, for example: `Country::all()->ofContinent(Continent::EUROPE)->speaking(Language::ENGLISH);`__

#### Supported Locales (in order of locale code)
- Language::ARABIC = 'ar';
- Language::GERMAN = 'de';
- Language::ENGLISH = 'en';
- Language::SPANISH = 'es';
- Language::FRENCH = 'fr';
- Language::ITALIAN = 'it';
- Language::JAPANESE = 'ja';
- Language::KOREAN = 'ko';
- Language::DUTCH = 'nl';
- Language::PORTUGUESE = 'pt';
- Language::CHINESE = 'zh';

## Localization
In addition to the default functions, it's possible to localize the response:
``` php
use Macmotp\Country;

// Create the object with locale
$country = new Country(Country::US, Language::SPANISH);

echo $country->toArray();

// [
//    'continent' => 'America del Nord',
//    'name' => 'Stati Uniti',
//    ...
// ]

```


## Testing

``` bash
composer test
```

## Changelog

Please see [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing](.github/contributing.md) for details.

## Security Vulnerabilities

Please review [our security policy](.github/security.md) on how to report security vulnerabilities.

## Credits

- [Marco Gava](https://github.com/macmotp)
- [Mihai Tuhari](https://github.com/mihaituhari)

## License

The MIT License (MIT). Please see [License File](license.md) for more information.
