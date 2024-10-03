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
 * Qatar
 */
final class QA extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::QATAR);
        $this->setCapital(CountryCapital::DOHA);
        $this->setCode(CountryCode::QA);
        $this->setAlpha3Code('QAT');
        $this->setDialCode('+974');
        $this->setTld('.qa');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::QA);
        $this->setDefaultCurrency(CurrencyCode::QAR);
        $this->setDefaultTimezone(TimezoneCode::ASIA_QATAR);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::QAR,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_QATAR,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC,]));
    }
}
