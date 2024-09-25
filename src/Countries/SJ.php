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
 * Svalbard and Jan Mayen
 */
final class SJ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::SVALBARD_AND_JAN_MAYEN);
        $this->setCapital('Longyearbyen');
        $this->setCode(Country::SJ);
        $this->setAlpha3Code('SJM');
        $this->setDialCode('+47');
        $this->setTld('.sj');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::NOK);
        $this->setDefaultTimezone(Timezone::ARCTIC_LONGYEARBYEN);
        $this->setDefaultLanguage(Language::NORWEGIAN);
        $this->setCurrencies(new Collection([Currency::NOK,]));
        $this->setTimezones(new Collection([Timezone::ARCTIC_LONGYEARBYEN,]));
        $this->setLanguages(new Collection([Language::NORWEGIAN,]));
    }
}
