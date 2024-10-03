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
 * Canada
 */
final class CA extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::CANADA);
        $this->setCapital(CountryCapital::OTTAWA);
        $this->setCode(CountryCode::CA);
        $this->setAlpha3Code('CAN');
        $this->setDialCode('+1');
        $this->setTld('.ca');
        $this->setDateFormat('d/m/Y');
        $this->setFlag(CountryFlag::CA);
        $this->setDefaultCurrency(CurrencyCode::CAD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_TORONTO);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::CAD,]));
        $this->setTimezones(new Collection([
            TimezoneCode::AMERICA_CAMBRIDGE_BAY,
            TimezoneCode::AMERICA_DAWSON,
            TimezoneCode::AMERICA_DAWSON_CREEK,
            TimezoneCode::AMERICA_EDMONTON,
            TimezoneCode::AMERICA_FORT_NELSON,
            TimezoneCode::AMERICA_GLACE_BAY,
            TimezoneCode::AMERICA_GOOSE_BAY,
            TimezoneCode::AMERICA_HALIFAX,
            TimezoneCode::AMERICA_INUVIK,
            TimezoneCode::AMERICA_IQALUIT,
            TimezoneCode::AMERICA_MONCTON,
            TimezoneCode::AMERICA_RANKIN_INLET,
            TimezoneCode::AMERICA_REGINA,
            TimezoneCode::AMERICA_RESOLUTE,
            TimezoneCode::AMERICA_ST_JOHNS,
            TimezoneCode::AMERICA_SWIFT_CURRENT,
            TimezoneCode::AMERICA_TORONTO,
            TimezoneCode::AMERICA_VANCOUVER,
            TimezoneCode::AMERICA_WHITEHORSE,
            TimezoneCode::AMERICA_WINNIPEG,
        ]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::FRENCH,]));
    }
}
