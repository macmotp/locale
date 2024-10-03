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
 * North Korea
 */
final class KP extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::NORTH_KOREA);
        $this->setCapital(CountryCapital::PYONGYANG);
        $this->setCode(CountryCode::KP);
        $this->setAlpha3Code('PRK');
        $this->setDialCode('+850');
        $this->setTld('.kp');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::KP);
        $this->setDefaultCurrency(CurrencyCode::KPW);
        $this->setDefaultTimezone(TimezoneCode::ASIA_PYONGYANG);
        $this->setDefaultLanguage(LanguageCode::KOREAN);
        $this->setCurrencies(new Collection([CurrencyCode::KPW,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_PYONGYANG,]));
        $this->setLanguages(new Collection([LanguageCode::KOREAN,]));
    }
}
