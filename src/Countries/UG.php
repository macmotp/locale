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
 * Uganda
 */
final class UG extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::UGANDA);
        $this->setCapital('Kampala');
        $this->setCode(Country::UG);
        $this->setAlpha3Code('UGA');
        $this->setDialCode('+256');
        $this->setTld('.ug');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::UGX);
        $this->setDefaultTimezone(Timezone::AFRICA_KAMPALA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::UGX,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_KAMPALA,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::SWAHILI,]));
    }
}
