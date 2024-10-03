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
 * Iraq
 */
final class IQ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::IRAQ);
        $this->setCapital(CountryCapital::BAGHDAD);
        $this->setCode(CountryCode::IQ);
        $this->setAlpha3Code('IRQ');
        $this->setDialCode('+964');
        $this->setTld('.iq');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::IQ);
        $this->setDefaultCurrency(CurrencyCode::IQD);
        $this->setDefaultTimezone(TimezoneCode::ASIA_BAGHDAD);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::IQD,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_BAGHDAD,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC, LanguageCode::KURDISH,]));
    }
}
