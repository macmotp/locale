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
 * Madagascar
 */
final class MG extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::MADAGASCAR);
        $this->setCapital('Antananarivo');
        $this->setCode(Country::MG);
        $this->setAlpha3Code('MDG');
        $this->setDialCode('+261');
        $this->setTld('.mg');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MGA);
        $this->setDefaultTimezone(Timezone::INDIAN_ANTANANARIVO);
        $this->setDefaultLanguage(Language::MALAGASY);
        $this->setCurrencies(new Collection([Currency::MGA,]));
        $this->setTimezones(new Collection([Timezone::INDIAN_ANTANANARIVO,]));
        $this->setLanguages(new Collection([Language::MALAGASY, Language::FRENCH,]));
    }
}
