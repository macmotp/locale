<?php

declare(strict_types=1);

namespace Macmotp;

use Macmotp\Countries\Support\Collection;
use Macmotp\Countries\Support\Context;
use Macmotp\Countries\Support\CountryInterface;
use Macmotp\Countries\Support\Translations\Translator;

/**
 * Class Country
 */
class Country
{
    public const AD = 'AD'; // Andorra
    public const AE = 'AE'; // United Arab Emirates
    public const AF = 'AF'; // Afghanistan
    public const AG = 'AG'; // Antigua and Barbuda
    public const AI = 'AI'; // Anguilla
    public const AL = 'AL'; // Albania
    public const AM = 'AM'; // Armenia
    public const AO = 'AO'; // Angola
    public const AQ = 'AQ'; // Antarctica
    public const AR = 'AR'; // Argentina
    public const AS = 'AS'; // American Samoa
    public const AT = 'AT'; // Austria
    public const AU = 'AU'; // Australia
    public const AW = 'AW'; // Aruba
    public const AX = 'AX'; // Åland
    public const AZ = 'AZ'; // Azerbaijan
    public const BA = 'BA'; // Bosnia and Herzegovina
    public const BB = 'BB'; // Barbados
    public const BD = 'BD'; // Bangladesh
    public const BE = 'BE'; // Belgium
    public const BF = 'BF'; // Burkina Faso
    public const BG = 'BG'; // Bulgaria
    public const BH = 'BH'; // Bahrain
    public const BI = 'BI'; // Burundi
    public const BJ = 'BJ'; // Benin
    public const BL = 'BL'; // Saint Barthélemy
    public const BM = 'BM'; // Bermuda
    public const BN = 'BN'; // Brunei
    public const BO = 'BO'; // Bolivia
    public const BQ = 'BQ'; // Bonaire
    public const BR = 'BR'; // Brazil
    public const BS = 'BS'; // Bahamas
    public const BT = 'BT'; // Bhutan
    public const BV = 'BV'; // Bouvet Island
    public const BW = 'BW'; // Botswana
    public const BY = 'BY'; // Belarus
    public const BZ = 'BZ'; // Belize
    public const CA = 'CA'; // Canada
    public const CC = 'CC'; // Cocos (Keeling) Islands
    public const CD = 'CD'; // Democratic Republic of the Congo
    public const CF = 'CF'; // Central African Republic
    public const CG = 'CG'; // Republic of the Congo
    public const CH = 'CH'; // Switzerland
    public const CI = 'CI'; // Ivory Coast
    public const CK = 'CK'; // Cook Islands
    public const CL = 'CL'; // Chile
    public const CM = 'CM'; // Cameroon
    public const CN = 'CN'; // China
    public const CO = 'CO'; // Colombia
    public const CR = 'CR'; // Costa Rica
    public const CU = 'CU'; // Cuba
    public const CV = 'CV'; // Cape Verde
    public const CW = 'CW'; // Curaçao
    public const CX = 'CX'; // Christmas Island
    public const CY = 'CY'; // Cyprus
    public const CZ = 'CZ'; // Czechia
    public const DE = 'DE'; // Germany
    public const DJ = 'DJ'; // Djibouti
    public const DK = 'DK'; // Denmark
    public const DM = 'DM'; // Dominica
    public const DO = 'DO'; // Dominican Republic
    public const DZ = 'DZ'; // Algeria
    public const EC = 'EC'; // Ecuador
    public const EE = 'EE'; // Estonia
    public const EG = 'EG'; // Egypt
    public const EH = 'EH'; // Western Sahara
    public const ER = 'ER'; // Eritrea
    public const ES = 'ES'; // Spain
    public const ET = 'ET'; // Ethiopia
    public const FI = 'FI'; // Finland
    public const FJ = 'FJ'; // Fiji
    public const FK = 'FK'; // Falkland Islands
    public const FM = 'FM'; // Micronesia
    public const FO = 'FO'; // Faroe Islands
    public const FR = 'FR'; // France
    public const GA = 'GA'; // Gabon
    public const GB = 'GB'; // United Kingdom
    public const GD = 'GD'; // Grenada
    public const GE = 'GE'; // Georgia
    public const GF = 'GF'; // French Guiana
    public const GG = 'GG'; // Guernsey
    public const GH = 'GH'; // Ghana
    public const GI = 'GI'; // Gibraltar
    public const GL = 'GL'; // Greenland
    public const GM = 'GM'; // Gambia
    public const GN = 'GN'; // Guinea
    public const GP = 'GP'; // Guadeloupe
    public const GQ = 'GQ'; // Equatorial Guinea
    public const GR = 'GR'; // Greece
    public const GS = 'GS'; // South Georgia and the South Sandwich Islands
    public const GT = 'GT'; // Guatemala
    public const GU = 'GU'; // Guam
    public const GW = 'GW'; // Guinea-Bissau
    public const GY = 'GY'; // Guyana
    public const HK = 'HK'; // Hong Kong
    public const HM = 'HM'; // Heard Island and McDonald Islands
    public const HN = 'HN'; // Honduras
    public const HR = 'HR'; // Croatia
    public const HT = 'HT'; // Haiti
    public const HU = 'HU'; // Hungary
    public const ID = 'ID'; // Indonesia
    public const IE = 'IE'; // Ireland
    public const IL = 'IL'; // Israel
    public const IM = 'IM'; // Isle of Man
    public const IN = 'IN'; // India
    public const IO = 'IO'; // British Indian Ocean Territory
    public const IQ = 'IQ'; // Iraq
    public const IR = 'IR'; // Iran
    public const IS = 'IS'; // Iceland
    public const IT = 'IT'; // Italy
    public const JE = 'JE'; // Jersey
    public const JM = 'JM'; // Jamaica
    public const JO = 'JO'; // Jordan
    public const JP = 'JP'; // Japan
    public const KE = 'KE'; // Kenya
    public const KG = 'KG'; // Kyrgyzstan
    public const KH = 'KH'; // Cambodia
    public const KI = 'KI'; // Kiribati
    public const KM = 'KM'; // Comoros
    public const KN = 'KN'; // Saint Kitts and Nevis
    public const KP = 'KP'; // North Korea
    public const KR = 'KR'; // South Korea
    public const KW = 'KW'; // Kuwait
    public const KY = 'KY'; // Cayman Islands
    public const KZ = 'KZ'; // Kazakhstan
    public const LA = 'LA'; // Laos
    public const LB = 'LB'; // Lebanon
    public const LC = 'LC'; // Saint Lucia
    public const LI = 'LI'; // Liechtenstein
    public const LK = 'LK'; // Sri Lanka
    public const LR = 'LR'; // Liberia
    public const LS = 'LS'; // Lesotho
    public const LT = 'LT'; // Lithuania
    public const LU = 'LU'; // Luxembourg
    public const LV = 'LV'; // Latvia
    public const LY = 'LY'; // Libya
    public const MA = 'MA'; // Morocco
    public const MC = 'MC'; // Monaco
    public const MD = 'MD'; // Moldova
    public const ME = 'ME'; // Montenegro
    public const MF = 'MF'; // Saint Martin
    public const MG = 'MG'; // Madagascar
    public const MH = 'MH'; // Marshall Islands
    public const MK = 'MK'; // North Macedonia
    public const ML = 'ML'; // Mali
    public const MM = 'MM'; // Myanmar
    public const MN = 'MN'; // Mongolia
    public const MO = 'MO'; // Macao
    public const MP = 'MP'; // Northern Mariana Islands
    public const MQ = 'MQ'; // Martinique
    public const MR = 'MR'; // Mauritania
    public const MS = 'MS'; // Montserrat
    public const MT = 'MT'; // Malta
    public const MU = 'MU'; // Mauritius
    public const MV = 'MV'; // Maldives
    public const MW = 'MW'; // Malawi
    public const MX = 'MX'; // Mexico
    public const MY = 'MY'; // Malaysia
    public const MZ = 'MZ'; // Mozambique
    public const NA = 'NA'; // Namibia
    public const NC = 'NC'; // New Caledonia
    public const NE = 'NE'; // Niger
    public const NF = 'NF'; // Norfolk Island
    public const NG = 'NG'; // Nigeria
    public const NI = 'NI'; // Nicaragua
    public const NL = 'NL'; // Netherlands
    public const NO = 'NO'; // Norway
    public const NP = 'NP'; // Nepal
    public const NR = 'NR'; // Nauru
    public const NU = 'NU'; // Niue
    public const NZ = 'NZ'; // New Zealand
    public const OM = 'OM'; // Oman
    public const PA = 'PA'; // Panama
    public const PE = 'PE'; // Peru
    public const PF = 'PF'; // French Polynesia
    public const PG = 'PG'; // Papua New Guinea
    public const PH = 'PH'; // Philippines
    public const PK = 'PK'; // Pakistan
    public const PL = 'PL'; // Poland
    public const PM = 'PM'; // Saint Pierre and Miquelon
    public const PN = 'PN'; // Pitcairn Islands
    public const PR = 'PR'; // Puerto Rico
    public const PS = 'PS'; // Palestine
    public const PT = 'PT'; // Portugal
    public const PW = 'PW'; // Palau
    public const PY = 'PY'; // Paraguay
    public const QA = 'QA'; // Qatar
    public const RE = 'RE'; // Réunion
    public const RO = 'RO'; // Romania
    public const RS = 'RS'; // Serbia
    public const RU = 'RU'; // Russia
    public const RW = 'RW'; // Rwanda
    public const SA = 'SA'; // Saudi Arabia
    public const SB = 'SB'; // Solomon Islands
    public const SC = 'SC'; // Seychelles
    public const SD = 'SD'; // Sudan
    public const SE = 'SE'; // Sweden
    public const SG = 'SG'; // Singapore
    public const SH = 'SH'; // Saint Helena
    public const SI = 'SI'; // Slovenia
    public const SJ = 'SJ'; // Svalbard and Jan Mayen
    public const SK = 'SK'; // Slovakia
    public const SL = 'SL'; // Sierra Leone
    public const SM = 'SM'; // San Marino
    public const SN = 'SN'; // Senegal
    public const SO = 'SO'; // Somalia
    public const SR = 'SR'; // Suriname
    public const SS = 'SS'; // South Sudan
    public const ST = 'ST'; // São Tomé and Príncipe
    public const SV = 'SV'; // El Salvador
    public const SX = 'SX'; // Sint Maarten
    public const SY = 'SY'; // Syria
    public const SZ = 'SZ'; // Eswatini
    public const TC = 'TC'; // Turks and Caicos Islands
    public const TD = 'TD'; // Chad
    public const TF = 'TF'; // French Southern Territories
    public const TG = 'TG'; // Togo
    public const TH = 'TH'; // Thailand
    public const TJ = 'TJ'; // Tajikistan
    public const TK = 'TK'; // Tokelau
    public const TL = 'TL'; // Timor-Leste
    public const TM = 'TM'; // Turkmenistan
    public const TN = 'TN'; // Tunisia
    public const TO = 'TO'; // Tonga
    public const TR = 'TR'; // Turkey
    public const TT = 'TT'; // Trinidad and Tobago
    public const TV = 'TV'; // Tuvalu
    public const TW = 'TW'; // Taiwan
    public const TZ = 'TZ'; // Tanzania
    public const UA = 'UA'; // Ukraine
    public const UG = 'UG'; // Uganda
    public const UM = 'UM'; // U.S. Minor Outlying Islands
    public const US = 'US'; // United States of America
    public const UY = 'UY'; // Uruguay
    public const UZ = 'UZ'; // Uzbekistan
    public const VA = 'VA'; // Vatican City
    public const VC = 'VC'; // Saint Vincent and the Grenadines
    public const VE = 'VE'; // Venezuela
    public const VG = 'VG'; // Virgin Islands (British)
    public const VI = 'VI'; // Virgin Islands (U.S.)
    public const VN = 'VN'; // Viet Nam
    public const VU = 'VU'; // Vanuatu
    public const WF = 'WF'; // Wallis and Futuna
    public const WS = 'WS'; // Samoa
    public const XK = 'XK'; // Kosovo
    public const YE = 'YE'; // Yemen
    public const YT = 'YT'; // Mayotte
    public const ZA = 'ZA'; // South Africa
    public const ZM = 'ZM'; // Zambia
    public const ZW = 'ZW'; // Zimbabwe

