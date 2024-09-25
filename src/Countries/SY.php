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
 * Syria
 */
final class SY extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::SYRIA);
        $this->setCapital('Damascus');
        $this->setCode(Country::SY);
        $this->setAlpha3Code('SYR');
        $this->setDialCode('+963');
        $this->setTld('.sy');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::SYP);
        $this->setDefaultTimezone(Timezone::ASIA_DAMASCUS);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::SYP,]));
        $this->setTimezones(new Collection([Timezone::ASIA_DAMASCUS,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
