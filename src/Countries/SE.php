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
 * Sweden
 */
final class SE extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::SWEDEN);
        $this->setCapital('Stockholm');
        $this->setCode(Country::SE);
        $this->setAlpha3Code('SWE');
        $this->setDialCode('+46');
        $this->setTld('.se');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::SEK);
        $this->setDefaultTimezone(Timezone::EUROPE_STOCKHOLM);
        $this->setDefaultLanguage(Language::SWEDISH);
        $this->setCurrencies(new Collection([Currency::SEK,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_STOCKHOLM,]));
        $this->setLanguages(new Collection([Language::SWEDISH,]));
    }
}
