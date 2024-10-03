<?php

namespace Macmotp\Locale\Tests\Unit;

use Macmotp\Continent;
use Macmotp\Continents\Exceptions\InvalidContinentCodeException;
use Macmotp\Continents\Support\ContinentCode;
use Macmotp\Locales\Exceptions\InvalidLocaleCodeException;
use Macmotp\Locales\Support\LocaleCode;
use PHPUnit\Framework\TestCase;

/**
 * Class ContinentTest
 *
 * @package Macmotp\Locale\Tests\Unit
 * @group Locale
 */
class ContinentTest extends TestCase
{
    /**
     * @dataProvider listConstructors
     *
     * @param ContinentCode $continentCode
     * @param string $outputCode
     * @param string $outputName
     * @return void
     * @throws InvalidContinentCodeException
     * @throws InvalidLocaleCodeException
     */
    public function testContinentConstructor(
        ContinentCode $continentCode,
        string $outputCode,
        string $outputName,
    ): void {
        $continent = new Continent($continentCode);

        $this->assertEquals($outputCode, $continent->getCode());
        $this->assertEquals($outputName, $continent->getName());
    }

    /**
     * @return void
     * @throws InvalidContinentCodeException|InvalidLocaleCodeException
     */
    public function testMakeFunction(): void
    {
        $continent = Continent::make(ContinentCode::EUROPE);

        $this->assertEquals('Europe', $continent->getName());
    }

    /**
     * @return void
     */
    public function testToArrayFunction(): void
    {
        $continent = new Continent(ContinentCode::SOUTH_AMERICA);

        $this->assertEquals([
            'name' => 'South America',
            'code' => 'SAM',
        ], $continent->toArray());
    }

    /**
     * @return void
     * @throws InvalidLocaleCodeException
     */
    public function testSetLocaleFunction(): void
    {
        $continent = new Continent(ContinentCode::EUROPE);
        $continent = $continent->setLocale(LocaleCode::ITALIAN);

        $this->assertEquals('Europa', $continent->getName());
    }

    /**
     * @return void
     * @throws InvalidContinentCodeException
     */
    public function testGetAllContinentsFunction(): void
    {
        $this->assertCount(8, Continent::all());
    }

    /**
     * List of different constructors
     *
     * @return array[]
     */
    public static function listConstructors(): array
    {
        return [
            [ContinentCode::AFRICA, 'AFR', 'Africa'],
            [ContinentCode::ANTARCTICA, 'ANT', 'Antarctica'],
            [ContinentCode::ARCTIC, 'ARC', 'Arctic'],
            [ContinentCode::ASIA, 'ASI', 'Asia'],
            [ContinentCode::EUROPE, 'EUR', 'Europe'],
            [ContinentCode::NORTH_AMERICA, 'NAM', 'North America'],
            [ContinentCode::OCEANIA, 'OCE', 'Oceania'],
            [ContinentCode::SOUTH_AMERICA, 'SAM', 'South America'],
        ];
    }
}
