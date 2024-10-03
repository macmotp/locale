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
 * Australia
 */
final class AU extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::AUSTRALIA);
        $this->setCapital(CountryCapital::CANBERRA);
        $this->setCode(CountryCode::AU);
        $this->setAlpha3Code('AUS');
        $this->setDialCode('+61');
        $this->setTld('.au');
        $this->setDateFormat('d/m/Y');
        $this->setFlag(CountryFlag::AU);
        $this->setDefaultCurrency(CurrencyCode::AUD);
        $this->setDefaultTimezone(TimezoneCode::AUSTRALIA_SYDNEY);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::AUD,]));
        $this->setTimezones(new Collection([
            TimezoneCode::ANTARCTICA_MACQUARIE,
            TimezoneCode::AUSTRALIA_ADELAIDE,
            TimezoneCode::AUSTRALIA_BRISBANE,
            TimezoneCode::AUSTRALIA_BROKEN_HILL,
            TimezoneCode::AUSTRALIA_DARWIN,
            TimezoneCode::AUSTRALIA_EUCLA,
            TimezoneCode::AUSTRALIA_HOBART,
            TimezoneCode::AUSTRALIA_LINDEMAN,
            TimezoneCode::AUSTRALIA_LORD_HOWE,
            TimezoneCode::AUSTRALIA_MELBOURNE,
            TimezoneCode::AUSTRALIA_PERTH,
            TimezoneCode::AUSTRALIA_SYDNEY,
        ]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
