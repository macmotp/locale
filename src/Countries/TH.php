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
 * Thailand
 */
final class TH extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::THAILAND);
        $this->setCapital('Bangkok');
        $this->setCode(Country::TH);
        $this->setAlpha3Code('THA');
        $this->setDialCode('+66');
        $this->setTld('.th');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::THB);
        $this->setDefaultTimezone(Timezone::ASIA_BANGKOK);
        $this->setDefaultLanguage(Language::THAI);
        $this->setCurrencies(new Collection([Currency::THB,]));
        $this->setTimezones(new Collection([Timezone::ASIA_BANGKOK,]));
        $this->setLanguages(new Collection([Language::THAI,]));
    }
}
