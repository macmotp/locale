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
 * Mongolia
 */
final class MN extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::MONGOLIA);
        $this->setCapital(CountryCapital::ULAANBAATAR);
        $this->setCode(CountryCode::MN);
        $this->setAlpha3Code('MNG');
        $this->setDialCode('+976');
        $this->setTld('.mn');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MN);
        $this->setDefaultCurrency(CurrencyCode::MNT);
        $this->setDefaultTimezone(TimezoneCode::ASIA_ULAANBAATAR);
        $this->setDefaultLanguage(LanguageCode::MONGOLIAN);
        $this->setCurrencies(new Collection([CurrencyCode::MNT,]));
        $this->setTimezones(new Collection([
            TimezoneCode::ASIA_CHOIBALSAN,
            TimezoneCode::ASIA_HOVD,
            TimezoneCode::ASIA_ULAANBAATAR,
        ]));
        $this->setLanguages(new Collection([LanguageCode::MONGOLIAN,]));
    }
}
