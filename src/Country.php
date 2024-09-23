<?php

declare(strict_types=1);

namespace Macmotp;

use Macmotp\Countries\Support\Collection;
use Macmotp\Countries\Support\Context;
use Macmotp\Countries\Support\CountryInterface;

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

    private CountryInterface $country;

    /**
     * @param string $code
     */
    public function __construct(private readonly string $code)
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
        return $this->country->getContinent();
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->country->getName();
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
