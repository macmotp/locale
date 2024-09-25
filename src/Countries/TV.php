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
 * Tuvalu
 */
final class TV extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::TUVALU);
        $this->setCapital('Funafuti');
        $this->setCode(Country::TV);
        $this->setAlpha3Code('TUV');
        $this->setDialCode('+688');
        $this->setTld('.tv');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::AUD);
        $this->setDefaultTimezone(Timezone::PACIFIC_FUNAFUTI);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::AUD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_FUNAFUTI,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::TUVALUAN,]));
    }
}
