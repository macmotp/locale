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
 * Antigua and Barbuda
 */
final class AG extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::ANTIGUA_AND_BARBUDA);
        $this->setCapital(CountryCapital::SAINT_JOHNS);
        $this->setCode(CountryCode::AG);
        $this->setAlpha3Code('ATG');
        $this->setDialCode('+1268');
        $this->setTld('.ag');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::AG);
        $this->setDefaultCurrency(CurrencyCode::XCD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_ANTIGUA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::XCD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_ANTIGUA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
