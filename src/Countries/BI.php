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
 *  Burundi
 */
final class BI extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::BURUNDI);
        $this->setCapital('Gitega');
        $this->setCode(Country::BI);
        $this->setAlpha3Code('BDI');
        $this->setDialCode('+257');
        $this->setTld('.bi');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::BIF);
        $this->setDefaultTimezone(Timezone::AFRICA_BUJUMBURA);
        $this->setDefaultLanguage(Language::RUNDI);
        $this->setCurrencies(new Collection([Currency::BIF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_BUJUMBURA,]));
        $this->setLanguages(new Collection([
            Language::ENGLISH,
            Language::FRENCH,
            Language::RUNDI,
            Language::SWAHILI,
        ]));
    }
}
