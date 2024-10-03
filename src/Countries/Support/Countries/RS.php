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
 * Serbia
 */
final class RS extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::SERBIA);
        $this->setCapital(CountryCapital::BELGRADE);
        $this->setCode(CountryCode::RS);
        $this->setAlpha3Code('SRB');
        $this->setDialCode('+381');
        $this->setTld('.rs');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::RS);
        $this->setDefaultCurrency(CurrencyCode::RSD);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_BELGRADE);
        $this->setDefaultLanguage(LanguageCode::SERBIAN);
        $this->setCurrencies(new Collection([CurrencyCode::RSD,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_BELGRADE,]));
        $this->setLanguages(new Collection([LanguageCode::SERBIAN,]));
    }
}
