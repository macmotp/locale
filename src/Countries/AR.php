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
 * Argentina
 */
final class AR extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::SOUTH_AMERICA);
        $this->setName(Country::ARGENTINA);
        $this->setCapital('Buenos Aires');
        $this->setCode(Country::AR);
        $this->setAlpha3Code('ARG');
        $this->setDialCode('+54');
        $this->setTld('.ar');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::ARS);
        $this->setDefaultTimezone(Timezone::AMERICA_ARGENTINA_BUENOS_AIRES);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::ARS,]));
        $this->setTimezones(new Collection([
            Timezone::AMERICA_ARGENTINA_BUENOS_AIRES,
            Timezone::AMERICA_ARGENTINA_CATAMARCA,
            Timezone::AMERICA_ARGENTINA_CORDOBA,
            Timezone::AMERICA_ARGENTINA_JUJUY,
            Timezone::AMERICA_ARGENTINA_LA_RIOJA,
            Timezone::AMERICA_ARGENTINA_MENDOZA,
            Timezone::AMERICA_ARGENTINA_RIO_GALLEGOS,
            Timezone::AMERICA_ARGENTINA_SALTA,
            Timezone::AMERICA_ARGENTINA_SAN_JUAN,
            Timezone::AMERICA_ARGENTINA_SAN_LUIS,
            Timezone::AMERICA_ARGENTINA_TUCUMAN,
            Timezone::AMERICA_ARGENTINA_USHUAIA,
        ]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