    public const AFGHANISTAN = 'Afghanistan';
    public const ALAND = 'Åland';
    public const ALBANIA = 'Albania';
    public const ALGERIA = 'Algeria';
    public const AMERICAN_SAMOA = 'American Samoa';
    public const ANDORRA = 'Andorra';
    public const ANGOLA = 'Angola';
    public const ANGUILLA = 'Anguilla';
    public const ANTARCTICA = 'Antarctica';
    public const ANTIGUA_AND_BARBUDA = 'Antigua and Barbuda';
    public const ARGENTINA = 'Argentina';
    public const ARMENIA = 'Armenia';
    public const ARUBA = 'Aruba';
    public const AUSTRALIA = 'Australia';
    public const AUSTRIA = 'Austria';
    public const AZERBAIJAN = 'Azerbaijan';
    public const BAHAMAS = 'Bahamas';
    public const BAHRAIN = 'Bahrain';
    public const BANGLADESH = 'Bangladesh';
    public const BARBADOS = 'Barbados';
    public const BELARUS = 'Belarus';
    public const BELGIUM = 'Belgium';
    public const BELIZE = 'Belize';
    public const BENIN = 'Benin';
    public const BERMUDA = 'Bermuda';
    public const BHUTAN = 'Bhutan';
    public const BOLIVIA = 'Bolivia';
    public const BONAIRE = 'Bonaire';
    public const BOSNIA_AND_HERZEGOVINA = 'Bosnia and Herzegovina';
    public const BOTSWANA = 'Botswana';
    public const BOUVET_ISLAND = 'Bouvet Island';
    public const BRAZIL = 'Brazil';
    public const BRITISH_INDIAN_OCEAN_TERRITORY = 'British Indian Ocean Territory';
    public const BRUNEI = 'Brunei';
    public const BULGARIA = 'Bulgaria';
    public const BURKINA_FASO = 'Burkina Faso';
    public const BURUNDI = 'Burundi';
    public const CAMBODIA = 'Cambodia';
    public const CAMEROON = 'Cameroon';
    public const CANADA = 'Canada';
    public const CAPE_VERDE = 'Cape Verde';
    public const CAYMAN_ISLANDS = 'Cayman Islands';
    public const CENTRAL_AFRICAN_REPUBLIC = 'Central African Republic';
    public const CHAD = 'Chad';
    public const CHILE = 'Chile';
    public const CHINA = 'China';
    public const CHRISTMAS_ISLAND = 'Christmas Island';
    public const COCOS_KEELING_ISLANDS = 'Cocos (Keeling) Islands';
    public const COLOMBIA = 'Colombia';
    public const COMOROS = 'Comoros';
    public const COOK_ISLANDS = 'Cook Islands';
    public const COSTA_RICA = 'Costa Rica';
    public const CROATIA = 'Croatia';
    public const CUBA = 'Cuba';
    public const CURACAO = 'Curaçao';
    public const CYPRUS = 'Cyprus';
    public const CZECHIA = 'Czechia';
    public const DEMOCRATIC_REPUBLIC_OF_THE_CONGO = 'Democratic Republic of the Congo';
    public const DENMARK = 'Denmark';
    public const DJIBOUTI = 'Djibouti';
    public const DOMINICA = 'Dominica';
    public const DOMINICAN_REPUBLIC = 'Dominican Republic';
    public const ECUADOR = 'Ecuador';
    public const EGYPT = 'Egypt';
    public const EL_SALVADOR = 'El Salvador';
    public const EQUATORIAL_GUINEA = 'Equatorial Guinea';
    public const ERITREA = 'Eritrea';
    public const ESTONIA = 'Estonia';
    public const ESWATINI = 'Eswatini';
    public const ETHIOPIA = 'Ethiopia';
    public const FALKLAND_ISLANDS = 'Falkland Islands';
    public const FAROE_ISLANDS = 'Faroe Islands';
    public const FIJI = 'Fiji';
    public const FINLAND = 'Finland';
    public const FRANCE = 'France';
    public const FRENCH_GUIANA = 'French Guiana';
    public const FRENCH_POLYNESIA = 'French Polynesia';
    public const FRENCH_SOUTHERN_TERRITORIES = 'French Southern Territories';
    public const GABON = 'Gabon';
    public const GAMBIA = 'Gambia';
    public const GEORGIA = 'Georgia';
    public const GERMANY = 'Germany';
    public const GHANA = 'Ghana';
    public const GIBRALTAR = 'Gibraltar';
    public const GREECE = 'Greece';
    public const GREENLAND = 'Greenland';
    public const GRENADA = 'Grenada';
    public const GUADELOUPE = 'Guadeloupe';
    public const GUAM = 'Guam';
    public const GUATEMALA = 'Guatemala';
    public const GUERNSEY = 'Guernsey';
    public const GUINEA = 'Guinea';
    public const GUINEA_BISSAU = 'Guinea-Bissau';
    public const GUYANA = 'Guyana';
    public const HAITI = 'Haiti';
    public const HEARD_ISLAND_AND_MCDONALD_ISLANDS = 'Heard Island and McDonald Islands';
    public const HONDURAS = 'Honduras';
    public const HONG_KONG = 'Hong Kong';
    public const HUNGARY = 'Hungary';
    public const ICELAND = 'Iceland';
    public const INDIA = 'India';
    public const INDONESIA = 'Indonesia';
    public const IRAN = 'Iran';
    public const IRAQ = 'Iraq';
    public const IRELAND = 'Ireland';
    public const ISLE_OF_MAN = 'Isle of Man';
    public const ISRAEL = 'Israel';
    public const ITALY = 'Italy';
    public const IVORY_COAST = 'Ivory Coast';
    public const JAMAICA = 'Jamaica';
    public const JAPAN = 'Japan';
    public const JERSEY = 'Jersey';
    public const JORDAN = 'Jordan';
    public const KAZAKHSTAN = 'Kazakhstan';
    public const KENYA = 'Kenya';
    public const KIRIBATI = 'Kiribati';
    public const KOSOVO = 'Kosovo';
    public const KUWAIT = 'Kuwait';
    public const KYRGYZSTAN = 'Kyrgyzstan';
    public const LAOS = 'Laos';
    public const LATVIA = 'Latvia';
    public const LEBANON = 'Lebanon';
    public const LESOTHO = 'Lesotho';
    public const LIBERIA = 'Liberia';
    public const LIBYA = 'Libya';
    public const LIECHTENSTEIN = 'Liechtenstein';
    public const LITHUANIA = 'Lithuania';
    public const LUXEMBOURG = 'Luxembourg';
    public const MACAO = 'Macao';
    public const MADAGASCAR = 'Madagascar';
    public const MALAWI = 'Malawi';
    public const MALAYSIA = 'Malaysia';
    public const MALDIVES = 'Maldives';
    public const MALI = 'Mali';
    public const MALTA = 'Malta';
    public const MARSHALL_ISLANDS = 'Marshall Islands';
    public const MARTINIQUE = 'Martinique';
    public const MAURITANIA = 'Mauritania';
    public const MAURITIUS = 'Mauritius';
    public const MAYOTTE = 'Mayotte';
    public const MEXICO = 'Mexico';
    public const MICRONESIA = 'Micronesia';
    public const MOLDOVA = 'Moldova';
    public const MONACO = 'Monaco';
    public const MONGOLIA = 'Mongolia';
    public const MONTENEGRO = 'Montenegro';
    public const MONTSERRAT = 'Montserrat';
    public const MOROCCO = 'Morocco';
    public const MOZAMBIQUE = 'Mozambique';
    public const MYANMAR = 'Myanmar';
    public const NAMIBIA = 'Namibia';
    public const NAURU = 'Nauru';
    public const NEPAL = 'Nepal';
    public const NETHERLANDS = 'Netherlands';
    public const NEW_CALEDONIA = 'New Caledonia';
    public const NEW_ZEALAND = 'New Zealand';
    public const NICARAGUA = 'Nicaragua';
    public const NIGER = 'Niger';
    public const NIGERIA = 'Nigeria';
    public const NIUE = 'Niue';
    public const NORFOLK_ISLAND = 'Norfolk Island';
    public const NORTHERN_MARIANA_ISLANDS = 'Northern Mariana Islands';
    public const NORTH_KOREA = 'North Korea';
    public const NORTH_MACEDONIA = 'North Macedonia';
    public const NORWAY = 'Norway';
    public const OMAN = 'Oman';
    public const PAKISTAN = 'Pakistan';
    public const PALAU = 'Palau';
    public const PALESTINE = 'Palestine';
    public const PANAMA = 'Panama';
    public const PAPUA_NEW_GUINEA = 'Papua New Guinea';
    public const PARAGUAY = 'Paraguay';
    public const PERU = 'Peru';
    public const PHILIPPINES = 'Philippines';
    public const PITCAIRN_ISLANDS = 'Pitcairn Islands';
    public const POLAND = 'Poland';
    public const PORTUGAL = 'Portugal';
    public const PUERTO_RICO = 'Puerto Rico';
    public const QATAR = 'Qatar';
    public const REPUBLIC_OF_THE_CONGO = 'Republic of the Congo';
    public const REUNION = 'Réunion';
    public const ROMANIA = 'Romania';
    public const RUSSIA = 'Russia';
    public const RWANDA = 'Rwanda';
    public const SAINT_BARTHELEMY = 'Saint Barthélemy';
    public const SAINT_HELENA = 'Saint Helena';
    public const SAINT_KITTS_AND_NEVIS = 'Saint Kitts and Nevis';
    public const SAINT_LUCIA = 'Saint Lucia';
    public const SAINT_MARTIN = 'Saint Martin';
    public const SAINT_PIERRE_AND_MIQUELON = 'Saint Pierre and Miquelon';
    public const SAINT_VINCENT_AND_THE_GRENADINES = 'Saint Vincent and the Grenadines';
    public const SAMOA = 'Samoa';
    public const SAN_MARINO = 'San Marino';
    public const SAO_TOME_AND_PRINCIPE = 'São Tomé and Príncipe';
    public const SAUDI_ARABIA = 'Saudi Arabia';
    public const SENEGAL = 'Senegal';
    public const SERBIA = 'Serbia';
    public const SEYCHELLES = 'Seychelles';
    public const SIERRA_LEONE = 'Sierra Leone';
    public const SINGAPORE = 'Singapore';
    public const SINT_MAARTEN = 'Sint Maarten';
    public const SLOVAKIA = 'Slovakia';
    public const SLOVENIA = 'Slovenia';
    public const SOLOMON_ISLANDS = 'Solomon Islands';
    public const SOMALIA = 'Somalia';
    public const SOUTH_AFRICA = 'South Africa';
    public const SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS = 'South Georgia and the South Sandwich Islands';
    public const SOUTH_KOREA = 'South Korea';
    public const SOUTH_SUDAN = 'South Sudan';
    public const SPAIN = 'Spain';
    public const SRI_LANKA = 'Sri Lanka';
    public const SUDAN = 'Sudan';
    public const SURINAME = 'Suriname';
    public const SVALBARD_AND_JAN_MAYEN = 'Svalbard and Jan Mayen';
    public const SWEDEN = 'Sweden';
    public const SWITZERLAND = 'Switzerland';
    public const SYRIA = 'Syria';
    public const TAIWAN = 'Taiwan';
    public const TAJIKISTAN = 'Tajikistan';
    public const TANZANIA = 'Tanzania';
    public const THAILAND = 'Thailand';
    public const TIMOR_LESTE = 'Timor-Leste';
    public const TOGO = 'Togo';
    public const TOKELAU = 'Tokelau';
    public const TONGA = 'Tonga';
    public const TRINIDAD_AND_TOBAGO = 'Trinidad and Tobago';
    public const TUNISIA = 'Tunisia';
    public const TURKEY = 'Turkey';
    public const TURKMENISTAN = 'Turkmenistan';
    public const TURKS_AND_CAICOS_ISLANDS = 'Turks and Caicos Islands';
    public const TUVALU = 'Tuvalu';
    public const UGANDA = 'Uganda';
    public const UKRAINE = 'Ukraine';
    public const UNITED_ARAB_EMIRATES = 'United Arab Emirates';
    public const UNITED_KINGDOM = 'United Kingdom';
    public const UNITED_STATES_OF_AMERICA = 'United States of America';
    public const URUGUAY = 'Uruguay';
    public const US_MINOR_OUTLYING_ISLANDS = 'U.S. Minor Outlying Islands';
    public const UZBEKISTAN = 'Uzbekistan';
    public const VANUATU = 'Vanuatu';
    public const VATICAN_CITY = 'Vatican City';
    public const VENEZUELA = 'Venezuela';
    public const VIET_NAM = 'Viet Nam';
    public const VIRGIN_ISLANDS_BRITISH = 'Virgin Islands (British)';
    public const VIRGIN_ISLANDS_US = 'Virgin Islands (U.S.)';
    public const WALLIS_AND_FUTUNA = 'Wallis and Futuna';
    public const WESTERN_SAHARA = 'Western Sahara';
    public const YEMEN = 'Yemen';
    public const ZAMBIA = 'Zambia';
    public const ZIMBABWE = 'Zimbabwe';

