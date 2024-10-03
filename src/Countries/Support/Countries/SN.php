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
 * Senegal
 */
final class SN extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::SENEGAL);
        $this->setCapital(CountryCapital::DAKAR);
        $this->setCode(CountryCode::SN);
        $this->setAlpha3Code('SEN');
        $this->setDialCode('+221');
        $this->setTld('.sn');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::SN);
        $this->setDefaultCurrency(CurrencyCode::XOF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_DAKAR);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::XOF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_DAKAR,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH,]));
    }
}
