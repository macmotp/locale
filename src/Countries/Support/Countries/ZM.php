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
 * Zambia
 */
final class ZM extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::ZAMBIA);
        $this->setCapital(CountryCapital::LUSAKA);
        $this->setCode(CountryCode::ZM);
        $this->setAlpha3Code('ZMB');
        $this->setDialCode('+260');
        $this->setTld('.zm');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::ZM);
        $this->setDefaultCurrency(CurrencyCode::ZMW);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_LUSAKA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::ZMW,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_LUSAKA,]));
        $this->setLanguages(new Collection([
            LanguageCode::BEMBA,
            LanguageCode::CHEWA,
            LanguageCode::ENGLISH,
        ]));
    }
}
