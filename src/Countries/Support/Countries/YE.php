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
 * Yemen
 */
final class YE extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::YEMEN);
        $this->setCapital(CountryCapital::SANA_A);
        $this->setCode(CountryCode::YE);
        $this->setAlpha3Code('YEM');
        $this->setDialCode('+967');
        $this->setTld('.ye');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::YE);
        $this->setDefaultCurrency(CurrencyCode::YER);
        $this->setDefaultTimezone(TimezoneCode::ASIA_ADEN);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::YER,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_ADEN,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC,]));
    }
}
