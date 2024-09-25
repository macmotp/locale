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
 * Senegal
 */
final class SN extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::SENEGAL);
        $this->setCapital('Dakar');
        $this->setCode(Country::SN);
        $this->setAlpha3Code('SEN');
        $this->setDialCode('+221');
        $this->setTld('.sn');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XOF);
        $this->setDefaultTimezone(Timezone::AFRICA_DAKAR);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::XOF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_DAKAR,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
