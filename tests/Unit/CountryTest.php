<?php

namespace Macmotp\Country\Tests\Unit;

use Macmotp\Continent;
use Macmotp\Country;
use Macmotp\Currency;
use Macmotp\Language;
use Macmotp\Timezone;
use PHPUnit\Framework\TestCase;

/**
 * Class CountryTest
 *
 * @package Macmotp\Country\Tests\Unit
 * @group Country
 */
class CountryTest extends TestCase
{
    /**
     * @dataProvider listConstructors
     *
     * @param string $countryCode
     * @param string $outputContinent
     * @param string $outputName
     * @param string $outputCapital
     * @param string $outputCode
     * @param string $outputAlpha3Code
     * @param string $outputDialCode
     * @param string $outputTld
     * @param string $outputDateFormat
     * @param string $outputDefaultCurrency
     * @param string $outputDefaultTimezone
     * @param string $outputDefaultLanguage
     * @return void
     */
    public function testCountryConstructor(
        string $countryCode,
        string $outputContinent,
        string $outputName,
        string $outputCapital,
        string $outputCode,
        string $outputAlpha3Code,
        string $outputDialCode,
        string $outputTld,
        string $outputDateFormat,
        string $outputDefaultCurrency,
        string $outputDefaultTimezone,
        string $outputDefaultLanguage,
    ): void
    {
        $country = new Country($countryCode);

        $this->assertEquals($outputContinent, $country->getContinent());
        $this->assertEquals($outputName, $country->getName());
        $this->assertEquals($outputCapital, $country->getCapital());
        $this->assertEquals($outputCode, $country->getCode());
        $this->assertEquals($outputAlpha3Code, $country->getAlpha3Code());
        $this->assertEquals($outputDialCode, $country->getDialCode());
        $this->assertEquals($outputTld, $country->getTld());
        $this->assertEquals($outputDateFormat, $country->getDateFormat());
        $this->assertEquals($outputDefaultCurrency, $country->getDefaultCurrency());
        $this->assertEquals($outputDefaultTimezone, $country->getDefaultTimezone());
        $this->assertEquals($outputDefaultLanguage, $country->getDefaultLanguage());
    }

    /**
     * @return void
     */
    public function testMakeFunction(): void
    {
        $country = Country::make(Country::US);

        $this->assertEquals('United States of America', $country->getName());
    }

    /**
     * @return void
     */
    public function testToArrayFunction(): void
    {
        $country = new Country(Country::IT);

        $this->assertEquals([
            'continent' => 'Europe',
            'name' => 'Italy',
            'capital' => 'Rome',
            'code' => 'IT',
            'alpha3_code' => 'ITA',
            'dial_code' => '+39',
            'tld' => '.it',
            'date_format' => 'd-m-Y',
            'default_currency_code' => 'EUR',
            'default_timezone' => 'Europe/Rome',
            'default_language' => 'it',
            'currencies' => ['EUR'],
            'timezones' => ['Europe/Rome'],
            'languages' => ['it'],
        ], $country->toArray());
    }

    /**
     * @return void
     */
    public function testSetLocaleFunction(): void
    {
        $country = new Country(Country::US, 'it');

        $this->assertEquals('America del Nord', $country->getContinent());
        $this->assertEquals('Stati Uniti d\'America', $country->getName());
    }

    /**
     * @return void
     */
    public function testGetCurrenciesFunction(): void
    {
        $country = new Country(Country::US);

        $this->assertEquals([
            Currency::USD,
        ], $country->getCurrencies()->toArray());
    }

    /**
     * @return void
     */
    public function testGetTimezonesFunction(): void
    {
        $country = new Country(Country::US);

        $this->assertEquals([
            Timezone::AMERICA_ADAK,
            Timezone::AMERICA_ANCHORAGE,
            Timezone::AMERICA_BOISE,
            Timezone::AMERICA_CHICAGO,
            Timezone::AMERICA_DENVER,
            Timezone::AMERICA_DETROIT,
            Timezone::AMERICA_INDIANA_INDIANAPOLIS,
            Timezone::AMERICA_INDIANA_KNOX,
            Timezone::AMERICA_INDIANA_MARENGO,
            Timezone::AMERICA_INDIANA_PETERSBURG,
            Timezone::AMERICA_INDIANA_TELL_CITY,
            Timezone::AMERICA_INDIANA_VEVAY,
            Timezone::AMERICA_INDIANA_VINCENNES,
            Timezone::AMERICA_INDIANA_WINAMAC,
            Timezone::AMERICA_JUNEAU,
            Timezone::AMERICA_KENTUCKY_LOUISVILLE,
            Timezone::AMERICA_KENTUCKY_MONTICELLO,
            Timezone::AMERICA_LOS_ANGELES,
            Timezone::AMERICA_MENOMINEE,
            Timezone::AMERICA_METLAKATLA,
            Timezone::AMERICA_NEW_YORK,
            Timezone::AMERICA_NOME,
            Timezone::AMERICA_NORTH_DAKOTA_BEULAH,
            Timezone::AMERICA_NORTH_DAKOTA_CENTER,
            Timezone::AMERICA_NORTH_DAKOTA_NEW_SALEM,
            Timezone::AMERICA_PHOENIX,
            Timezone::AMERICA_SITKA,
            Timezone::AMERICA_YAKUTAT,
            Timezone::PACIFIC_HONOLULU,
        ], $country->getTimezones()->toArray());
    }

    /**
     * @return void
     */
    public function testGetLanguagesFunction(): void
    {
        $country = new Country(Country::US);

        $this->assertEquals([
            Language::ENGLISH
        ], $country->getLanguages()->toArray());
    }

    /**
     * @return void
     */
    public function testGetAllCountriesFunction(): void
    {
        $this->assertCount(250, Country::all());
    }

    /**
     * @return void
     */
    public function testFilterCountriesByCurrencyFunction(): void
    {
        $this->assertCount(19, Country::all()->withCurrency(Currency::USD));
    }

    /**
     * @return void
     */
    public function testFilterCountriesByLanguageFunction(): void
    {
        $this->assertCount(88, Country::all()->speaking(Language::ENGLISH));
    }

    /**
     * @return void
     */
    public function testFilterCountriesByContinentFunction(): void
    {
        $this->assertCount(55, Country::all()->ofContinent(Continent::EUROPE));
    }

    /**
     * @return void
     */
    public function testFilterCountriesChainedFunction(): void
    {
        $this->assertCount(2, Country::all()->ofContinent(Continent::EUROPE)->speaking(Language::ENGLISH)->withCurrency(Currency::EUR));
    }

    /**
     * List of different constructors
     *
     * @return array[]
     */
    public static function listConstructors(): array
    {
        return [
            [
                Country::AD,
                'Europe',
                'Andorra',
                'Andorra la Vella',
                'AD',
                'AND',
                '+376',
                '.ad',
                'd-m-Y',
                Currency::EUR,
                Timezone::EUROPE_ANDORRA,
                Language::CATALAN
            ],
            [
                Country::US,
                'North America',
                'United States of America',
                'Washington, D.C.',
                'US',
                'USA',
                '+1',
                '.us',
                'm-d-Y',
                Currency::USD,
                Timezone::AMERICA_NEW_YORK,
                Language::ENGLISH
            ],
        ];
    }
}
