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
 * Niue
 */
final class NU extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::NIUE);
        $this->setCapital('Alofi');
        $this->setCode(Country::NU);
        $this->setAlpha3Code('NIU');
        $this->setDialCode('+683');
        $this->setTld('.nu');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::NZD);
        $this->setDefaultTimezone(Timezone::PACIFIC_NIUE);
        $this->setDefaultLanguage(Language::NIUEAN);
        $this->setCurrencies(new Collection([Currency::NZD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_NIUE,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::NIUEAN]));
    }
}
