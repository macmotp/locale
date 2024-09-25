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
 *  Western Sahara
 */
final class EH extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::WESTERN_SAHARA);
        $this->setCapital('El Aaiún');
        $this->setCode(Country::EH);
        $this->setAlpha3Code('ESH');
        $this->setDialCode('+212');
        $this->setTld('.eh');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MAD);
        $this->setDefaultTimezone(Timezone::AFRICA_EL_AAIUN);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::MAD,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_EL_AAIUN,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
