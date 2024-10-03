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
 * Burkina Faso
 */
final class BF extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::BURKINA_FASO);
        $this->setCapital(CountryCapital::OUAGADOUGOU);
        $this->setCode(CountryCode::BF);
        $this->setAlpha3Code('BFA');
        $this->setDialCode('+226');
        $this->setTld('.bf');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::BF);
        $this->setDefaultCurrency(CurrencyCode::XOF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_OUAGADOUGOU);
        $this->setDefaultLanguage(LanguageCode::MOORÉ);
        $this->setCurrencies(new Collection([CurrencyCode::XOF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_OUAGADOUGOU,]));
        $this->setLanguages(new Collection([
            LanguageCode::BISSA,
            LanguageCode::DYULA,
            LanguageCode::ENGLISH,
            LanguageCode::FRENCH,
            LanguageCode::FULAH,
            LanguageCode::MOORÉ,
        ]));
    }
}