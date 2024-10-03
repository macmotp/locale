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
 * China
 */
final class CN extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::CHINA);
        $this->setCapital(CountryCapital::BEIJING);
        $this->setCode(CountryCode::CN);
        $this->setAlpha3Code('CHN');
        $this->setDialCode('+86');
        $this->setTld('.cn');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::CN);
        $this->setDefaultCurrency(CurrencyCode::CNY);
        $this->setDefaultTimezone(TimezoneCode::ASIA_SHANGHAI);
        $this->setDefaultLanguage(LanguageCode::CHINESE);
        $this->setCurrencies(new Collection([CurrencyCode::CNY,]));
        $this->setTimezones(new Collection([
            TimezoneCode::ASIA_SHANGHAI,
            TimezoneCode::ASIA_URUMQI,
        ]));
        $this->setLanguages(new Collection([LanguageCode::CHINESE,]));
    }
}
