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
 * Equatorial Guinea
 */
final class GQ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::EQUATORIAL_GUINEA);
        $this->setCapital(CountryCapital::MALABO);
        $this->setCode(CountryCode::GQ);
        $this->setAlpha3Code('GNQ');
        $this->setDialCode('+240');
        $this->setTld('.gq');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::GQ);
        $this->setDefaultCurrency(CurrencyCode::XAF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_MALABO);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::XAF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_MALABO,]));
        $this->setLanguages(new Collection([
            LanguageCode::FRENCH,
            LanguageCode::PORTUGUESE,
            LanguageCode::SPANISH,
        ]));
    }
}
