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
 * Mexico
 */
final class MX extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::MEXICO);
        $this->setCapital(CountryCapital::MEXICO_CITY);
        $this->setCode(CountryCode::MX);
        $this->setAlpha3Code('MEX');
        $this->setDialCode('+52');
        $this->setTld('.mx');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MX);
        $this->setDefaultCurrency(CurrencyCode::MXN);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_MEXICO_CITY);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::MXN,]));
        $this->setTimezones(new Collection([
            TimezoneCode::AMERICA_BAHIA_BANDERAS,
            TimezoneCode::AMERICA_CANCUN,
            TimezoneCode::AMERICA_CHIHUAHUA,
            TimezoneCode::AMERICA_CIUDAD_JUAREZ,
            TimezoneCode::AMERICA_HERMOSILLO,
            TimezoneCode::AMERICA_MATAMOROS,
            TimezoneCode::AMERICA_MAZATLAN,
            TimezoneCode::AMERICA_MERIDA,
            TimezoneCode::AMERICA_MEXICO_CITY,
            TimezoneCode::AMERICA_MONTERREY,
            TimezoneCode::AMERICA_OJINAGA,
            TimezoneCode::AMERICA_TIJUANA,
        ]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
