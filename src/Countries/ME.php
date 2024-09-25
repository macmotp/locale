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
 * Montenegro
 */
final class ME extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::MONTENEGRO);
        $this->setCapital('Podgorica');
        $this->setCode(Country::ME);
        $this->setAlpha3Code('MNE');
        $this->setDialCode('+382');
        $this->setTld('.me');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_PODGORICA);
        $this->setDefaultLanguage(Language::MONTENEGRIN);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_PODGORICA,]));
        $this->setLanguages(new Collection([
            Language::ALBANIAN,
            Language::BOSNIAN,
            Language::CROATIAN,
            Language::MONTENEGRIN,
            Language::SERBIAN,
        ]));
    }
}
