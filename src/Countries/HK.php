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
 *  Hong Kong
 */
final class HK extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::HONG_KONG);
        $this->setCapital('Hong Kong');
        $this->setCode(Country::HK);
        $this->setAlpha3Code('HKG');
        $this->setDialCode('+852');
        $this->setTld('.hk');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::HKD);
        $this->setDefaultTimezone(Timezone::ASIA_HONG_KONG);
        $this->setDefaultLanguage(Language::CANTONESE);
        $this->setCurrencies(new Collection([Currency::HKD,]));
        $this->setTimezones(new Collection([Timezone::ASIA_HONG_KONG,]));
        $this->setLanguages(new Collection([Language::CANTONESE, Language::CHINESE,]));
    }
}
