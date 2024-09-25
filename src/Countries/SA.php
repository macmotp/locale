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
 * Saudi Arabia
 */
final class SA extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::SAUDI_ARABIA);
        $this->setCapital('Riyadh');
        $this->setCode(Country::SA);
        $this->setAlpha3Code('SAU');
        $this->setDialCode('+966');
        $this->setTld('.sa');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::SAR);
        $this->setDefaultTimezone(Timezone::ASIA_RIYADH);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::SAR,]));
        $this->setTimezones(new Collection([Timezone::ASIA_RIYADH,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
