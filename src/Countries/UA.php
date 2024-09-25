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
 * Ukraine
 */
final class UA extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::UKRAINE);
        $this->setCapital('Kyiv');
        $this->setCode(Country::UA);
        $this->setAlpha3Code('UKR');
        $this->setDialCode('+380');
        $this->setTld('.ua');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::UAH);
        $this->setDefaultTimezone(Timezone::EUROPE_KYIV);
        $this->setDefaultLanguage(Language::UKRAINIAN);
        $this->setCurrencies(new Collection([Currency::UAH,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_KYIV,]));
        $this->setLanguages(new Collection([Language::UKRAINIAN,]));
    }
}
