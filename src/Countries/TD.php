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
 * Chad
 */
final class TD extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::CHAD);
        $this->setCapital('N\'Djamena');
        $this->setCode(Country::TD);
        $this->setAlpha3Code('TCD');
        $this->setDialCode('+235');
        $this->setTld('.td');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XAF);
        $this->setDefaultTimezone(Timezone::AFRICA_NDJAMENA);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::XAF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_NDJAMENA,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
