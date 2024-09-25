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
 * Taiwan
 */
final class TW extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::TAIWAN);
        $this->setCapital('Taipei');
        $this->setCode(Country::TW);
        $this->setAlpha3Code('TWN');
        $this->setDialCode('+886');
        $this->setTld('.tw');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::TWD);
        $this->setDefaultTimezone(Timezone::ASIA_TAIPEI);
        $this->setDefaultLanguage(Language::CHINESE);
        $this->setCurrencies(new Collection([Currency::TWD,]));
        $this->setTimezones(new Collection([Timezone::ASIA_TAIPEI,]));
        $this->setLanguages(new Collection([Language::CHINESE,]));
    }
}
