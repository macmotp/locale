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
 * Tonga
 */
final class TO extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::TONGA);
        $this->setCapital('Nuku\'alofa');
        $this->setCode(Country::TO);
        $this->setAlpha3Code('TON');
        $this->setDialCode('+676');
        $this->setTld('.to');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::TOP);
        $this->setDefaultTimezone(Timezone::PACIFIC_TONGATAPU);
        $this->setDefaultLanguage(Language::TONGAN);
        $this->setCurrencies(new Collection([Currency::TOP,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_TONGATAPU,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::TONGAN,]));
    }
}
