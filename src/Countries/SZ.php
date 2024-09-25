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
 * Eswatini
 */
final class SZ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::ESWATINI);
        $this->setCapital('Mbabane');
        $this->setCode(Country::SZ);
        $this->setAlpha3Code('SWZ');
        $this->setDialCode('+268');
        $this->setTld('.sz');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::SZL);
        $this->setDefaultTimezone(Timezone::AFRICA_MBABANE);
        $this->setDefaultLanguage(Language::SWAZI);
        $this->setCurrencies(new Collection([Currency::SZL,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_MBABANE,]));
        $this->setLanguages(new Collection([Language::SWAZI, Language::ENGLISH,]));
    }
}