    private CountryInterface $country;

    /**
     * $code is alpha2 ISO code
     *
     * Example: $country = new Country(Country::US);
     *
     * @param string $code
     * @param string $locale
     */
    public function __construct(
        private readonly string $code,
        private readonly string $locale = Language::ENGLISH,
    ) {
        $this->country = Context::getFromCode($code);
    }

    /**
     * Usage: Country::make(Country::US);
     *
     * @param string $code
     * @param string $locale
     *
     * @return Country
     */
    public static function make(
        string $code,
        string $locale = Language::ENGLISH,
    ): self {
        return new self($code, $locale);
    }

    /**
     * Get all the countries
     *
     * @return Collection
     */
    public static function all(): Collection
    {
        return Context::getAll();
    }

    /**
     * Get Continent
     *
     * @return string
     */
    public function getContinent(): string
    {
        return Translator::translate($this->country->getContinent(), $this->locale);
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return Translator::translate($this->country->getName(), $this->locale);
    }

    /**
     * Get Capital
     *
     * @return string
     */
    public function getCapital(): string
    {
        return $this->country->getCapital();
    }

    /**
     * Get Code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Get Alpha3 Code
     *
     * @return string
     */
    public function getAlpha3Code(): string
    {
        return $this->country->getAlpha3Code();
    }

