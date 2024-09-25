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
 * Zambia
 */
final class ZM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::ZAMBIA);
        $this->setCapital('Lusaka');
        $this->setCode(Country::ZM);
        $this->setAlpha3Code('ZMB');
        $this->setDialCode('+260');
        $this->setTld('.zm');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::ZMW);
        $this->setDefaultTimezone(Timezone::AFRICA_LUSAKA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::ZMW,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_LUSAKA,]));
        $this->setLanguages(new Collection([
            Language::BEMBA,
            Language::CHEWA,
            Language::ENGLISH,
        ]));
    }
}
