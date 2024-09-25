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
 * Turkey
 */
final class TR extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::TURKEY);
        $this->setCapital('Ankara');
        $this->setCode(Country::TR);
        $this->setAlpha3Code('TUR');
        $this->setDialCode('+90');
        $this->setTld('.tr');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::TRY);
        $this->setDefaultTimezone(Timezone::EUROPE_ISTANBUL);
        $this->setDefaultLanguage(Language::TURKISH);
        $this->setCurrencies(new Collection([Currency::TRY,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_ISTANBUL,]));
        $this->setLanguages(new Collection([Language::TURKISH,]));
    }
}
