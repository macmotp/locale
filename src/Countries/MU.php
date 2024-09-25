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
 * Mauritius
 */
final class MU extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::MAURITIUS);
        $this->setCapital('Port Louis');
        $this->setCode(Country::MU);
        $this->setAlpha3Code('MUS');
        $this->setDialCode('+230');
        $this->setTld('.mu');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MUR);
        $this->setDefaultTimezone(Timezone::INDIAN_MAURITIUS);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::MUR,]));
        $this->setTimezones(new Collection([Timezone::INDIAN_MAURITIUS,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::FRENCH,]));
    }
}
