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
 *  Bahamas
 */
final class BS extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::BAHAMAS);
        $this->setCapital('Nassau');
        $this->setCode(Country::BS);
        $this->setAlpha3Code('BHS');
        $this->setDialCode('+1242');
        $this->setTld('.bs');
        $this->setDateFormat('d/m/Y');
        $this->setDefaultCurrency(Currency::BSD);
        $this->setDefaultTimezone(Timezone::AMERICA_NASSAU);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::BSD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_NASSAU,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
