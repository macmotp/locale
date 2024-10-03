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
 * Panama
 */
final class PA extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::PANAMA);
        $this->setCapital(CountryCapital::PANAMA_CITY);
        $this->setCode(CountryCode::PA);
        $this->setAlpha3Code('PAN');
        $this->setDialCode('+507');
        $this->setTld('.pa');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::PA);
        $this->setDefaultCurrency(CurrencyCode::PAB);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_PANAMA);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::PAB, CurrencyCode::USD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_PANAMA,]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
