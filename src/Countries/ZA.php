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
 * South Africa
 */
final class ZA extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::SOUTH_AFRICA);
        $this->setCapital('Pretoria');
        $this->setCode(Country::ZA);
        $this->setAlpha3Code('ZAF');
        $this->setDialCode('+27');
        $this->setTld('.za');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::ZAR);
        $this->setDefaultTimezone(Timezone::AFRICA_JOHANNESBURG);
        $this->setDefaultLanguage(Language::AFRIKAANS);
        $this->setCurrencies(new Collection([Currency::ZAR,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_JOHANNESBURG,]));
        $this->setLanguages(new Collection([
            Language::AFRIKAANS,
            Language::ENGLISH,
            Language::NDEBELE,
            Language::SEPEDI,
            Language::SESOTHO,
            Language::SWAZI,
            Language::TSONGA,
            Language::TSWANA,
            Language::VENDA,
            Language::XHOSA,
            Language::ZULU,
        ]));
    }
}
