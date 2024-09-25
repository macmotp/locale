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
 *  Bhutan
 */
final class BT extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::BHUTAN);
        $this->setCapital('Thimphu');
        $this->setCode(Country::BT);
        $this->setAlpha3Code('BTN');
        $this->setDialCode('+975');
        $this->setTld('.bt');
        $this->setDateFormat('d/m/Y');
        $this->setDefaultCurrency(Currency::BTN);
        $this->setDefaultTimezone(Timezone::ASIA_THIMPHU);
        $this->setDefaultLanguage(Language::DZONGKHA);
        $this->setCurrencies(new Collection([Currency::BTN, Currency::INR,]));
        $this->setTimezones(new Collection([Timezone::ASIA_THIMPHU,]));
        $this->setLanguages(new Collection([Language::DZONGKHA,]));
    }
}
