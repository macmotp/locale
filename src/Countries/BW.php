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
 *  Botswana
 */
final class BW extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::BOTSWANA);
        $this->setCapital('Gaborone');
        $this->setCode(Country::BW);
        $this->setAlpha3Code('BWA');
        $this->setDialCode('+267');
        $this->setTld('.bw');
        $this->setDateFormat('d/m/Y');
        $this->setDefaultCurrency(Currency::BWP);
        $this->setDefaultTimezone(Timezone::AFRICA_GABORONE);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::BWP,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_GABORONE,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::TSWANA,]));
    }
}
