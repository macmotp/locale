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
 * Mali
 */
final class ML extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::MALI);
        $this->setCapital('Bamako');
        $this->setCode(Country::ML);
        $this->setAlpha3Code('MLI');
        $this->setDialCode('+223');
        $this->setTld('.ml');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XOF);
        $this->setDefaultTimezone(Timezone::AFRICA_BAMAKO);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::XOF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_BAMAKO,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
