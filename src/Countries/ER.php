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
 *  Eritrea
 */
final class ER extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::ERITREA);
        $this->setCapital('Asmara');
        $this->setCode(Country::ER);
        $this->setAlpha3Code('ERI');
        $this->setDialCode('+291');
        $this->setTld('.er');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::ERN);
        $this->setDefaultTimezone(Timezone::AFRICA_ASMARA);
        $this->setDefaultLanguage(Language::TIGRINYA);
        $this->setCurrencies(new Collection([Currency::ERN,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_ASMARA,]));
        $this->setLanguages(new Collection([
            Language::ARABIC,
            Language::TIGRINYA,
            Language::TIGRE,
        ]));
    }
}
