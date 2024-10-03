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
 * Viet Nam
 */
final class VN extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::VIET_NAM);
        $this->setCapital(CountryCapital::HANOI);
        $this->setCode(CountryCode::VN);
        $this->setAlpha3Code('VNM');
        $this->setDialCode('+84');
        $this->setTld('.vn');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::VN);
        $this->setDefaultCurrency(CurrencyCode::VND);
        $this->setDefaultTimezone(TimezoneCode::ASIA_HO_CHI_MINH);
        $this->setDefaultLanguage(LanguageCode::VIETNAMESE);
        $this->setCurrencies(new Collection([CurrencyCode::VND,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_HO_CHI_MINH,]));
        $this->setLanguages(new Collection([LanguageCode::VIETNAMESE,]));
    }
}
