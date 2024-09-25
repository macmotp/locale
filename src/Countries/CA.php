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
 *  Canada
 */
final class CA extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::CANADA);
        $this->setCapital('Ottawa');
        $this->setCode(Country::CA);
        $this->setAlpha3Code('CAN');
        $this->setDialCode('+1');
        $this->setTld('.ca');
        $this->setDateFormat('d/m/Y');
        $this->setDefaultCurrency(Currency::CAD);
        $this->setDefaultTimezone(Timezone::AMERICA_TORONTO);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::CAD,]));
        $this->setTimezones(new Collection([
            Timezone::AMERICA_CAMBRIDGE_BAY,
            Timezone::AMERICA_DAWSON,
            Timezone::AMERICA_DAWSON_CREEK,
            Timezone::AMERICA_EDMONTON,
            Timezone::AMERICA_FORT_NELSON,
            Timezone::AMERICA_GLACE_BAY,
            Timezone::AMERICA_GOOSE_BAY,
            Timezone::AMERICA_HALIFAX,
            Timezone::AMERICA_INUVIK,
            Timezone::AMERICA_IQALUIT,
            Timezone::AMERICA_MONCTON,
            Timezone::AMERICA_RANKIN_INLET,
            Timezone::AMERICA_REGINA,
            Timezone::AMERICA_RESOLUTE,
            Timezone::AMERICA_ST_JOHNS,
            Timezone::AMERICA_SWIFT_CURRENT,
            Timezone::AMERICA_TORONTO,
            Timezone::AMERICA_VANCOUVER,
            Timezone::AMERICA_WHITEHORSE,
            Timezone::AMERICA_WINNIPEG,
        ]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::FRENCH,]));
    }
}
