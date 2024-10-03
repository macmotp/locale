<?php

declare(strict_types=1);

namespace Macmotp;

use Macmotp\Countries\Exceptions\InvalidCountryCodeException;
use Macmotp\Countries\Support\Collection;
use Macmotp\Countries\Support\CountryCode;
use Macmotp\Countries\Support\CountryFactory;
use Macmotp\Countries\Support\CountryInterface;
use Macmotp\Locales\Exceptions\InvalidLocaleCodeException;
use Macmotp\Locales\Support\LocaleCode;
use Macmotp\Locales\Support\LocaleFactory;
use Macmotp\Locales\Support\LocaleInterface;

/**
 * Class Country
 */
class Country
{
    private CountryInterface $country;
    private LocaleInterface $locale;

    /**
     * $code is alpha2 ISO code
     *
     * Example: $country = new Country(Country::US);
     *
     * @param CountryCode|string $code
     * @throws InvalidCountryCodeException
     * @throws InvalidLocaleCodeException
     */
    public function __construct(private readonly CountryCode|string $code)
    {
        $this->country = CountryFactory::create($code);
        $this->locale = LocaleFactory::create(LocaleCode::ENGLISH);
    }

    /**
     * Usage: Country::make(Country::US);
     *
     * @param CountryCode|string $code
     *
     * @return Country
     * @throws InvalidCountryCodeException
     * @throws InvalidLocaleCodeException
     */
    public static function make(CountryCode|string $code): self
    {
        return new self($code);
    }

    /**
     * Set Locale
     *
     * @param LocaleCode|string $localeCode
     * @return $this
     * @throws InvalidLocaleCodeException
     */
    public function setLocale(LocaleCode|string $localeCode): self
    {
        $this->locale = LocaleFactory::create($localeCode);

        return $this;
    }

    /**
     * Get Continent
     *
     * @return string
     */
    public function getContinent(): string
    {
        return $this->locale->translateContinent($this->country->getContinent()->getName());
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->locale->translateCountry($this->country->getName());
    }

    /**
     * Get Capital
     *
     * @return string
     */
    public function getCapital(): string
    {
        return $this->locale->translateCapital($this->country->getCapital());
    }

    /**
     * Get Code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->country->getCode()->value;
    }

    /**
     * Get Alpha3 Code
     *
     * @return string
     */
    public function getAlpha3Code(): string
    {
        return $this->country->getAlpha3Code();
    }

    /**
     * Get Dial Code
     *
     * @return string
     */
    public function getDialCode(): string
    {
        return $this->country->getDialCode();
    }

    /**
     * Get Tld
     *
     * @return string
     */
    public function getTld(): string
    {
        return $this->country->getTld();
    }

    /**
     * Get Date Format
     *
     * @return string
     */
    public function getDateFormat(): string
    {
        return $this->country->getDateFormat();
    }

    /**
     * Get Flag
     *
     * @return string
     */
    public function getFlag(): string
    {
        return $this->country->getFlag()->value;
    }

    /**
     * Get Default Currency
     *
     * @return Currency
     */
    public function getDefaultCurrency(): Currency
    {
        return $this->country->getDefaultCurrency();
    }

    /**
     * Get Default Timezone
     *
     * @return Timezone
     */
    public function getDefaultTimezone(): Timezone
    {
        return $this->country->getDefaultTimezone();
    }

    /**
     * Get Default Language
     *
     * @return Language
     */
    public function getDefaultLanguage(): Language
    {
        return $this->country->getDefaultLanguage();
    }

    /**
     * Get Currencies
     *
     * @return Collection
     */
    public function getCurrencies(): Collection
    {
        return $this->country->getCurrencies();
    }

    /**
     * Get Timezones
     *
     * @return Collection
     */
    public function getTimezones(): Collection
    {
        return $this->country->getTimezones();
    }

    /**
     * Get Languages
     *
     * @return Collection
     */
    public function getLanguages(): Collection
    {
        return $this->country->getLanguages();
    }

    /**
     * Transform object to array
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'continent' => $this->getContinent(),
            'name' => $this->getName(),
            'capital' => $this->getCapital(),
            'code' => $this->getCode(),
            'alpha3_code' => $this->getAlpha3Code(),
            'dial_code' => $this->getDialCode(),
            'tld' => $this->getTld(),
            'date_format' => $this->getDateFormat(),
            'flag' => $this->getFlag(),
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

    /**
     * Get all Countries
     *
     * @return Collection
     * @throws InvalidCountryCodeException
     */
    public static function all(): Collection
    {
        $collection = new Collection();

        foreach (CountryCode::cases() as $code) {
            $collection->push(CountryFactory::create($code));
        }

        return $collection;
    }
}
