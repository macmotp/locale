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
 *  Cameroon
 */
final class CM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::CAMEROON);
        $this->setCapital('Yaoundé');
        $this->setCode(Country::CM);
        $this->setAlpha3Code('CMR');
        $this->setDialCode('+237');
        $this->setTld('.cm');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XAF);
        $this->setDefaultTimezone(Timezone::AFRICA_DOUALA);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::XAF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_DOUALA,]));
        $this->setLanguages(new Collection([Language::FRENCH, Language::ENGLISH,]));
    }
}
