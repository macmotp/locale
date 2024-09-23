<?php

namespace Macmotp\Countries;

use Macmotp\Continent;
use Macmotp\Countries\Support\AbstractCountry;
use Macmotp\Countries\Support\Collection;
use Macmotp\Countries\Support\CountryInterface;
use Macmotp\Country;
use Macmotp\Language;
use Macmotp\Timezone;

/**
 * Afghanistan
 */
final class AF extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName('Afghanistan');
        $this->setCapital('Kabul');
        $this->setCode(Country::AF);
        $this->setAlpha3Code('AFG');
        $this->setDialCode('+93');
        $this->setTld('.af');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency('AFN');
        $this->setDefaultTimezone(Timezone::ASIA_KABUL);
        $this->setDefaultLanguage(Language::PERSIAN);
        $this->setCurrencies(new Collection([
            'AFN',
        ]));
        $this->setTimezones(new Collection([
            Timezone::ASIA_KABUL,
        ]));
        $this->setLanguages(new Collection([
            Language::PERSIAN,
            Language::PASHTO,
        ]));
    }
}
