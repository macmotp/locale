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
 *  Bahrain
 */
final class BH extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::BAHRAIN);
        $this->setCapital('Manama');
        $this->setCode(Country::BH);
        $this->setAlpha3Code('BHR');
        $this->setDialCode('+973');
        $this->setTld('.bh');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::BHD);
        $this->setDefaultTimezone(Timezone::ASIA_BAHRAIN);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::BHD,]));
        $this->setTimezones(new Collection([Timezone::ASIA_BAHRAIN,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
