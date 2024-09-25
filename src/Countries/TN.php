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
 * Tunisia
 */
final class TN extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::TUNISIA);
        $this->setCapital('Tunis');
        $this->setCode(Country::TN);
        $this->setAlpha3Code('TUN');
        $this->setDialCode('+216');
        $this->setTld('.tn');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::TND);
        $this->setDefaultTimezone(Timezone::AFRICA_TUNIS);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::TND,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_TUNIS,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
