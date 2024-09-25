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
 * Kazakhstan
 */
final class KZ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::KAZAKHSTAN);
        $this->setCapital('Nur-Sultan');
        $this->setCode(Country::KZ);
        $this->setAlpha3Code('KAZ');
        $this->setDialCode('+7');
        $this->setTld('.kz');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::KZT);
        $this->setDefaultTimezone(Timezone::ASIA_ALMATY);
        $this->setDefaultLanguage(Language::KAZAKH);
        $this->setCurrencies(new Collection([Currency::KZT,]));
        $this->setTimezones(new Collection([
            Timezone::ASIA_ALMATY,
            Timezone::ASIA_AQTAU,
            Timezone::ASIA_AQTOBE,
            Timezone::ASIA_ATYRAU,
            Timezone::ASIA_ORAL,
            Timezone::ASIA_QOSTANAY,
            Timezone::ASIA_QYZYLORDA,
        ]));
        $this->setLanguages(new Collection([Language::KAZAKH, Language::RUSSIAN,]));
    }
}
