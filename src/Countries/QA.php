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
 * Qatar
 */
final class QA extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::QATAR);
        $this->setCapital('Doha');
        $this->setCode(Country::QA);
        $this->setAlpha3Code('QAT');
        $this->setDialCode('+974');
        $this->setTld('.qa');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::QAR);
        $this->setDefaultTimezone(Timezone::ASIA_QATAR);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::QAR,]));
        $this->setTimezones(new Collection([Timezone::ASIA_QATAR,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
