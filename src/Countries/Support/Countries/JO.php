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
 * Jordan
 */
final class JO extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::JORDAN);
        $this->setCapital(CountryCapital::AMMAN);
        $this->setCode(CountryCode::JO);
        $this->setAlpha3Code('JOR');
        $this->setDialCode('+962');
        $this->setTld('.jo');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::JO);
        $this->setDefaultCurrency(CurrencyCode::JOD);
        $this->setDefaultTimezone(TimezoneCode::ASIA_AMMAN);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::JOD,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_AMMAN,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC,]));
    }
}
