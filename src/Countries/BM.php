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
 *  Bermuda
 */
final class BM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::BERMUDA);
        $this->setCapital('Hamilton');
        $this->setCode(Country::BM);
        $this->setAlpha3Code('BMU');
        $this->setDialCode('+1441');
        $this->setTld('.bm');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::BMD);
        $this->setDefaultTimezone(Timezone::ATLANTIC_BERMUDA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::BMD,]));
        $this->setTimezones(new Collection([Timezone::ATLANTIC_BERMUDA,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
