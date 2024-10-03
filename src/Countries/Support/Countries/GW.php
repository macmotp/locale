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
 * Guinea-Bissau
 */
final class GW extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::GUINEA_BISSAU);
        $this->setCapital(CountryCapital::BISSAU);
        $this->setCode(CountryCode::GW);
        $this->setAlpha3Code('GNB');
        $this->setDialCode('+245');
        $this->setTld('.gw');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::GW);
        $this->setDefaultCurrency(CurrencyCode::XOF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_BISSAU);
        $this->setDefaultLanguage(LanguageCode::PORTUGUESE);
        $this->setCurrencies(new Collection([CurrencyCode::XOF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_BISSAU,]));
        $this->setLanguages(new Collection([LanguageCode::PORTUGUESE,]));
    }
}
