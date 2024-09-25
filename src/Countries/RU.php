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
 * Russia
 */
final class RU extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::RUSSIA);
        $this->setCapital('Moscow');
        $this->setCode(Country::RU);
        $this->setAlpha3Code('RUS');
        $this->setDialCode('+7');
        $this->setTld('.ru');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::RUB);
        $this->setDefaultTimezone(Timezone::EUROPE_MOSCOW);
        $this->setDefaultLanguage(Language::RUSSIAN);
        $this->setCurrencies(new Collection([Currency::RUB,]));
        $this->setTimezones(new Collection([
            Timezone::ASIA_ANADYR,
            Timezone::ASIA_BARNAUL,
            Timezone::ASIA_CHITA,
            Timezone::ASIA_IRKUTSK,
            Timezone::ASIA_KAMCHATKA,
            Timezone::ASIA_KHANDYGA,
            Timezone::ASIA_KRASNOYARSK,
            Timezone::ASIA_MAGADAN,
            Timezone::ASIA_NOVOKUZNETSK,
            Timezone::ASIA_NOVOSIBIRSK,
            Timezone::ASIA_OMSK,
            Timezone::ASIA_SAKHALIN,
            Timezone::ASIA_SREDNEKOLYMSK,
            Timezone::ASIA_TOMSK,
            Timezone::ASIA_UST_NERA,
            Timezone::ASIA_VLADIVOSTOK,
            Timezone::ASIA_YAKUTSK,
            Timezone::ASIA_YEKATERINBURG,
            Timezone::EUROPE_ASTRAKHAN,
            Timezone::EUROPE_KALININGRAD,
            Timezone::EUROPE_KIROV,
            Timezone::EUROPE_MOSCOW,
            Timezone::EUROPE_SAMARA,
            Timezone::EUROPE_SARATOV,
            Timezone::EUROPE_SIMFEROPOL,
            Timezone::EUROPE_ULYANOVSK,
            Timezone::EUROPE_VOLGOGRAD,
        ]));
        $this->setLanguages(new Collection([Language::RUSSIAN,]));
    }
}
