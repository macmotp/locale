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
 * United States of America
 */
final class US extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::UNITED_STATES_OF_AMERICA);
        $this->setCapital('Washington, D.C.');
        $this->setCode(Country::US);
        $this->setAlpha3Code('USA');
        $this->setDialCode('+1');
        $this->setTld('.us');
        $this->setDateFormat('m-d-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::AMERICA_NEW_YORK);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([
            Timezone::AMERICA_ADAK,
            Timezone::AMERICA_ANCHORAGE,
            Timezone::AMERICA_BOISE,
            Timezone::AMERICA_CHICAGO,
            Timezone::AMERICA_DENVER,
            Timezone::AMERICA_DETROIT,
            Timezone::AMERICA_INDIANA_INDIANAPOLIS,
            Timezone::AMERICA_INDIANA_KNOX,
            Timezone::AMERICA_INDIANA_MARENGO,
            Timezone::AMERICA_INDIANA_PETERSBURG,
            Timezone::AMERICA_INDIANA_TELL_CITY,
            Timezone::AMERICA_INDIANA_VEVAY,
            Timezone::AMERICA_INDIANA_VINCENNES,
            Timezone::AMERICA_INDIANA_WINAMAC,
            Timezone::AMERICA_JUNEAU,
            Timezone::AMERICA_KENTUCKY_LOUISVILLE,
            Timezone::AMERICA_KENTUCKY_MONTICELLO,
            Timezone::AMERICA_LOS_ANGELES,
            Timezone::AMERICA_MENOMINEE,
            Timezone::AMERICA_METLAKATLA,
            Timezone::AMERICA_NEW_YORK,
            Timezone::AMERICA_NOME,
            Timezone::AMERICA_NORTH_DAKOTA_BEULAH,
            Timezone::AMERICA_NORTH_DAKOTA_CENTER,
            Timezone::AMERICA_NORTH_DAKOTA_NEW_SALEM,
            Timezone::AMERICA_PHOENIX,
            Timezone::AMERICA_SITKA,
            Timezone::AMERICA_YAKUTAT,
            Timezone::PACIFIC_HONOLULU,
        ]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
