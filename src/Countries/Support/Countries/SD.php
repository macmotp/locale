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
 * Sudan
 */
final class SD extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::SUDAN);
        $this->setCapital(CountryCapital::KHARTOUM);
        $this->setCode(CountryCode::SD);
        $this->setAlpha3Code('SDN');
        $this->setDialCode('+249');
        $this->setTld('.sd');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::SD);
        $this->setDefaultCurrency(CurrencyCode::SDG);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_KHARTOUM);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::SDG,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_KHARTOUM,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC, LanguageCode::ENGLISH,]));
    }
}
