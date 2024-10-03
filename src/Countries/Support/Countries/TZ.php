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
 * Tanzania
 */
final class TZ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::TANZANIA);
        $this->setCapital(CountryCapital::DODOMA);
        $this->setCode(CountryCode::TZ);
        $this->setAlpha3Code('TZA');
        $this->setDialCode('+255');
        $this->setTld('.tz');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::TZ);
        $this->setDefaultCurrency(CurrencyCode::TZS);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_DAR_ES_SALAAM);
        $this->setDefaultLanguage(LanguageCode::SWAHILI);
        $this->setCurrencies(new Collection([CurrencyCode::TZS,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_DAR_ES_SALAAM,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::SWAHILI,]));
    }
}
