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
 *  Brunei
 */
final class BN extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::BRUNEI);
        $this->setCapital('Bandar Seri Begawan');
        $this->setCode(Country::BN);
        $this->setAlpha3Code('BRN');
        $this->setDialCode('+673');
        $this->setTld('.bn');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::BND);
        $this->setDefaultTimezone(Timezone::ASIA_BRUNEI);
        $this->setDefaultLanguage(Language::MALAY);
        $this->setCurrencies(new Collection([
            Currency::BND,
            Currency::SGD,
        ]));
        $this->setTimezones(new Collection([Timezone::ASIA_BRUNEI,]));
        $this->setLanguages(new Collection([Language::MALAY,]));
    }
}
