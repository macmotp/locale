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
 * Tunisia
 */
final class TN extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::TUNISIA);
        $this->setCapital(CountryCapital::TUNIS);
        $this->setCode(CountryCode::TN);
        $this->setAlpha3Code('TUN');
        $this->setDialCode('+216');
        $this->setTld('.tn');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::TN);
        $this->setDefaultCurrency(CurrencyCode::TND);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_TUNIS);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::TND,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_TUNIS,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC,]));
    }
}
