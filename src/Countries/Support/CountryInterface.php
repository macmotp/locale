<?php

namespace Macmotp\Countries\Support;

use Macmotp\Continent;
use Macmotp\Continents\Support\ContinentCode;
use Macmotp\Continents\Support\ContinentInterface;
use Macmotp\Currencies\Support\CurrencyCode;
use Macmotp\Currency;
use Macmotp\Language;
use Macmotp\Languages\Support\LanguageCode;
use Macmotp\Timezone;
use Macmotp\Timezones\Support\TimezoneCode;

/**
 * CountryInterface interface
 */
interface CountryInterface
{
    /**
     * Get Continent
     *
     * @return ContinentInterface
     */
    public function getContinent(): ContinentInterface;

    /**
     * Get Name
     *
     * @return CountryName
     */
    public function getName(): CountryName;

    /**
     * Get Capital
     *
     * @return CountryCapital
     */
    public function getCapital(): CountryCapital;

    /**
     * Get Code
     *
     * @return CountryCode
     */
    public function getCode(): CountryCode;

    /**
     * Get Alpha3 Code
     *
     * @return string
     */
    public function getAlpha3Code(): string;

    /**
     * Get Dial Code
     *
     * @return string
     */
    public function getDialCode(): string;

    /**
     * Get Tld
     *
     * @return string
     */
    public function getTld(): string;

    /**
     * Get Date Format
     *
     * @return string
     */
    public function getDateFormat(): string;

    /**
     * Get Date Format
     *
     * @return CountryFlag
     */
    public function getFlag(): CountryFlag;

    /**
     * Get Default Currency
     *
     * @return Currency
     */
    public function getDefaultCurrency(): Currency;

    /**
     * Get Default Timezone
     *
     * @return Timezone
     */
    public function getDefaultTimezone(): Timezone;

    /**
     * Get Default Language
     *
     * @return Language
     */
    public function getDefaultLanguage(): Language;

    /**
     * Get Currencies
     *
     * @return Collection
     */
    public function getCurrencies(): Collection;

    /**
     * Get Timezones
     *
     * @return Collection
     */
    public function getTimezones(): Collection;

    /**
     * Get Languages
     *
     * @return Collection
     */
    public function getLanguages(): Collection;

    /**
     * Set Continent
     *
     * @param ContinentCode $continent
     * @return CountryInterface
     */
    public function setContinent(ContinentCode $continent): CountryInterface;

    /**
     * Set Name
     *
     * @param CountryName $name
     * @return CountryInterface
     */
    public function setName(CountryName $name): CountryInterface;

    /**
     * Set Capital
     *
     * @param CountryCapital $capital
     * @return CountryInterface
     */
    public function setCapital(CountryCapital $capital): CountryInterface;

    /**
     * Set Code
     *
     * @param CountryCode $code
     * @return CountryInterface
     */
    public function setCode(CountryCode $code): CountryInterface;

    /**
     * Set Alpha3 Code
     *
     * @param string $alpha3Code
     * @return CountryInterface
     */
    public function setAlpha3Code(string $alpha3Code): CountryInterface;

    /**
     * Set Dial Code
     *
     * @param string $dialCode
     * @return CountryInterface
     */
    public function setDialCode(string $dialCode): CountryInterface;

    /**
     * Set Tld
     *
     * @param string $tld
     *
     * @return CountryInterface
     */
    public function setTld(string $tld): CountryInterface;

    /**
     * Set Date Format
     *
     * @param string $dateFormat
     *
     * @return CountryInterface
     */
    public function setDateFormat(string $dateFormat): CountryInterface;

    /**
     * Set Flag
     *
     * @param CountryFlag $flag
     *
     * @return CountryInterface
     */
    public function setFlag(CountryFlag $flag): CountryInterface;

    /**
     * Set Default Currency
     *
     * @param CurrencyCode $defaultCurrency
     * @return CountryInterface
     */
    public function setDefaultCurrency(CurrencyCode $defaultCurrency): CountryInterface;

    /**
     * Set Default Timezone
     *
     * @param TimezoneCode $defaultTimezone
     * @return CountryInterface
     */
    public function setDefaultTimezone(TimezoneCode $defaultTimezone): CountryInterface;

    /**
     * Set Default Language
     *
     * @param LanguageCode $defaultLanguage
     * @return CountryInterface
     */
    public function setDefaultLanguage(LanguageCode $defaultLanguage): CountryInterface;

    /**
     * Set Currencies
     *
     * @param Collection $currencies
     * @return CountryInterface
     */
    public function setCurrencies(Collection $currencies): CountryInterface;

    /**
     * Set Timezones
     *
     * @param Collection $timezones
     * @return CountryInterface
     */
    public function setTimezones(Collection $timezones): CountryInterface;

    /**
     * Set Languages
     *
     * @param Collection $languages
     * @return CountryInterface
     */
    public function setLanguages(Collection $languages): CountryInterface;
}
