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
 * Burundi
 */
final class BI extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::BURUNDI);
        $this->setCapital(CountryCapital::GITEGA);
        $this->setCode(CountryCode::BI);
        $this->setAlpha3Code('BDI');
        $this->setDialCode('+257');
        $this->setTld('.bi');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::BI);
        $this->setDefaultCurrency(CurrencyCode::BIF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_BUJUMBURA);
        $this->setDefaultLanguage(LanguageCode::RUNDI);
        $this->setCurrencies(new Collection([CurrencyCode::BIF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_BUJUMBURA,]));
        $this->setLanguages(new Collection([
            LanguageCode::ENGLISH,
            LanguageCode::FRENCH,
            LanguageCode::RUNDI,
            LanguageCode::SWAHILI,
        ]));
    }
}
