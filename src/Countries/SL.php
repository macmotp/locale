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
 * Sierra Leone
 */
final class SL extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::SIERRA_LEONE);
        $this->setCapital('Freetown');
        $this->setCode(Country::SL);
        $this->setAlpha3Code('SLE');
        $this->setDialCode('+232');
        $this->setTld('.sl');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::SLE);
        $this->setDefaultTimezone(Timezone::AFRICA_FREETOWN);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::SLE,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_FREETOWN,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
