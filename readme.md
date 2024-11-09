# A curated library to handle locale in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/macmotp/locale.svg)](https://packagist.org/packages/macmotp/locale)
[![Total Downloads](https://img.shields.io/packagist/dt/macmotp/locale.svg)](https://packagist.org/packages/macmotp/locale)

**Simple and light PHP library that handles Countries, Currencies, Languages, and Timezones**

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
use Macmotp\Countries\Support\CountryCode;

// Create the object
$countryCode = CountryCode::US; // Use alpha2 ISO code
$country = new Country($countryCode);

// Alternative methods: 
$country = new Country('US');
$country = Country::make($countryCode);

echo $country->toArray();

// [
//    'continent' => 'North America',
//    'name' => 'United States of America',
//    'capital' => 'Washington, D.C.',
//    'code' => 'US',
//    'alpha3_code' => 'USA',
//    'dial_code' => '+1',
//    'tld' => '.us',
//    'date_format' => 'm-d-Y',
//    'flag' => 'us',
//    'default_currency' => [
//       'name' => 'United States Dollar',
//       'code' => 'USD',
//       'symbol' => '$',
//       'flag' => 'us',
//       'format' => [
//          ...
//       ],
//    ],
//    'default_timezone' => [
//       'name' => 'America/New_York',
//       'code' => 'America/New_York',
//    ],
//    'default_language' => [
//       'name' => 'English',
//       'code' => 'en',
//       'english_name' => 'English',
//       'flag' => 'gb',
//    ],
//    'currencies' => [...],
//    'timezones' => [...],
//    'languages' => [...],
// ]

```
### List of basic dynamic methods
- `getContinent()`: it returns the continent (string);
- `getName()`: it returns the name (string);
- `getCapital()`: it returns the capital (string);
- `getCode()`: it returns the country code (alpha2) (string);
- `getAlpha3Code()`: it returns the country code (alpha3) (string);
- `getDialCode()`: it returns the dial code (string);
- `getTld()`: it returns the internet tld (string);
- `getDateFormat()`: it returns the date format (string);
- `getFlag()`: it returns the flag code (string);
- `getDefaultCurrency()`: it returns the default currency (object `Macmotp\Currency`);
- `getDefaultTimezone()`: it returns the default timezone (object `Macmotp\Timezone`);
- `getDefaultLanguage()`: it returns the default locale language (object `Macmotp\Language`);
- `toArray()`: it returns the object into array;

``` php
// Example
use Macmotp\Country;

$country = new Country('US');

echo $country->getDefaultCurrency()->getCode();
// (string) 'USD'

echo $country->getFlag();
// (string) 'us'

```

### List of advanced dynamic methods
- `getCurrencies()`: it returns a Collection with all the currencies adopted in that country;
- `getTimezones()`: it returns a Collection with all the timezones applied in that country;
- `getLanguages()`: it returns a Collection with all the languages used in that country;

``` php
// Example
use Macmotp\Country;
use Macmotp\Countries\Support\CountryCode;

$country = new Country(CountryCode::AU);

echo $country->getTimezones();
// (Collection)
// [
//    ['code' => 'Antarctica/Macquarie', 'name' => 'Antarctica/Macquarie'],
//    ['code' => 'Australia/Adelaide', 'name' => 'Australia/Adelaide'],
//    ['code' => 'Australia/Brisbane', 'name' => 'Australia/Brisbane'],
//    ['code' => 'Australia/Broken_Hill', 'name' => 'Australia/Broken_Hill'],
//    ['code' => 'Australia/Darwin', 'name' => 'Australia/Darwin'],
//    ['code' => 'Australia/Eucla', 'name' => 'Australia/Eucla'],
//    ['code' => 'Australia/Hobart', 'name' => 'Australia/Hobart'],
//    ['code' => 'Australia/Lindeman', 'name' => 'Australia/Lindeman'],
//    ['code' => 'Australia/Lord_Howe', 'name' => 'Australia/Lord_Howe'],
//    ['code' => 'Australia/Melbourne', 'name' => 'Australia/Melbourne'],
//    ['code' => 'Australia/Perth', 'name' => 'Australia/Perth'],
//    ['code' => 'Australia/Sydney', 'name' => 'Australia/Sydney'],
//  ]

```

### List of Countries in the package
``` php
use Macmotp\Country;

$list = Country::all();
// it returns a Collection with all countries
```

### Filter Countries by property
- `usingCurrency($currencyCode)`: it returns a Collection with all the currencies adopted in that country;
- `usingLanguage($language)`: it returns a Collection with all the countries speaking a specific language;
- `ofContinent($continent)`: it returns a Collection with all the countries that belong to a continent;

``` php
// Examples
use Macmotp\Continent;
use Macmotp\Country;
use Macmotp\Language;

echo Country::all()->usingCurrency('USD');
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

$list = Country::all()->usingLanguage(Language::ENGLISH);
// (Collection) [
//    [
//       'continent' => 'North America',
//       'name' => 'United States of America',
//       'code' => 'US',
//       ...
//    ],
//    [
//       'continent' => 'Europe',
//       'name' => 'United Kingdom',
//       'code' => 'GB',
//       ...
//    ],
//    ...
// ]
```

__These methods can be chained, for example: `Country::all()->ofContinent(Continent::EUROPE)->usingLanguage(Language::ENGLISH);`__

## Localization
In addition to the default functions, it's possible to localize the response. By default, English is used as primary locale.
``` php
use Macmotp\Country;
use Macmotp\Countries\Support\CountryCode;
use Macmotp\Languages\Support\Locale;

// Create the object with locale
$country = new Country(CountryCode::US);

echo $country->setLocale(Locale::JAPANESE)->toArray();

// [
//    'continent' => '北アメリカ',
//    'name' => 'アメリカ合衆国',
//    'capital' => 'ワシントンD.C.',
//    ...
// ]

```

#### Supported Locales
- `Locale::ARABIC = 'ar'`;
- `Locale::GERMAN = 'de'`;
- `Locale::ENGLISH = 'en'`;
- `Locale::SPANISH = 'es'`;
- `Locale::FRENCH = 'fr'`;
- `Locale::HINDI = 'hi'`;
- `Locale::HUNGARIAN = 'hu'`;
- `Locale::INDONESIAN = 'id'`;
- `Locale::ITALIAN = 'it'`;
- `Locale::JAPANESE = 'ja'`;
- `Locale::KOREAN = 'ko'`;
- `Locale::MALAY = 'ms'`;
- `Locale::DUTCH = 'nl'`;
- `Locale::PORTUGUESE = 'pt'`;
- `Locale::ROMANIAN = 'ro'`;
- `Locale::RUSSIAN = 'ru'`;
- `Locale::TAMIL = 'ta'`;
- `Locale::CHINESE = 'zh'`;

### Flags
In addition to the source code, you can find a set of SVG flags [here](./src/Assets/Flags).
These icons are tight to the `getFlag()` method, and they are associated also with Currencies and Languages.


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

## License

The MIT License (MIT). Please see [License File](license.md) for more information.
