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
 * Slovenia
 */
final class SI extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::SLOVENIA);
        $this->setCapital('Ljubljana');
        $this->setCode(Country::SI);
        $this->setAlpha3Code('SVN');
        $this->setDialCode('+386');
        $this->setTld('.si');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_LJUBLJANA);
        $this->setDefaultLanguage(Language::SLOVENIAN);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_LJUBLJANA,]));
        $this->setLanguages(new Collection([Language::SLOVENIAN,]));
    }
}
