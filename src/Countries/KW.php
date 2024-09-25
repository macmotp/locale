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
 * Kuwait
 */
final class KW extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::KUWAIT);
        $this->setCapital('Kuwait City');
        $this->setCode(Country::KW);
        $this->setAlpha3Code('KWT');
        $this->setDialCode('+965');
        $this->setTld('.kw');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::KWD);
        $this->setDefaultTimezone(Timezone::ASIA_KUWAIT);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::KWD,]));
        $this->setTimezones(new Collection([Timezone::ASIA_KUWAIT,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
