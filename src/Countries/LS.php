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
 * Lesotho
 */
final class LS extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::LESOTHO);
        $this->setCapital('Maseru');
        $this->setCode(Country::LS);
        $this->setAlpha3Code('LSO');
        $this->setDialCode('+266');
        $this->setTld('.ls');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::LSL);
        $this->setDefaultTimezone(Timezone::AFRICA_MASERU);
        $this->setDefaultLanguage(Language::SESOTHO);
        $this->setCurrencies(new Collection([Currency::LSL,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_MASERU,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::SESOTHO,]));
    }
}
