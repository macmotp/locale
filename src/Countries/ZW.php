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
 * Zimbabwe
 */
final class ZW extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::ZIMBABWE);
        $this->setCapital('Harare');
        $this->setCode(Country::ZW);
        $this->setAlpha3Code('ZWE');
        $this->setDialCode('+263');
        $this->setTld('.zw');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::ZWG);
        $this->setDefaultTimezone(Timezone::AFRICA_HARARE);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::ZWG,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_HARARE,]));
        $this->setLanguages(new Collection([
            Language::CHEWA,
            Language::ENGLISH,
            Language::KALANGA,
            Language::NAMBYA,
            Language::NDAU,
            Language::NDEBELE,
            Language::SHONA,
            Language::SENA,
            Language::SESOTHO,
            Language::TONGA,
            Language::TSONGA,
            Language::TSWANA,
            Language::VENDA,
            Language::XHOSA,
        ]));
    }
}
