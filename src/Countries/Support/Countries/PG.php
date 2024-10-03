<?php

namespace Macmotp\Countries\Support\Countries;

use Macmotp\Continents\Support\ContinentCode;
use Macmotp\Countries\Support\AbstractCountry;
use Macmotp\Countries\Support\Collection;
use Macmotp\Countries\Support\CountryCapital;
use Macmotp\Countries\Support\CountryCode;
use Macmotp\Countries\Support\CountryFlag;
use Macmotp\Countries\Support\CountryInterface;
use Macmotp\Countries\Support\CountryName;
use Macmotp\Currencies\Exceptions\InvalidCurrencyCodeException;
use Macmotp\Currencies\Support\CurrencyCode;
use Macmotp\Languages\Exceptions\InvalidLanguageCodeException;
use Macmotp\Languages\Support\LanguageCode;
use Macmotp\Timezones\Exceptions\InvalidTimezoneCodeException;
use Macmotp\Timezones\Support\TimezoneCode;

/**
 * Papua New Guinea
 */
final class PG extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::PAPUA_NEW_GUINEA);
        $this->setCapital(CountryCapital::PORT_MORESBY);
        $this->setCode(CountryCode::PG);
        $this->setAlpha3Code('PNG');
        $this->setDialCode('+675');
        $this->setTld('.pg');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::PG);
        $this->setDefaultCurrency(CurrencyCode::PGK);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_PORT_MORESBY);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::PGK,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_PORT_MORESBY,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
