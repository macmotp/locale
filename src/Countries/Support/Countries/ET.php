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
 * Ethiopia
 */
final class ET extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::ETHIOPIA);
        $this->setCapital(CountryCapital::ADDIS_ABABA);
        $this->setCode(CountryCode::ET);
        $this->setAlpha3Code('ETH');
        $this->setDialCode('+251');
        $this->setTld('.et');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::ET);
        $this->setDefaultCurrency(CurrencyCode::ETB);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_ADDIS_ABABA);
        $this->setDefaultLanguage(LanguageCode::AMHARIC);
        $this->setCurrencies(new Collection([CurrencyCode::ETB,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_ADDIS_ABABA,]));
        $this->setLanguages(new Collection([LanguageCode::AMHARIC,]));
    }
}