    /**
     * Get Dial Code
     *
     * @return string
     */
    public function getDialCode(): string
    {
        return $this->country->getDialCode();
    }

    /**
     * Get Tld
     *
     * @return string
     */
    public function getTld(): string
    {
        return $this->country->getTld();
    }

    /**
     * Get Date Format
     *
     * @return string
     */
    public function getDateFormat(): string
    {
        return $this->country->getDateFormat();
    }

    /**
     * Get Default Currency
     *
     * @return string
     */
    public function getDefaultCurrency(): string
    {
        return $this->country->getDefaultCurrency();
    }

    /**
     * Get Default Timezone
     *
     * @return string
     */
    public function getDefaultTimezone(): string
    {
        return $this->country->getDefaultTimezone();
    }

    /**
     * Get Default Language
     *
     * @return string
     */
    public function getDefaultLanguage(): string
    {
        return $this->country->getDefaultLanguage();
    }

    /**
     * Get Currencies
     *
     * @return Collection
     */
    public function getCurrencies(): Collection
    {
        return $this->country->getCurrencies();
    }

    /**
     * Get Timezones
     *
     * @return Collection
     */
    public function getTimezones(): Collection
    {
        return $this->country->getTimezones();
    }

    /**
     * Get Languages
     *
     * @return Collection
     */
    public function getLanguages(): Collection
    {
        return $this->country->getLanguages();
    }

    /**
     * Transform object to array
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'continent' => $this->getContinent(),
            'name' => $this->getName(),
            'capital' => $this->getCapital(),
            'code' => $this->getCode(),
            'alpha3_code' => $this->getAlpha3Code(),
            'dial_code' => $this->getDialCode(),
            'tld' => $this->getTld(),
            'date_format' => $this->getDateFormat(),
            'default_currency_code' => $this->getDefaultCurrency(),
            'default_timezone' => $this->getDefaultTimezone(),
            'default_language' => $this->getDefaultLanguage(),
            'currencies' => $this->getCurrencies()->toArray(),
            'timezones' => $this->getTimezones()->toArray(),
            'languages' => $this->getLanguages()->toArray(),
        ];
    }
}
