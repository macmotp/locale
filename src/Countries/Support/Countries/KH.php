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
 * Cambodia
 */
final class KH extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::CAMBODIA);
        $this->setCapital(CountryCapital::PHNOM_PENH);
        $this->setCode(CountryCode::KH);
        $this->setAlpha3Code('KHM');
        $this->setDialCode('+855');
        $this->setTld('.kh');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::KH);
        $this->setDefaultCurrency(CurrencyCode::KHR);
        $this->setDefaultTimezone(TimezoneCode::ASIA_PHNOM_PENH);
        $this->setDefaultLanguage(LanguageCode::KHMER);
        $this->setCurrencies(new Collection([CurrencyCode::KHR,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_PHNOM_PENH,]));
        $this->setLanguages(new Collection([LanguageCode::KHMER,]));
    }
}
