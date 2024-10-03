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
 * Georgia
 */
final class GE extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::GEORGIA);
        $this->setCapital(CountryCapital::TBILISI);
        $this->setCode(CountryCode::GE);
        $this->setAlpha3Code('GEO');
        $this->setDialCode('+995');
        $this->setTld('.ge');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::GE);
        $this->setDefaultCurrency(CurrencyCode::GEL);
        $this->setDefaultTimezone(TimezoneCode::ASIA_TBILISI);
        $this->setDefaultLanguage(LanguageCode::GEORGIAN);
        $this->setCurrencies(new Collection([CurrencyCode::GEL,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_TBILISI,]));
        $this->setLanguages(new Collection([LanguageCode::GEORGIAN,]));
    }
}
