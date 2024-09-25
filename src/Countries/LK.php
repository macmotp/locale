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
 * Sri Lanka
 */
final class LK extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::SRI_LANKA);
        $this->setCapital('Colombo');
        $this->setCode(Country::LK);
        $this->setAlpha3Code('LKA');
        $this->setDialCode('+94');
        $this->setTld('.lk');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::LKR);
        $this->setDefaultTimezone(Timezone::ASIA_COLOMBO);
        $this->setDefaultLanguage(Language::SINHALA);
        $this->setCurrencies(new Collection([Currency::LKR,]));
        $this->setTimezones(new Collection([Timezone::ASIA_COLOMBO,]));
        $this->setLanguages(new Collection([Language::SINHALA, Language::TAMIL,]));
    }
}
