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
 *  India
 */
final class IN extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::INDIA);
        $this->setCapital('New Delhi');
        $this->setCode(Country::IN);
        $this->setAlpha3Code('IND');
        $this->setDialCode('+91');
        $this->setTld('.in');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::INR);
        $this->setDefaultTimezone(Timezone::ASIA_KOLKATA);
        $this->setDefaultLanguage(Language::HINDI);
        $this->setCurrencies(new Collection([Currency::INR,]));
        $this->setTimezones(new Collection([Timezone::ASIA_KOLKATA,]));
        $this->setLanguages(new Collection([
            Language::ASSAMESE,
            Language::BENGALI,
            Language::ENGLISH,
            Language::GUJARATI,
            Language::HINDI,
            Language::NEPALI,
            Language::PUNJABI,
            Language::TAMIL,
            Language::URDU,
        ]));
    }
}
