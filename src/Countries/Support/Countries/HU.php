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
 * Hungary
 */
final class HU extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::HUNGARY);
        $this->setCapital(CountryCapital::BUDAPEST);
        $this->setCode(CountryCode::HU);
        $this->setAlpha3Code('HUN');
        $this->setDialCode('+36');
        $this->setTld('.hu');
        $this->setDateFormat('Y. m. d.');
        $this->setFlag(CountryFlag::HU);
        $this->setDefaultCurrency(CurrencyCode::HUF);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_BUDAPEST);
        $this->setDefaultLanguage(LanguageCode::HUNGARIAN);
        $this->setCurrencies(new Collection([CurrencyCode::HUF,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_BUDAPEST,]));
        $this->setLanguages(new Collection([LanguageCode::HUNGARIAN,]));
    }
}
