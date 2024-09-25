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
 *  China
 */
final class CN extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::CHINA);
        $this->setCapital('Beijing');
        $this->setCode(Country::CN);
        $this->setAlpha3Code('CHN');
        $this->setDialCode('+86');
        $this->setTld('.cn');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::CNY);
        $this->setDefaultTimezone(Timezone::ASIA_SHANGHAI);
        $this->setDefaultLanguage(Language::CHINESE);
        $this->setCurrencies(new Collection([Currency::CNY,]));
        $this->setTimezones(new Collection([
            Timezone::ASIA_SHANGHAI,
            Timezone::ASIA_URUMQI,
        ]));
        $this->setLanguages(new Collection([Language::CHINESE,]));
    }
}
