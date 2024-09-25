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
 *  British Indian Ocean Territory
 */
final class IO extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::BRITISH_INDIAN_OCEAN_TERRITORY);
        $this->setCapital('Diego Garcia');
        $this->setCode(Country::IO);
        $this->setAlpha3Code('IOT');
        $this->setDialCode('+246');
        $this->setTld('.io');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::INDIAN_CHAGOS);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([Timezone::INDIAN_CHAGOS,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
