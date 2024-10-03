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
 * Cuba
 */
final class CU extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::CUBA);
        $this->setCapital(CountryCapital::HAVANA);
        $this->setCode(CountryCode::CU);
        $this->setAlpha3Code('CUB');
        $this->setDialCode('+53');
        $this->setTld('.cu');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::CU);
        $this->setDefaultCurrency(CurrencyCode::CUP);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_HAVANA);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::CUP,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_HAVANA,]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
