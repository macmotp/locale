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
 * Macao
 */
final class MO extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::MACAO);
        $this->setCapital('Macao');
        $this->setCode(Country::MO);
        $this->setAlpha3Code('MAC');
        $this->setDialCode('+853');
        $this->setTld('.mo');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MOP);
        $this->setDefaultTimezone(Timezone::ASIA_MACAU);
        $this->setDefaultLanguage(Language::CHINESE);
        $this->setCurrencies(new Collection([Currency::MOP,]));
        $this->setTimezones(new Collection([Timezone::ASIA_MACAU,]));
        $this->setLanguages(new Collection([Language::CHINESE, Language::PORTUGUESE, ]));
    }
}
