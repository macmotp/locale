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
 * Greenland
 */
final class GL extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::GREENLAND);
        $this->setCapital(CountryCapital::NUUK);
        $this->setCode(CountryCode::GL);
        $this->setAlpha3Code('GRL');
        $this->setDialCode('+299');
        $this->setTld('.gl');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::GL);
        $this->setDefaultCurrency(CurrencyCode::DKK);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_NUUK);
        $this->setDefaultLanguage(LanguageCode::GREENLANDIC);
        $this->setCurrencies(new Collection([CurrencyCode::DKK,]));
        $this->setTimezones(new Collection([
            TimezoneCode::AMERICA_DANMARKSHAVN,
            TimezoneCode::AMERICA_NUUK,
            TimezoneCode::AMERICA_SCORESBYSUND,
            TimezoneCode::AMERICA_THULE,
        ]));
        $this->setLanguages(new Collection([
            LanguageCode::DANISH,
            LanguageCode::ENGLISH,
            LanguageCode::GREENLANDIC,
        ]));
    }
}
