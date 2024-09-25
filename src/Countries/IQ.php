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
 *  Iraq
 */
final class IQ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::IRAQ);
        $this->setCapital('Baghdad');
        $this->setCode(Country::IQ);
        $this->setAlpha3Code('IRQ');
        $this->setDialCode('+964');
        $this->setTld('.iq');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::IQD);
        $this->setDefaultTimezone(Timezone::ASIA_BAGHDAD);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::IQD,]));
        $this->setTimezones(new Collection([Timezone::ASIA_BAGHDAD,]));
        $this->setLanguages(new Collection([Language::ARABIC, Language::KURDISH,]));
    }
}
