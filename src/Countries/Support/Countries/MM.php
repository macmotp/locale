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
 * Myanmar
 */
final class MM extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::MYANMAR);
        $this->setCapital(CountryCapital::NAYPYIDAW);
        $this->setCode(CountryCode::MM);
        $this->setAlpha3Code('MMR');
        $this->setDialCode('+95');
        $this->setTld('.mm');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MM);
        $this->setDefaultCurrency(CurrencyCode::MMK);
        $this->setDefaultTimezone(TimezoneCode::ASIA_YANGON);
        $this->setDefaultLanguage(LanguageCode::BURMESE);
        $this->setCurrencies(new Collection([CurrencyCode::MMK,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_YANGON,]));
        $this->setLanguages(new Collection([LanguageCode::BURMESE,]));
    }
}
