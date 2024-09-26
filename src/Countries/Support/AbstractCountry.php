<?php

namespace Macmotp\Countries\Support;

use Macmotp\Currency;
use Macmotp\Language;
use Macmotp\Money;
use Macmotp\Timezone;

/**
 * AbstractCountry abstract class
 */
abstract class AbstractCountry implements CountryInterface
{
    private string $continent;
    private string $name;
    private string $capital;
    private string $code;
    private string $alpha3Code;
    private string $dialCode;
    private string $tld;
    private string $dateFormat;
    private Currency $defaultCurrency;
    private Timezone $defaultTimezone;
    private Language $defaultLanguage;
    private Collection $currencies;
    private Collection $timezones;
    private Collection $languages;

    /**
     * Get Continent
     *
     * @return string
     */
    public function getContinent(): string
    {
        return $this->continent;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get Capital
     *
     * @return string
     */
    public function getCapital(): string
    {
        return $this->capital;
    }

    /**
     * Get Code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Get Alpha3 Code
     *
     * @return string
     */
    public function getAlpha3Code(): string
    {
        return $this->alpha3Code;
    }

    /**
     * Get Dial Code
     *
     * @return string
     */
    public function getDialCode(): string
    {
        return $this->dialCode;
    }

    /**
     * Get Tld
     *
     * @return string
     */
    public function getTld(): string
    {
        return $this->tld;
    }

    /**
     * Get Date Format
     *
     * @return string
     */
    public function getDateFormat(): string
    {
        return $this->dateFormat;
    }

    /**
     * Get Default Currency
     *
     * @return Currency
     */
    public function getDefaultCurrency(): Currency
    {
        return $this->defaultCurrency;
    }

    /**
     * Get Default Timezone
     *
     * @return Timezone
     */
    public function getDefaultTimezone(): Timezone
    {
        return $this->defaultTimezone;
    }

    /**
     * Get Default Language
     *
     * @return Language
     */
    public function getDefaultLanguage(): Language
    {
        return $this->defaultLanguage;
    }

    /**
     * Get Currencies
     *
     * @return Collection
     */
    public function getCurrencies(): Collection
    {
        return $this->currencies;
    }

    /**
     * Get Timezones
     *
     * @return Collection
     */
    public function getTimezones(): Collection
    {
        return $this->timezones;
    }

    /**
     * Get Languages
     *
     * @return Collection
     */
    public function getLanguages(): Collection
    {
        return $this->languages;
    }

    /**
     * Set Continent
     *
     * @param string $continent
     * @return CountryInterface
     */
    public function setContinent(string $continent): CountryInterface
    {
        $this->continent = $continent;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $name
     *
     * @return CountryInterface
     */
    public function setName(string $name): CountryInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set Capital
     *
     * @param string $capital
     *
     * @return CountryInterface
     */
    public function setCapital(string $capital): CountryInterface
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Set Code
     *
     * @param string $code
     *
     * @return CountryInterface
     */
    public function setCode(string $code): CountryInterface
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Set Alpha3 Code
     *
     * @param string $alpha3Code
     *
     * @return CountryInterface
     */
    public function setAlpha3Code(string $alpha3Code): CountryInterface
    {
        $this->alpha3Code = $alpha3Code;

        return $this;
    }

    /**
     * Set Dial Code
     *
     * @param string $dialCode
     *
     * @return CountryInterface
     */
    public function setDialCode(string $dialCode): CountryInterface
    {
        $this->dialCode = $dialCode;

        return $this;
    }

    /**
     * Set Tld
     *
     * @param string $tld
     *
     * @return CountryInterface
     */
    public function setTld(string $tld): CountryInterface
    {
        $this->tld = $tld;

        return $this;
    }

    /**
     * Set Date Format
     *
     * @param string $dateFormat
     *
     * @return CountryInterface
     */
    public function setDateFormat(string $dateFormat): CountryInterface
    {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    /**
     * Set Default Currency
     *
     * @param string $defaultCurrency
     * @return CountryInterface
     */
    public function setDefaultCurrency(string $defaultCurrency): CountryInterface
    {
        $this->defaultCurrency = Money::make(0, $defaultCurrency)->getCurrency();

        return $this;
    }

    /**
     * Set Default Timezone
     *
     * @param string $defaultTimezone
     * @return CountryInterface
     */
    public function setDefaultTimezone(string $defaultTimezone): CountryInterface
    {
        $this->defaultTimezone = new Timezone($defaultTimezone);

        return $this;
    }

    /**
     * Set Default Language
     *
     * @param string $defaultLanguage
     * @return CountryInterface
     */
    public function setDefaultLanguage(string $defaultLanguage): CountryInterface
    {
        $this->defaultLanguage = new Language($defaultLanguage);

        return $this;
    }

    /**
     * Set Currencies
     *
     * @param Collection $currencies
     * @return CountryInterface
     */
    public function setCurrencies(Collection $currencies): CountryInterface
    {
        $collection = new Collection();
        foreach ($currencies as $currencyCode) {
            $collection->push(Money::make(0, $currencyCode)->getCurrency());
        }
        $this->currencies = $collection;

        return $this;
    }

    /**
     * Set Timezones
     *
     * @param Collection $timezones
     * @return CountryInterface
     */
    public function setTimezones(Collection $timezones): CountryInterface
    {
        $collection = new Collection();
        foreach ($timezones as $timezoneCode) {
            $collection->push(Timezone::make($timezoneCode));
        }
        $this->timezones = $collection;

        return $this;
    }

    /**
     * Set Languages
     *
     * @param Collection $languages
     * @return CountryInterface
     */
    public function setLanguages(Collection $languages): CountryInterface
    {
        $collection = new Collection();
        foreach ($languages as $languageCode) {
            $collection->push(Language::make($languageCode));
        }
        $this->languages = $collection;

        return $this;
    }
}
