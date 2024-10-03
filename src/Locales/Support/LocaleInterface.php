<?php

namespace Macmotp\Locales\Support;

use Macmotp\Continents\Support\ContinentName;
use Macmotp\Countries\Support\CountryCapital;
use Macmotp\Countries\Support\CountryName;

/**
 * LocaleInterface interface
 */
interface LocaleInterface
{
    /**
     * Get Name
     *
     * @return LocaleName
     */
    public function getName(): LocaleName;

    /**
     * Get Code
     *
     * @return LocaleCode
     */
    public function getCode(): LocaleCode;

    /**
     * Get English Name
     *
     * @return LocaleEnglishName
     */
    public function getEnglishName(): LocaleEnglishName;

    /**
     * Get Flag
     *
     * @return LocaleFlag
     */
    public function getFlag(): LocaleFlag;

    /**
     * Set Name
     *
     * @param LocaleName $name
     * @return LocaleInterface
     */
    public function setName(LocaleName $name): LocaleInterface;

    /**
     * Set Code
     *
     * @param LocaleCode $code
     * @return LocaleInterface
     */
    public function setCode(LocaleCode $code): LocaleInterface;

    /**
     * Set English Name
     *
     * @param LocaleEnglishName $englishName
     * @return LocaleInterface
     */
    public function setEnglishName(LocaleEnglishName $englishName): LocaleInterface;

    /**
     * Set Flag
     *
     * @param LocaleFlag $flag
     * @return LocaleInterface
     */
    public function setFlag(LocaleFlag $flag): LocaleInterface;

    /**
     * Translate Continent
     *
     * @param ContinentName $name
     * @return string
     */
    public function translateContinent(ContinentName $name): string;

    /**
     * Translate Country
     *
     * @param CountryName $name
     * @return string
     */
    public function translateCountry(CountryName $name): string;

    /**
     * Translate Capital
     *
     * @param CountryCapital $capital
     * @return string
     */
    public function translateCapital(CountryCapital $capital): string;

    /**
     * Convert the locale into array
     *
     * @return array
     */
    public function toArray(): array;
}
