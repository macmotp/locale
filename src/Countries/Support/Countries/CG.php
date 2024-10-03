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
 * Republic of the Congo
 */
final class CG extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::REPUBLIC_OF_THE_CONGO);
        $this->setCapital(CountryCapital::BRAZZAVILLE);
        $this->setCode(CountryCode::CG);
        $this->setAlpha3Code('COG');
        $this->setDialCode('+242');
        $this->setTld('.cg');
        $this->setDateFormat('d/m/Y');
        $this->setFlag(CountryFlag::CG);
        $this->setDefaultCurrency(CurrencyCode::XAF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_BRAZZAVILLE);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::XAF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_BRAZZAVILLE,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH,]));
    }
}
