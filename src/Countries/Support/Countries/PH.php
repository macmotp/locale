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
 * Philippines
 */
final class PH extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::PHILIPPINES);
        $this->setCapital(CountryCapital::MANILA);
        $this->setCode(CountryCode::PH);
        $this->setAlpha3Code('PHL');
        $this->setDialCode('+63');
        $this->setTld('.ph');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::PH);
        $this->setDefaultCurrency(CurrencyCode::PHP);
        $this->setDefaultTimezone(TimezoneCode::ASIA_MANILA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::PHP,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_MANILA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::FILIPINO,]));
    }
}