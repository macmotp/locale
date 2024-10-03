<?php

namespace Macmotp\Locale\Tests\Unit;

use Macmotp\Continents\Exceptions\InvalidContinentCodeException;
use Macmotp\Continents\Support\ContinentCode;
use Macmotp\Countries\Exceptions\InvalidCountryCodeException;
use Macmotp\Countries\Support\CountryCode;
use Macmotp\Countries\Support\CountryInterface;
use Macmotp\Country;
use Macmotp\Currencies\Exceptions\InvalidCurrencyCodeException;
use Macmotp\Currencies\Support\CurrencyCode;
use Macmotp\Languages\Exceptions\InvalidLanguageCodeException;
use Macmotp\Languages\Support\LanguageCode;
use Macmotp\Locales\Exceptions\InvalidLocaleCodeException;
use Macmotp\Locales\Support\LocaleCode;
use Macmotp\Timezones\Support\TimezoneCode;
use PHPUnit\Framework\TestCase;

/**
 * Class CountryTest
 *
 * @package Macmotp\Locale\Tests\Unit
 * @group Locale
 */
class CountryTest extends TestCase
{
    /**
     * @dataProvider listConstructors
     *
     * @param CountryCode $countryCode
     * @param string $outputContinent
     * @param string $outputName
     * @param string $outputCapital
     * @param string $outputCode
     * @param string $outputAlpha3Code
     * @param string $outputDialCode
     * @param string $outputTld
     * @param string $outputDateFormat
     * @param string $outputFlag
     * @param string $outputDefaultCurrency
     * @param string $outputDefaultTimezone
     * @param string $outputDefaultLanguage
     * @return void
     * @throws InvalidCountryCodeException
     * @throws InvalidLocaleCodeException
     */
    public function testCountryConstructor(
        CountryCode $countryCode,
        string      $outputContinent,
        string      $outputName,
        string      $outputCapital,
        string      $outputCode,
        string      $outputAlpha3Code,
        string      $outputDialCode,
        string      $outputTld,
        string      $outputDateFormat,
        string      $outputFlag,
        string      $outputDefaultCurrency,
        string      $outputDefaultTimezone,
        string      $outputDefaultLanguage,
    ): void {
        $country = new Country($countryCode);

        $this->assertEquals($outputContinent, $country->getContinent());
        $this->assertEquals($outputName, $country->getName());
        $this->assertEquals($outputCapital, $country->getCapital());
        $this->assertEquals($outputCode, $country->getCode());
        $this->assertEquals($outputAlpha3Code, $country->getAlpha3Code());
        $this->assertEquals($outputDialCode, $country->getDialCode());
        $this->assertEquals($outputTld, $country->getTld());
        $this->assertEquals($outputDateFormat, $country->getDateFormat());
        $this->assertEquals($outputFlag, $country->getFlag());
        $this->assertEquals($outputDefaultCurrency, $country->getDefaultCurrency()->getCode());
        $this->assertEquals($outputDefaultTimezone, $country->getDefaultTimezone()->getCode());
        $this->assertEquals($outputDefaultLanguage, $country->getDefaultLanguage()->getCode());
    }

    /**
     * @return void
     * @throws InvalidCountryCodeException
     * @throws InvalidLocaleCodeException
     */
    public function testMakeFunction(): void
    {
        $country = Country::make(CountryCode::US);

        $this->assertEquals('United States of America', $country->getName());
    }

