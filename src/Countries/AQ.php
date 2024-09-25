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
 * Antarctica
 */
final class AQ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ANTARCTICA);
        $this->setName(Country::ANTARCTICA);
        $this->setCapital('N/A'); // No official capital
        $this->setCode(Country::AQ);
        $this->setAlpha3Code('ATA');
        $this->setDialCode('N/A'); // No telephone dialing code
        $this->setTld('.aq');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::USD); // No official currency
        $this->setDefaultTimezone(Timezone::ANTARCTICA_PALMER);
        $this->setDefaultLanguage(Language::ENGLISH); // No official language
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([
            Timezone::ANTARCTICA_CASEY,
            Timezone::ANTARCTICA_DAVIS,
            Timezone::ANTARCTICA_DUMONT_D_URVILLE,
            Timezone::ANTARCTICA_MACQUARIE,
            Timezone::ANTARCTICA_MAWSON,
            Timezone::ANTARCTICA_MC_MURDO,
            Timezone::ANTARCTICA_PALMER,
            Timezone::ANTARCTICA_ROTHERA,
            Timezone::ANTARCTICA_SYOWA,
            Timezone::ANTARCTICA_TROLL,
            Timezone::ANTARCTICA_VOSTOK,
        ]));
        $this->setLanguages(new Collection([Language::ENGLISH,])); // No official languages
    }
}
