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
 * Bosnia and Herzegovina
 */
final class BA extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::BOSNIA_AND_HERZEGOVINA);
        $this->setCapital(CountryCapital::SARAJEVO);
        $this->setCode(CountryCode::BA);
        $this->setAlpha3Code('BIH');
        $this->setDialCode('+387');
        $this->setTld('.ba');
        $this->setDateFormat('d.m.Y');
        $this->setFlag(CountryFlag::BA);
        $this->setDefaultCurrency(CurrencyCode::BAM);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_SARAJEVO);
        $this->setDefaultLanguage(LanguageCode::BOSNIAN);
        $this->setCurrencies(new Collection([CurrencyCode::BAM,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_SARAJEVO,]));
        $this->setLanguages(new Collection([
            LanguageCode::BOSNIAN,
            LanguageCode::CROATIAN,
            LanguageCode::SERBIAN,
        ]));
    }
}
