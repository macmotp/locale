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
 * Ecuador
 */
final class EC extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::SOUTH_AMERICA);
        $this->setName(CountryName::ECUADOR);
        $this->setCapital(CountryCapital::QUITO);
        $this->setCode(CountryCode::EC);
        $this->setAlpha3Code('ECU');
        $this->setDialCode('+593');
        $this->setTld('.ec');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::EC);
        $this->setDefaultCurrency(CurrencyCode::USD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_GUAYAQUIL);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::USD,]));
        $this->setTimezones(new Collection([
            TimezoneCode::AMERICA_GUAYAQUIL,
            TimezoneCode::PACIFIC_GALAPAGOS,
        ]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
