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
 * Costa Rica
 */
final class CR extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::COSTA_RICA);
        $this->setCapital(CountryCapital::SAN_JOSE);
        $this->setCode(CountryCode::CR);
        $this->setAlpha3Code('CRI');
        $this->setDialCode('+506');
        $this->setTld('.cr');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::CR);
        $this->setDefaultCurrency(CurrencyCode::CRC);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_COSTA_RICA);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::CRC,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_COSTA_RICA,]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
