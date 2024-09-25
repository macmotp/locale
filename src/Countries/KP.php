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
 * North Korea
 */
final class KP extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::NORTH_KOREA);
        $this->setCapital('Pyongyang');
        $this->setCode(Country::KP);
        $this->setAlpha3Code('PRK');
        $this->setDialCode('+850');
        $this->setTld('.kp');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::KPW);
        $this->setDefaultTimezone(Timezone::ASIA_PYONGYANG);
        $this->setDefaultLanguage(Language::KOREAN);
        $this->setCurrencies(new Collection([Currency::KPW,]));
        $this->setTimezones(new Collection([Timezone::ASIA_PYONGYANG,]));
        $this->setLanguages(new Collection([Language::KOREAN,]));
    }
}
