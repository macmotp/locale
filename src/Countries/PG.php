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
 * Papua New Guinea
 */
final class PG extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::PAPUA_NEW_GUINEA);
        $this->setCapital('Port Moresby');
        $this->setCode(Country::PG);
        $this->setAlpha3Code('PNG');
        $this->setDialCode('+675');
        $this->setTld('.pg');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::PGK);
        $this->setDefaultTimezone(Timezone::PACIFIC_PORT_MORESBY);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::PGK,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_PORT_MORESBY,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