    /**
     * @return void
     */
    public function testToArrayFunction(): void
    {
        $country = new Country(CountryCode::IT);

        $this->assertEquals([
            'continent' => 'Europe',
            'name' => 'Italy',
            'capital' => 'Rome',
            'code' => 'IT',
            'alpha3_code' => 'ITA',
            'dial_code' => '+39',
            'tld' => '.it',
            'date_format' => 'd-m-Y',
            'flag' => 'it',
            'default_currency' => [
                'code' => 'EUR',
                'name' => 'Euro',
                'symbol' => '€',
                'flag' => 'eu',
                'format' => [
                    'show_symbol' => true,
                    'show_code' => false,
                    'show_space' => false,
                    'show_symbol_or_code_on_left' => true,
                    'show_decimals' => true,
                    'decimal_separator' => ',',
                    'thousands_separator' => ' ',
                    'subunit_level' => 2,
                    'number_of_decimals' => 2,
                ],
            ],
            'default_timezone' => [
                'code' => 'Europe/Rome',
                'name' => 'Europe/Rome',
            ],
            'default_language' => [
                'code' => 'it',
                'name' => 'Italian',
            ],
            'currencies' => [
                [
                    'code' => 'EUR',
                    'name' => 'Euro',
                    'symbol' => '€',
                    'flag' => 'eu',
                    'format' => [
                        'show_symbol' => true,
                        'show_code' => false,
                        'show_space' => false,
                        'show_symbol_or_code_on_left' => true,
                        'show_decimals' => true,
                        'decimal_separator' => ',',
                        'thousands_separator' => ' ',
                        'subunit_level' => 2,
                        'number_of_decimals' => 2,
                    ],
                ],
            ],
            'timezones' => [
                [
                    'code' => 'Europe/Rome',
                    'name' => 'Europe/Rome',
                ],
            ],
            'languages' => [
                [
                    'code' => 'it',
                    'name' => 'Italian',
                ],
            ],
        ], $country->toArray());
    }

    /**
     * @return void
     * @throws InvalidLocaleCodeException
     */
    public function testSetLocaleFunction(): void
    {
        $country = new Country(CountryCode::IT);
        $country->setLocale(LocaleCode::ITALIAN);

        $this->assertEquals('Europa', $country->getContinent());
        $this->assertEquals('Italia', $country->getName());
        $this->assertEquals('Roma', $country->getCapital());
    }

    /**
     * @return void
     * @throws InvalidCountryCodeException
     */
    public function testGetAllCountriesFunction(): void
    {
        $this->assertCount(250, Country::all());
    }

    /**
     * @return void
     * @throws InvalidCurrencyCodeException
     * @throws InvalidCountryCodeException
     */
    public function testFilterCountriesByCurrencyFunction(): void
    {
        $this->assertCount(19, Country::all()->usingCurrency(CurrencyCode::USD));
    }

    /**
     * @return void
     * @throws InvalidLanguageCodeException
     * @throws InvalidCountryCodeException
     */
    public function testFilterCountriesByLanguageFunction(): void
    {
        $this->assertCount(88, Country::all()->usingLanguage(LanguageCode::ENGLISH));
    }

    /**
     * @return void
     * @throws InvalidCountryCodeException
     * @throws InvalidContinentCodeException
     */
    public function testFilterCountriesByContinentFunction(): void
    {
        $this->assertCount(55, Country::all()->ofContinent(ContinentCode::EUROPE));
    }

    /**
     * @return void
     * @throws InvalidCountryCodeException
     * @throws InvalidContinentCodeException
     * @throws InvalidCurrencyCodeException
     * @throws InvalidLanguageCodeException
     */
    public function testFilterCountriesChainedFunction(): void
    {
        $chained = Country::all()
            ->ofContinent(ContinentCode::EUROPE)
            ->usingLanguage(LanguageCode::ENGLISH)
            ->usingCurrency(CurrencyCode::EUR);

        $this->assertCount(2, $chained);
        $this->assertEquals([
            CountryCode::IE,
            CountryCode::MT,
        ], $chained->map(fn (CountryInterface $country) => $country->getCode())->values()->all());
    }

    /**
     * List of different constructors
     *
     * @return array[]
     */
    public static function listConstructors(): array
    {
        return [
            [CountryCode::AD, 'Europe', 'Andorra', 'Andorra la Vella', 'AD', 'AND', '+376', '.ad', 'd-m-Y', 'ad', CurrencyCode::EUR->value, TimezoneCode::EUROPE_ANDORRA->value, LanguageCode::CATALAN->value,],
        ];
    }
}
