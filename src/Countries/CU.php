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
 *  Cuba
 */
final class CU extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::CUBA);
        $this->setCapital('Havana');
        $this->setCode(Country::CU);
        $this->setAlpha3Code('CUB');
        $this->setDialCode('+53');
        $this->setTld('.cu');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::CUP);
        $this->setDefaultTimezone(Timezone::AMERICA_HAVANA);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::CUP,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_HAVANA,]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
