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
 * Peru
 */
final class PE extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::SOUTH_AMERICA);
        $this->setName(CountryName::PERU);
        $this->setCapital(CountryCapital::LIMA);
        $this->setCode(CountryCode::PE);
        $this->setAlpha3Code('PER');
        $this->setDialCode('+51');
        $this->setTld('.pe');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::PE);
        $this->setDefaultCurrency(CurrencyCode::PEN);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_LIMA);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::PEN,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_LIMA,]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
