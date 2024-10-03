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
 * Somalia
 */
final class SO extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::SOMALIA);
        $this->setCapital(CountryCapital::MOGADISHU);
        $this->setCode(CountryCode::SO);
        $this->setAlpha3Code('SOM');
        $this->setDialCode('+252');
        $this->setTld('.so');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::SO);
        $this->setDefaultCurrency(CurrencyCode::SOS);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_MOGADISHU);
        $this->setDefaultLanguage(LanguageCode::SOMALI);
        $this->setCurrencies(new Collection([CurrencyCode::SOS,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_MOGADISHU,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC, LanguageCode::SOMALI,]));
    }
}
