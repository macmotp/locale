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
 * Myanmar
 */
final class MM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::MYANMAR);
        $this->setCapital('Naypyidaw');
        $this->setCode(Country::MM);
        $this->setAlpha3Code('MMR');
        $this->setDialCode('+95');
        $this->setTld('.mm');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MMK);
        $this->setDefaultTimezone(Timezone::ASIA_YANGON);
        $this->setDefaultLanguage(Language::BURMESE);
        $this->setCurrencies(new Collection([Currency::MMK,]));
        $this->setTimezones(new Collection([Timezone::ASIA_YANGON,]));
        $this->setLanguages(new Collection([Language::BURMESE,]));
    }
}
