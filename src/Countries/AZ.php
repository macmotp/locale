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
 * Azerbaijan
 */
final class AZ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::AZERBAIJAN);
        $this->setCapital('Baku');
        $this->setCode(Country::AZ);
        $this->setAlpha3Code('AZE');
        $this->setDialCode('+994');
        $this->setTld('.az');
        $this->setDateFormat('d.m.Y');
        $this->setDefaultCurrency(Currency::AZN);
        $this->setDefaultTimezone(Timezone::ASIA_BAKU);
        $this->setDefaultLanguage(Language::AZERBAIJANI);
        $this->setCurrencies(new Collection([Currency::AZN,]));
        $this->setTimezones(new Collection([Timezone::ASIA_BAKU,]));
        $this->setLanguages(new Collection([Language::AZERBAIJANI,]));
    }
}
