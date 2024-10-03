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
 * Benin
 */
final class BJ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::BENIN);
        $this->setCapital(CountryCapital::PORTO_NOVO);
        $this->setCode(CountryCode::BJ);
        $this->setAlpha3Code('BEN');
        $this->setDialCode('+229');
        $this->setTld('.bj');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::BJ);
        $this->setDefaultCurrency(CurrencyCode::XOF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_PORTO_NOVO);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::XOF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_PORTO_NOVO,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH,]));
    }
}
