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
 * Egypt
 */
final class EG extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::EGYPT);
        $this->setCapital(CountryCapital::CAIRO);
        $this->setCode(CountryCode::EG);
        $this->setAlpha3Code('EGY');
        $this->setDialCode('+20');
        $this->setTld('.eg');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::EG);
        $this->setDefaultCurrency(CurrencyCode::EGP);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_CAIRO);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::EGP,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_CAIRO,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC,]));
    }
}
