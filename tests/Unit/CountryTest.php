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
        $this->assertEquals($outputDefaultCurrency, $country->getDefaultCurrency());
        $this->assertEquals($outputDefaultTimezone, $country->getDefaultTimezone());
        $this->assertEquals($outputDefaultLanguage, $country->getDefaultLanguage());
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
            Timezone::AMERICA_NEW_YORK,
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
        $this->assertCount(6, Country::all());
    }

    /**
     * @return void
     */
    public function testFilterCountriesByCurrencyFunction(): void
    {
        $this->assertCount(1, Country::all()->withCurrency(Currency::USD));
    }

    /**
     * @return void
     */
    public function testFilterCountriesByLanguageFunction(): void
    {
        $this->assertCount(3, Country::all()->speaking(Language::ENGLISH));
    }

    /**
     * @return void
     */
    public function testFilterCountriesByContinentFunction(): void
    {
        $this->assertCount(1, Country::all()->ofContinent(Continent::EUROPE));
    }

    /**
     * @return void
     */
    public function testFilterCountriesChainedFunction(): void
    {
        $this->assertCount(0, Country::all()->ofContinent(Continent::AFRICA)->speaking(Language::ENGLISH)->withCurrency('USD'));
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
                Continent::EUROPE,
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
                Continent::NORTH_AMERICA,
                'United States of America',
                'Washington',
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
