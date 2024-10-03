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
 * Antarctica
 */
final class AQ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ANTARCTICA);
        $this->setName(CountryName::ANTARCTICA);
        $this->setCapital(CountryCapital::NA); // No official capital
        $this->setCode(CountryCode::AQ);
        $this->setAlpha3Code('ATA');
        $this->setDialCode('N/A'); // No telephone dialing code
        $this->setTld('.aq');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::AQ);
        $this->setDefaultCurrency(CurrencyCode::USD); // No official currency
        $this->setDefaultTimezone(TimezoneCode::ANTARCTICA_PALMER);
        $this->setDefaultLanguage(LanguageCode::ENGLISH); // No official language
        $this->setCurrencies(new Collection([CurrencyCode::USD,]));
        $this->setTimezones(new Collection([
            TimezoneCode::ANTARCTICA_CASEY,
            TimezoneCode::ANTARCTICA_DAVIS,
            TimezoneCode::ANTARCTICA_DUMONT_D_URVILLE,
            TimezoneCode::ANTARCTICA_MACQUARIE,
            TimezoneCode::ANTARCTICA_MAWSON,
            TimezoneCode::ANTARCTICA_MC_MURDO,
            TimezoneCode::ANTARCTICA_PALMER,
            TimezoneCode::ANTARCTICA_ROTHERA,
            TimezoneCode::ANTARCTICA_SYOWA,
            TimezoneCode::ANTARCTICA_TROLL,
            TimezoneCode::ANTARCTICA_VOSTOK,
        ]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,])); // No official languages
    }
}
