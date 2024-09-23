<?php

namespace Macmotp\Countries;

use Macmotp\Continent;
use Macmotp\Countries\Support\AbstractCountry;
use Macmotp\Countries\Support\Collection;
use Macmotp\Countries\Support\CountryInterface;
use Macmotp\Country;
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
        $this->setName('Antigua and Barbuda');
        $this->setCapital('St. John\'s');
        $this->setCode(Country::AG);
        $this->setAlpha3Code('ATG');
        $this->setDialCode('+1268');
        $this->setTld('.ag');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency('XCD');
        $this->setDefaultTimezone(Timezone::AMERICA_ANTIGUA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([
            'XCD',
        ]));
        $this->setTimezones(new Collection([
            Timezone::AMERICA_ANTIGUA,
        ]));
        $this->setLanguages(new Collection([
            Language::ENGLISH,
        ]));
    }
}
