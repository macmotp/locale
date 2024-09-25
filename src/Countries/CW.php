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
 *  Curaçao
 */
final class CW extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::CURACAO);
        $this->setCapital('Willemstad');
        $this->setCode(Country::CW);
        $this->setAlpha3Code('CUW');
        $this->setDialCode('+599');
        $this->setTld('.cw');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::ANG);
        $this->setDefaultTimezone(Timezone::AMERICA_CURACAO);
        $this->setDefaultLanguage(Language::DUTCH);
        $this->setCurrencies(new Collection([Currency::ANG,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_CURACAO,]));
        $this->setLanguages(new Collection([Language::DUTCH,]));
    }
}
