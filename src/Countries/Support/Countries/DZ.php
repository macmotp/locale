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
 * Algeria
 */
final class DZ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::ALGERIA);
        $this->setCapital(CountryCapital::ALGIERS);
        $this->setCode(CountryCode::DZ);
        $this->setAlpha3Code('DZA');
        $this->setDialCode('+213');
        $this->setTld('.dz');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::DZ);
        $this->setDefaultCurrency(CurrencyCode::DZD);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_ALGIERS);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::DZD,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_ALGIERS,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC,]));
    }
}
