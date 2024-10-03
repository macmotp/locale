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
 * Kuwait
 */
final class KW extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::KUWAIT);
        $this->setCapital(CountryCapital::KUWAIT_CITY);
        $this->setCode(CountryCode::KW);
        $this->setAlpha3Code('KWT');
        $this->setDialCode('+965');
        $this->setTld('.kw');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::KW);
        $this->setDefaultCurrency(CurrencyCode::KWD);
        $this->setDefaultTimezone(TimezoneCode::ASIA_KUWAIT);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::KWD,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_KUWAIT,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC,]));
    }
}
