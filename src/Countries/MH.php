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
 * Marshall Islands
 */
final class MH extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::MARSHALL_ISLANDS);
        $this->setCapital('Majuro');
        $this->setCode(Country::MH);
        $this->setAlpha3Code('MHL');
        $this->setDialCode('+692');
        $this->setTld('.mh');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::PACIFIC_KWAJALEIN);
        $this->setDefaultLanguage(Language::MARSHALLESE);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([
            Timezone::PACIFIC_KWAJALEIN,
            Timezone::PACIFIC_MAJURO,
        ]));
        $this->setLanguages(new Collection([Language::MARSHALLESE, Language::ENGLISH,]));
    }
}
