<?php

namespace Macmotp\Countries\Support;

/**
 * CountryInterface interface
 */
interface CountryInterface
{
    /**
     * Get Continent
     *
     * @return string
     */
    public function getContinent(): string;

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get Capital
     *
     * @return string
     */
    public function getCapital(): string;

    /**
     * Get Code
     *
     * @return string
     */
    public function getCode(): string;

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
     * Get Default Currency
     *
     * @return string
     */
    public function getDefaultCurrency(): string;

    /**
     * Get Default Timezone
     *
     * @return string
     */
    public function getDefaultTimezone(): string;

    /**
     * Get Default Language
     *
     * @return string
     */
    public function getDefaultLanguage(): string;

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
     * @param string $continent
     * @return CountryInterface
     */
    public function setContinent(string $continent): CountryInterface;

    /**
     * Set Name
     *
     * @param string $name
     * @return CountryInterface
     */
    public function setName(string $name): CountryInterface;

    /**
     * Set Capital
     *
     * @param string $capital
     * @return CountryInterface
     */
    public function setCapital(string $capital): CountryInterface;

    /**
     * Set Code
     *
     * @param string $code
     * @return CountryInterface
     */
    public function setCode(string $code): CountryInterface;

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
     * Set Default Currency
     *
     * @param string $defaultCurrency
     * @return CountryInterface
     */
    public function setDefaultCurrency(string $defaultCurrency): CountryInterface;

    /**
     * Set Default Timezone
     *
     * @param string $defaultTimezone
     * @return CountryInterface
     */
    public function setDefaultTimezone(string $defaultTimezone): CountryInterface;

    /**
     * Set Default Language
     *
     * @param string $defaultLanguage
     * @return CountryInterface
     */
    public function setDefaultLanguage(string $defaultLanguage): CountryInterface;

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
