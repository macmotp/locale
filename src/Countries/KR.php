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
 * South Korea
 */
final class KR extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::SOUTH_KOREA);
        $this->setCapital('Seoul');
        $this->setCode(Country::KR);
        $this->setAlpha3Code('KOR');
        $this->setDialCode('+82');
        $this->setTld('.kr');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::KRW);
        $this->setDefaultTimezone(Timezone::ASIA_SEOUL);
        $this->setDefaultLanguage(Language::KOREAN);
        $this->setCurrencies(new Collection([Currency::KRW,]));
        $this->setTimezones(new Collection([Timezone::ASIA_SEOUL,]));
        $this->setLanguages(new Collection([Language::KOREAN,]));
    }
}
