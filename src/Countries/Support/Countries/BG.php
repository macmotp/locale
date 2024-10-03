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
 * Bulgaria
 */
final class BG extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::BULGARIA);
        $this->setCapital(CountryCapital::SOFIA);
        $this->setCode(CountryCode::BG);
        $this->setAlpha3Code('BGR');
        $this->setDialCode('+359');
        $this->setTld('.bg');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::BG);
        $this->setDefaultCurrency(CurrencyCode::BGN);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_SOFIA);
        $this->setDefaultLanguage(LanguageCode::BULGARIAN);
        $this->setCurrencies(new Collection([CurrencyCode::BGN,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_SOFIA,]));
        $this->setLanguages(new Collection([LanguageCode::BULGARIAN,]));
    }
}
