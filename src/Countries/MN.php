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
 * Mongolia
 */
final class MN extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::MONGOLIA);
        $this->setCapital('Ulaanbaatar');
        $this->setCode(Country::MN);
        $this->setAlpha3Code('MNG');
        $this->setDialCode('+976');
        $this->setTld('.mn');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MNT);
        $this->setDefaultTimezone(Timezone::ASIA_ULAANBAATAR);
        $this->setDefaultLanguage(Language::MONGOLIAN);
        $this->setCurrencies(new Collection([Currency::MNT,]));
        $this->setTimezones(new Collection([
            Timezone::ASIA_CHOIBALSAN,
            Timezone::ASIA_HOVD,
            Timezone::ASIA_ULAANBAATAR,
        ]));
        $this->setLanguages(new Collection([Language::MONGOLIAN,]));
    }
}
