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
 * Kazakhstan
 */
final class KZ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::KAZAKHSTAN);
        $this->setCapital(CountryCapital::NUR_SULTAN);
        $this->setCode(CountryCode::KZ);
        $this->setAlpha3Code('KAZ');
        $this->setDialCode('+7');
        $this->setTld('.kz');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::KZ);
        $this->setDefaultCurrency(CurrencyCode::KZT);
        $this->setDefaultTimezone(TimezoneCode::ASIA_ALMATY);
        $this->setDefaultLanguage(LanguageCode::KAZAKH);
        $this->setCurrencies(new Collection([CurrencyCode::KZT,]));
        $this->setTimezones(new Collection([
            TimezoneCode::ASIA_ALMATY,
            TimezoneCode::ASIA_AQTAU,
            TimezoneCode::ASIA_AQTOBE,
            TimezoneCode::ASIA_ATYRAU,
            TimezoneCode::ASIA_ORAL,
            TimezoneCode::ASIA_QOSTANAY,
            TimezoneCode::ASIA_QYZYLORDA,
        ]));
        $this->setLanguages(new Collection([LanguageCode::KAZAKH, LanguageCode::RUSSIAN,]));
    }
}
