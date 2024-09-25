<?php

namespace Macmotp\Countries;

use Macmotp\Continent;
use Macmotp\Countries\Support\AbstractCountry;
use Macmotp\Countries\Support\Collection;
use Macmotp\Countries\Support\CountryInterface;
use Macmotp\Country;
use Macmotp\Currency;
use Macmotp\Language;
use Macmotp\Timezone;

/**
 * Uzbekistan
 */
final class UZ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::UZBEKISTAN);
        $this->setCapital('Tashkent');
        $this->setCode(Country::UZ);
        $this->setAlpha3Code('UZB');
        $this->setDialCode('+998');
        $this->setTld('.uz');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::UZS);
        $this->setDefaultTimezone(Timezone::ASIA_TASHKENT);
        $this->setDefaultLanguage(Language::UZBEK);
        $this->setCurrencies(new Collection([Currency::UZS,]));
        $this->setTimezones(new Collection([Timezone::ASIA_SAMARKAND, Timezone::ASIA_TASHKENT,]));
        $this->setLanguages(new Collection([Language::UZBEK,]));
    }
}
