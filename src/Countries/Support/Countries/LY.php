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
 * Libya
 */
final class LY extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::LIBYA);
        $this->setCapital(CountryCapital::TRIPOLI);
        $this->setCode(CountryCode::LY);
        $this->setAlpha3Code('LBY');
        $this->setDialCode('+218');
        $this->setTld('.ly');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::LY);
        $this->setDefaultCurrency(CurrencyCode::LYD);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_TRIPOLI);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::LYD,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_TRIPOLI,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC,]));
    }
}
