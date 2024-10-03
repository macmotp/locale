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
 * Lebanon
 */
final class LB extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::LEBANON);
        $this->setCapital(CountryCapital::BEIRUT);
        $this->setCode(CountryCode::LB);
        $this->setAlpha3Code('LBN');
        $this->setDialCode('+961');
        $this->setTld('.lb');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::LB);
        $this->setDefaultCurrency(CurrencyCode::LBP);
        $this->setDefaultTimezone(TimezoneCode::ASIA_BEIRUT);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::LBP,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_BEIRUT,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC,]));
    }
}
