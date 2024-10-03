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
 * United States of America
 */
final class US extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::UNITED_STATES_OF_AMERICA);
        $this->setCapital(CountryCapital::WASHINGTON_DC);
        $this->setCode(CountryCode::US);
        $this->setAlpha3Code('USA');
        $this->setDialCode('+1');
        $this->setTld('.us');
        $this->setDateFormat('m-d-Y');
        $this->setFlag(CountryFlag::US);
        $this->setDefaultCurrency(CurrencyCode::USD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_NEW_YORK);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::USD,]));
        $this->setTimezones(new Collection([
            TimezoneCode::AMERICA_ADAK,
            TimezoneCode::AMERICA_ANCHORAGE,
            TimezoneCode::AMERICA_BOISE,
            TimezoneCode::AMERICA_CHICAGO,
            TimezoneCode::AMERICA_DENVER,
            TimezoneCode::AMERICA_DETROIT,
            TimezoneCode::AMERICA_INDIANA_INDIANAPOLIS,
            TimezoneCode::AMERICA_INDIANA_KNOX,
            TimezoneCode::AMERICA_INDIANA_MARENGO,
            TimezoneCode::AMERICA_INDIANA_PETERSBURG,
            TimezoneCode::AMERICA_INDIANA_TELL_CITY,
            TimezoneCode::AMERICA_INDIANA_VEVAY,
            TimezoneCode::AMERICA_INDIANA_VINCENNES,
            TimezoneCode::AMERICA_INDIANA_WINAMAC,
            TimezoneCode::AMERICA_JUNEAU,
            TimezoneCode::AMERICA_KENTUCKY_LOUISVILLE,
            TimezoneCode::AMERICA_KENTUCKY_MONTICELLO,
            TimezoneCode::AMERICA_LOS_ANGELES,
            TimezoneCode::AMERICA_MENOMINEE,
            TimezoneCode::AMERICA_METLAKATLA,
            TimezoneCode::AMERICA_NEW_YORK,
            TimezoneCode::AMERICA_NOME,
            TimezoneCode::AMERICA_NORTH_DAKOTA_BEULAH,
            TimezoneCode::AMERICA_NORTH_DAKOTA_CENTER,
            TimezoneCode::AMERICA_NORTH_DAKOTA_NEW_SALEM,
            TimezoneCode::AMERICA_PHOENIX,
            TimezoneCode::AMERICA_SITKA,
            TimezoneCode::AMERICA_YAKUTAT,
            TimezoneCode::PACIFIC_HONOLULU,
        ]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
