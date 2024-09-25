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
 * Aruba
 */
final class AW extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::ARUBA);
        $this->setCapital('Oranjestad');
        $this->setCode(Country::AW);
        $this->setAlpha3Code('ABW');
        $this->setDialCode('+297');
        $this->setTld('.aw');
        $this->setDateFormat('d/m/Y');
        $this->setDefaultCurrency(Currency::AWG);
        $this->setDefaultTimezone(Timezone::AMERICA_ARUBA);
        $this->setDefaultLanguage(Language::DUTCH);
        $this->setCurrencies(new Collection([Currency::AWG,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_ARUBA,]));
        $this->setLanguages(new Collection([Language::DUTCH, Language::PAPIAMENTO]));
    }
}
