<?php

namespace Macmotp\Countries\Support;

use Illuminate\Contracts\Support\Arrayable;
use Macmotp\Continents\Exceptions\InvalidContinentCodeException;
use Macmotp\Continents\Support\ContinentCode;
use Macmotp\Continents\Support\ContinentFactory;
use Macmotp\Continents\Support\ContinentInterface;
use Macmotp\Currencies\Exceptions\InvalidCurrencyCodeException;
use Macmotp\Currencies\Support\CurrencyCode;
use Macmotp\Currency;
use Macmotp\Language;
use Macmotp\Languages\Exceptions\InvalidLanguageCodeException;
use Macmotp\Languages\Support\LanguageCode;
use Macmotp\Timezone;
use Macmotp\Timezones\Exceptions\InvalidTimezoneCodeException;
use Macmotp\Timezones\Support\TimezoneCode;

/**
 * AbstractCountry abstract class
 */
abstract class AbstractCountry implements Arrayable, CountryInterface
{
    private ContinentInterface $continent;
    private CountryName $name;
    private CountryCapital $capital;
    private CountryCode $code;
    private string $alpha3Code;
    private string $dialCode;
    private string $tld;
    private string $dateFormat;
    private CountryFlag $flag;
    private Currency $defaultCurrency;
    private Timezone $defaultTimezone;
    private Language $defaultLanguage;
    private Collection $currencies;
    private Collection $timezones;
    private Collection $languages;

    /**
     * Get Continent
     *
     * @return ContinentInterface
     */
    public function getContinent(): ContinentInterface
    {
        return $this->continent;
    }

    /**
     * Get Name
     *
     * @return CountryName
     */
    public function getName(): CountryName
    {
        return $this->name;
    }

    /**
     * Get Capital
     *
     * @return CountryCapital
     */
    public function getCapital(): CountryCapital
    {
        return $this->capital;
    }

    /**
     * Get Code
     *
     * @return CountryCode
     */
    public function getCode(): CountryCode
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
     * Get Flag
     *
     * @return CountryFlag
     */
    public function getFlag(): CountryFlag
    {
        return $this->flag;
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
     * @param ContinentCode $continentCode
     * @return CountryInterface
     * @throws InvalidContinentCodeException
     */
    public function setContinent(ContinentCode $continentCode): CountryInterface
    {
        $this->continent = ContinentFactory::create($continentCode);

        return $this;
    }

    /**
     * Set Name
     *
     * @param CountryName $name
     *
     * @return CountryInterface
     */
    public function setName(CountryName $name): CountryInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set Capital
     *
     * @param CountryCapital $capital
     *
     * @return CountryInterface
     */
    public function setCapital(CountryCapital $capital): CountryInterface
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Set Code
     *
     * @param CountryCode $code
     *
     * @return CountryInterface
     */
    public function setCode(CountryCode $code): CountryInterface
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
     * Set Flag
     *
     * @param CountryFlag $flag
     *
     * @return CountryInterface
     */
    public function setFlag(CountryFlag $flag): CountryInterface
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Set Default Currency
     *
     * @param CurrencyCode $defaultCurrency
     * @return CountryInterface
     * @throws InvalidCurrencyCodeException
     */
    public function setDefaultCurrency(CurrencyCode $defaultCurrency): CountryInterface
    {
        $this->defaultCurrency = new Currency($defaultCurrency);

        return $this;
    }

    /**
     * Set Default Timezone
     *
     * @param TimezoneCode $defaultTimezone
     * @return CountryInterface
     * @throws InvalidTimezoneCodeException
     */
    public function setDefaultTimezone(TimezoneCode $defaultTimezone): CountryInterface
    {
        $this->defaultTimezone = new Timezone($defaultTimezone);

        return $this;
    }

    /**
     * Set Default Language
     *
     * @param LanguageCode $defaultLanguage
     * @return CountryInterface
     * @throws InvalidLanguageCodeException
     */
    public function setDefaultLanguage(LanguageCode $defaultLanguage): CountryInterface
    {
        $this->defaultLanguage = new Language($defaultLanguage);

        return $this;
    }

    /**
     * Set Currencies
     *
     * @param Collection $currencies
     * @return CountryInterface
     * @throws InvalidCurrencyCodeException
     */
    public function setCurrencies(Collection $currencies): CountryInterface
    {
        $collection = new Collection();
        foreach ($currencies as $currencyCode) {
            $collection->push(Currency::make($currencyCode));
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

    public function toArray(): array
    {
        return [
            'continent' => $this->getContinent()->toArray(),
            'name' => $this->getName()->value,
            'capital' => $this->getCapital()->value,
            'code' => $this->getCode()->value,
            'alpha3_code' => $this->getAlpha3Code(),
            'dial_code' => $this->getDialCode(),
            'tld' => $this->getTld(),
            'date_format' => $this->getDateFormat(),
            'flag' => $this->getFlag()->value,
            'default_currency' => $this->getDefaultCurrency()->toArray(),
            'default_timezone' => $this->getDefaultTimezone()->toArray(),
            'default_language' => $this->getDefaultLanguage()->toArray(),
            'currencies' => $this->getCurrencies()->map(function (Currency $currency) {
                return $currency->toArray();
            })->toArray(),
            'timezones' => $this->getTimezones()->map(function (Timezone $timezone) {
                return $timezone->toArray();
            })->toArray(),
            'languages' => $this->getLanguages()->map(function (Language $language) {
                return $language->toArray();
            })->toArray(),
        ];
    }
}
