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
 * Iceland
 */
final class IS extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::ICELAND);
        $this->setCapital(CountryCapital::REYKJAVIK);
        $this->setCode(CountryCode::IS);
        $this->setAlpha3Code('ISL');
        $this->setDialCode('+354');
        $this->setTld('.is');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::IS);
        $this->setDefaultCurrency(CurrencyCode::ISK);
        $this->setDefaultTimezone(TimezoneCode::ATLANTIC_REYKJAVIK);
        $this->setDefaultLanguage(LanguageCode::ICELANDIC);
        $this->setCurrencies(new Collection([CurrencyCode::ISK,]));
        $this->setTimezones(new Collection([TimezoneCode::ATLANTIC_REYKJAVIK,]));
        $this->setLanguages(new Collection([LanguageCode::ICELANDIC,]));
    }
}
