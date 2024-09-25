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
 *  Democratic Republic of the Congo
 */
final class CD extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::DEMOCRATIC_REPUBLIC_OF_THE_CONGO);
        $this->setCapital('Kinshasa');
        $this->setCode(Country::CD);
        $this->setAlpha3Code('COD');
        $this->setDialCode('+243');
        $this->setTld('.cd');
        $this->setDateFormat('d/m/Y');
        $this->setDefaultCurrency(Currency::CDF);
        $this->setDefaultTimezone(Timezone::AFRICA_KINSHASA);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::CDF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_KINSHASA,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
