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
 * Antigua and Barbuda
 */
final class AG extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::ANTIGUA_AND_BARBUDA);
        $this->setCapital('Saint John\'s');
        $this->setCode(Country::AG);
        $this->setAlpha3Code('ATG');
        $this->setDialCode('+1268');
        $this->setTld('.ag');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XCD);
        $this->setDefaultTimezone(Timezone::AMERICA_ANTIGUA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::XCD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_ANTIGUA,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
