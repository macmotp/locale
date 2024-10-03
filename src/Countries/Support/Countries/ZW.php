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
 * Zimbabwe
 */
final class ZW extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::ZIMBABWE);
        $this->setCapital(CountryCapital::HARARE);
        $this->setCode(CountryCode::ZW);
        $this->setAlpha3Code('ZWE');
        $this->setDialCode('+263');
        $this->setTld('.zw');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::ZW);
        $this->setDefaultCurrency(CurrencyCode::ZMW);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_HARARE);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::ZMW,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_HARARE,]));
        $this->setLanguages(new Collection([
            LanguageCode::CHEWA,
            LanguageCode::ENGLISH,
            LanguageCode::KALANGA,
            LanguageCode::NAMBYA,
            LanguageCode::NDAU,
            LanguageCode::NDEBELE,
            LanguageCode::SHONA,
            LanguageCode::SENA,
            LanguageCode::SESOTHO,
            LanguageCode::TONGA,
            LanguageCode::TSONGA,
            LanguageCode::TSWANA,
            LanguageCode::VENDA,
            LanguageCode::XHOSA,
        ]));
    }
}
