<?php

declare(strict_types=1);

namespace Macmotp;

use Macmotp\Countries\Support\Collection;
use Macmotp\Countries\Support\Context;
use Macmotp\Countries\Support\CountryInterface;
use Macmotp\Countries\Support\Translations\Translator;

/**
 * Class Country
 */
class Country
{
    public const AD = 'AD'; // Andorra
    public const AE = 'AE'; // United Arab Emirates
    public const AF = 'AF'; // Afghanistan
    public const AG = 'AG'; // Antigua and Barbuda
    public const AI = 'AI'; // Anguilla
    public const IT = 'IT'; // Italy
    public const US = 'US'; // United States of America

    public const ANDORRA = 'Andorra';
    public const AFGHANISTAN = 'Afghanistan';
    public const ANTIGUA_AND_BARBUDA = 'Antigua and Barbuda';
    public const ANGUILLA = 'Anguilla';
    public const ITALY = 'Italy';
    public const UNITED_STATES_OF_AMERICA = 'United States of America';
    public const UNITED_ARAB_EMIRATES = 'United Arab Emirates';

    private CountryInterface $country;

    /**
     * @param string $code
     * @param string $locale
     */
    public function __construct(
        private readonly string $code,
        private readonly string $locale = Language::ENGLISH,
    )
    {
        $this->country = Context::getFromCode($code);
    }

    /**
     * Get all the countries
     *
     * @return Collection
     */
    public static function all(): Collection
    {
        return Context::getAll();
    }

    /**
     * Get Continent
     *
     * @return string
     */
    public function getContinent(): string
    {
        return Translator::translate($this->country->getContinent(), $this->locale);
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return Translator::translate($this->country->getName(), $this->locale);
    }

    /**
     * Get Capital
     *
     * @return string
     */
    public function getCapital(): string
    {
        return $this->country->getCapital();
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
     * Get Default Currency
     *
     * @return string
     */
    public function getDefaultCurrency(): string
    {
        return $this->country->getDefaultCurrency();
    }

    /**
     * Get Default Timezone
     *
     * @return string
     */
    public function getDefaultTimezone(): string
    {
        return $this->country->getDefaultTimezone();
    }

    /**
     * Get Default Language
     *
     * @return string
     */
    public function getDefaultLanguage(): string
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
}
