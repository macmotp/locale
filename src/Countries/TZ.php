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
 * Tanzania
 */
final class TZ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::TANZANIA);
        $this->setCapital('Dodoma');
        $this->setCode(Country::TZ);
        $this->setAlpha3Code('TZA');
        $this->setDialCode('+255');
        $this->setTld('.tz');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::TZS);
        $this->setDefaultTimezone(Timezone::AFRICA_DAR_ES_SALAAM);
        $this->setDefaultLanguage(Language::SWAHILI);
        $this->setCurrencies(new Collection([Currency::TZS,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_DAR_ES_SALAAM,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::SWAHILI,]));
    }
}
