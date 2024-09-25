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
 * Singapore
 */
final class SG extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::SINGAPORE);
        $this->setCapital('Singapore');
        $this->setCode(Country::SG);
        $this->setAlpha3Code('SGP');
        $this->setDialCode('+65');
        $this->setTld('.sg');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::SGD);
        $this->setDefaultTimezone(Timezone::ASIA_SINGAPORE);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::BND, Currency::SGD,]));
        $this->setTimezones(new Collection([Timezone::ASIA_SINGAPORE,]));
        $this->setLanguages(new Collection([
            Language::CHINESE,
            Language::ENGLISH,
            Language::MALAY,
            Language::TAMIL,
        ]));
    }
}
