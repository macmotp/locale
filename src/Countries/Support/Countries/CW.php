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
 * Curaçao
 */
final class CW extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::CURACAO);
        $this->setCapital(CountryCapital::WILLEMSTAD);
        $this->setCode(CountryCode::CW);
        $this->setAlpha3Code('CUW');
        $this->setDialCode('+599');
        $this->setTld('.cw');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::CW);
        $this->setDefaultCurrency(CurrencyCode::ANG);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_CURACAO);
        $this->setDefaultLanguage(LanguageCode::DUTCH);
        $this->setCurrencies(new Collection([CurrencyCode::ANG,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_CURACAO,]));
        $this->setLanguages(new Collection([LanguageCode::DUTCH,]));
    }
}
