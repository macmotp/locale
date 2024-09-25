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
 * Australia
 */
final class AU extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::AUSTRALIA);
        $this->setCapital('Canberra');
        $this->setCode(Country::AU);
        $this->setAlpha3Code('AUS');
        $this->setDialCode('+61');
        $this->setTld('.au');
        $this->setDateFormat('d/m/Y');
        $this->setDefaultCurrency(Currency::AUD);
        $this->setDefaultTimezone(Timezone::AUSTRALIA_SYDNEY);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::AUD,]));
        $this->setTimezones(new Collection([
            Timezone::ANTARCTICA_MACQUARIE,
            Timezone::AUSTRALIA_ADELAIDE,
            Timezone::AUSTRALIA_BRISBANE,
            Timezone::AUSTRALIA_BROKEN_HILL,
            Timezone::AUSTRALIA_DARWIN,
            Timezone::AUSTRALIA_EUCLA,
            Timezone::AUSTRALIA_HOBART,
            Timezone::AUSTRALIA_LINDEMAN,
            Timezone::AUSTRALIA_LORD_HOWE,
            Timezone::AUSTRALIA_MELBOURNE,
            Timezone::AUSTRALIA_PERTH,
            Timezone::AUSTRALIA_SYDNEY,
        ]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
