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
//    'code' => 'US',
//    'alpha3_code' => 'USA',
//    'dial_code' => '+1',
//    'default_currency_code' => Currency::USD,
//    'default_timezone' => 'America/New_York',
//    'default_language' => 'en',
// ]

```
### List of basic dynamic methods
- `getContinent()`: it returns the continent;
- `getName()`: it returns the name;
- `getCode()`: it returns the country code (alpha2);
- `getAlpha3Code()`: it returns the country code (alpha3);
- `getAlpha3Code()`: it returns the country code (alpha3);
- `getDialCode()`: it returns the dial code;
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
// [
//    [
//       'continent' => 'North America',
//       'name' => 'United States of America',
//       'code' => 'US',
//       'alpha3_code' => 'USA',
//       'dial_code' => '+1',
//       'default_currency_code' => Currency::USD,
//       'default_timezone' => 'America/New_York',
//       'default_language' => 'en_US',
//    ],
//    ...
// ]

$list = Country::all()->speaking(Language::ENGLISH);
// it returns a Collection with a list of all countries using english language
```

__These methods can be chained, for example: `Country::all()->ofContinent(Continent::EUROPE)->speaking(Language::ENGLISH);`__

#### Available Languages (in order of locale code)
- Language::AFRIKAANS = 'af';
- Language::AKAN = 'ak';
- Language::AMHARIC = 'am';
- Language::ARABIC = 'ar';
- Language::ASSAMESE = 'as';
- Language::ASU = 'asa';
- Language::AZERBAIJANI = 'az';
- Language::BELARUSIAN = 'be';
- Language::BEMBA = 'bem';
- Language::BENA = 'bez';
- Language::BULGARIAN = 'bg';
- Language::BAMBARA = 'bm';
- Language::BENGALI = 'bn';
- Language::BOSNIAN = 'bs';
- Language::CATALAN = 'ca';
- Language::CHEROKEE = 'chr';
- Language::CHIGA = 'cgg';
- Language::CZECH = 'cs';
- Language::DANISH = 'da';
- Language::GERMAN = 'de';
- Language::EMBU = 'ebu';
- Language::EWE = 'ee';
- Language::GREEK = 'el';
- Language::ENGLISH = 'en';
- Language::ESPERANTO = 'eo';
- Language::SPANISH = 'es';
- Language::ESTONIAN = 'et';
- Language::BASQUE = 'eu';
- Language::FULAH = 'ff';
- Language::FINNISH = 'fi';
- Language::FILIPINO = 'fil';
- Language::FAROESE = 'fo';
- Language::FRENCH = 'fr';
- Language::IRISH = 'ga';
- Language::GALITIAN = 'gl';
- Language::GUJARATI = 'gu';
- Language::GUSII = 'guz';
- Language::HAUSA = 'ha';
- Language::HAWAIIAN = 'haw';
- Language::HEBREW = 'he';
- Language::HINDI = 'hi';
- Language::CROATIAN = 'hr';
- Language::HUNGARIAN = 'hu';
- Language::ARMENIAN = 'hy';
- Language::INDONESIAN = 'id';
- Language::IGBO = 'ig';
- Language::ICELANDIC = 'is';
- Language::ITALIAN = 'it';
- Language::JAPANESE = 'ja';
- Language::GEORGIAN = 'ka';
- Language::KABYLE= 'kab';
- Language::KABUVERDIANU = 'kea';
- Language::KALAALLISUT = 'kl';
- Language::KALENJIN = 'kln';
- Language::CORNISH = 'kw';
- Language::GANDA = 'lg';
- Language::BURMESE = 'my';
- Language::DUTCH = 'nl';
- Language::PORTUGUESE = 'pt';
- Language::ALBANIAN = 'sq';
- Language::TAMAZIGHT = 'tzm';
- Language::CANTONESE = 'yue';
- Language::CHINESE = 'zh';


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
