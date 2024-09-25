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
 * Wallis and Futuna
 */
final class WF extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::WALLIS_AND_FUTUNA);
        $this->setCapital('Mata-Utu');
        $this->setCode(Country::WF);
        $this->setAlpha3Code('WLF');
        $this->setDialCode('+681');
        $this->setTld('.wf');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XPF);
        $this->setDefaultTimezone(Timezone::PACIFIC_WALLIS);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::XPF,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_WALLIS,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
