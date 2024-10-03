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
 * São Tomé and Príncipe
 */
final class ST extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::SAO_TOME_AND_PRINCIPE);
        $this->setCapital(CountryCapital::SAO_TOME);
        $this->setCode(CountryCode::ST);
        $this->setAlpha3Code('STP');
        $this->setDialCode('+239');
        $this->setTld('.st');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::ST);
        $this->setDefaultCurrency(CurrencyCode::STN);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_SAO_TOME);
        $this->setDefaultLanguage(LanguageCode::PORTUGUESE);
        $this->setCurrencies(new Collection([CurrencyCode::STN,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_SAO_TOME,]));
        $this->setLanguages(new Collection([LanguageCode::PORTUGUESE,]));
    }
}
