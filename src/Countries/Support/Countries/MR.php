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
 * Mauritania
 */
final class MR extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::MAURITANIA);
        $this->setCapital(CountryCapital::NOUAKCHOTT);
        $this->setCode(CountryCode::MR);
        $this->setAlpha3Code('MRT');
        $this->setDialCode('+222');
        $this->setTld('.mr');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MR);
        $this->setDefaultCurrency(CurrencyCode::MRU);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_NOUAKCHOTT);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::MRU,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_NOUAKCHOTT,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC,]));
    }
}
