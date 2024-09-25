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
 *  Burkina Faso
 */
final class BF extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::BURKINA_FASO);
        $this->setCapital('Ouagadougou');
        $this->setCode(Country::BF);
        $this->setAlpha3Code('BFA');
        $this->setDialCode('+226');
        $this->setTld('.bf');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XOF);
        $this->setDefaultTimezone(Timezone::AFRICA_OUAGADOUGOU);
        $this->setDefaultLanguage(Language::MOORÉ);
        $this->setCurrencies(new Collection([Currency::XOF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_OUAGADOUGOU,]));
        $this->setLanguages(new Collection([
            Language::BISSA,
            Language::DYULA,
            Language::ENGLISH,
            Language::FRENCH,
            Language::FULAH,
            Language::MOORÉ,
        ]));
    }
}
