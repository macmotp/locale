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
 * Namibia
 */
final class NA extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::NAMIBIA);
        $this->setCapital('Windhoek');
        $this->setCode(Country::NA);
        $this->setAlpha3Code('NAM');
        $this->setDialCode('+264');
        $this->setTld('.na');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::NAD);
        $this->setDefaultTimezone(Timezone::AFRICA_WINDHOEK);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::NAD,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_WINDHOEK,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
