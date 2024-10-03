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
 * Macao
 */
final class MO extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::MACAO);
        $this->setCapital(CountryCapital::MACAO);
        $this->setCode(CountryCode::MO);
        $this->setAlpha3Code('MAC');
        $this->setDialCode('+853');
        $this->setTld('.mo');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MO);
        $this->setDefaultCurrency(CurrencyCode::MOP);
        $this->setDefaultTimezone(TimezoneCode::ASIA_MACAU);
        $this->setDefaultLanguage(LanguageCode::CHINESE);
        $this->setCurrencies(new Collection([CurrencyCode::MOP,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_MACAU,]));
        $this->setLanguages(new Collection([LanguageCode::CHINESE, LanguageCode::PORTUGUESE,]));
    }
}
