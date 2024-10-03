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
 * South Korea
 */
final class KR extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::SOUTH_KOREA);
        $this->setCapital(CountryCapital::SEOUL);
        $this->setCode(CountryCode::KR);
        $this->setAlpha3Code('KOR');
        $this->setDialCode('+82');
        $this->setTld('.kr');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::KR);
        $this->setDefaultCurrency(CurrencyCode::KRW);
        $this->setDefaultTimezone(TimezoneCode::ASIA_SEOUL);
        $this->setDefaultLanguage(LanguageCode::KOREAN);
        $this->setCurrencies(new Collection([CurrencyCode::KRW,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_SEOUL,]));
        $this->setLanguages(new Collection([LanguageCode::KOREAN,]));
    }
}
