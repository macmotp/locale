<?php

namespace Macmotp\Locales\Support\Locales;

use Macmotp\Continents\Support\ContinentName;
use Macmotp\Countries\Support\CountryCapital;
use Macmotp\Countries\Support\CountryName;
use Macmotp\Locales\Support\AbstractLocale;
use Macmotp\Locales\Support\LocaleCode;
use Macmotp\Locales\Support\LocaleEnglishName;
use Macmotp\Locales\Support\LocaleFlag;
use Macmotp\Locales\Support\LocaleInterface;
use Macmotp\Locales\Support\LocaleName;

/**
 * Malay
 */
final class MS extends AbstractLocale implements LocaleInterface
{
    public function __construct()
    {
        $this->setCode(LocaleCode::MALAY);
        $this->setName(LocaleName::MALAY);
        $this->setEnglishName(LocaleEnglishName::MALAY);
        $this->setFlag(LocaleFlag::MALAY);
    }

    /**
     * Translate Continent
     *
     * @param ContinentName $name
     * @return string
     */
    public function translateContinent(ContinentName $name): string
    {
        return match ($name) {
            ContinentName::AFRICA => 'Afrika',
            ContinentName::ANTARCTICA => 'Antartika',
            ContinentName::ARCTIC => 'Arktik',
            ContinentName::ASIA => 'Asia',
            ContinentName::EUROPE => 'Eropah',
            ContinentName::NORTH_AMERICA => 'Amerika Utara',
            ContinentName::OCEANIA => 'Oseania',
            ContinentName::SOUTH_AMERICA => 'Amerika Selatan',
        };
    }

    /**
     * Translate Country
     *
     * @param CountryName $name
     * @return string
     */
    public function translateCountry(CountryName $name): string
    {
        return match ($name) {
            CountryName::AFGHANISTAN => 'Afghanistan',
            CountryName::ALAND => 'Åland',
            CountryName::ALBANIA => 'Albania',
            CountryName::ALGERIA => 'Algeria',
            CountryName::AMERICAN_SAMOA => 'Samoa Amerika',
            CountryName::ANDORRA => 'Andorra',
            CountryName::ANGOLA => 'Angola',
            CountryName::ANGUILLA => 'Anguilla',
            CountryName::ANTARCTICA => 'Antartika',
            CountryName::ANTIGUA_AND_BARBUDA => 'Antigua dan Barbuda',
            CountryName::ARGENTINA => 'Argentina',
            CountryName::ARMENIA => 'Armenia',
            CountryName::ARUBA => 'Aruba',
            CountryName::AUSTRALIA => 'Australia',
            CountryName::AUSTRIA => 'Austria',
            CountryName::AZERBAIJAN => 'Azerbaijan',
            CountryName::BAHAMAS => 'Bahamas',
            CountryName::BAHRAIN => 'Bahrain',
            CountryName::BANGLADESH => 'Bangladesh',
            CountryName::BARBADOS => 'Barbados',
            CountryName::BELARUS => 'Belarus',
            CountryName::BELGIUM => 'Belgium',
            CountryName::BELIZE => 'Belize',
            CountryName::BENIN => 'Benin',
            CountryName::BERMUDA => 'Bermuda',
            CountryName::BHUTAN => 'Bhutan',
            CountryName::BOLIVIA => 'Bolivia',
            CountryName::BONAIRE => 'Bonaire',
            CountryName::BOSNIA_AND_HERZEGOVINA => 'Bosnia dan Herzegovina',
            CountryName::BOTSWANA => 'Botswana',
            CountryName::BOUVET_ISLAND => 'Pulau Bouvet',
            CountryName::BRAZIL => 'Brazil',
            CountryName::BRITISH_INDIAN_OCEAN_TERRITORY => 'Wilayah Lautan Hindi British',
            CountryName::BRUNEI => 'Brunei',
            CountryName::BULGARIA => 'Bulgaria',
            CountryName::BURKINA_FASO => 'Burkina Faso',
            CountryName::BURUNDI => 'Burundi',
            CountryName::CAMBODIA => 'Kemboja',
            CountryName::CAMEROON => 'Kamerun',
            CountryName::CANADA => 'Kanada',
            CountryName::CAPE_VERDE => 'Cape Verde',
            CountryName::CAYMAN_ISLANDS => 'Pulau Cayman',
            CountryName::CENTRAL_AFRICAN_REPUBLIC => 'Republik Afrika Tengah',
            CountryName::CHAD => 'Chad',
            CountryName::CHILE => 'Chile',
            CountryName::CHINA => 'China',
            CountryName::CHRISTMAS_ISLAND => 'Pulau Krismas',
            CountryName::COCOS_KEELING_ISLANDS => 'Pulau Cocos (Keeling)',
            CountryName::COLOMBIA => 'Colombia',
            CountryName::COMOROS => 'Komoros',
            CountryName::COOK_ISLANDS => 'Pulau Cook',
            CountryName::COSTA_RICA => 'Costa Rica',
            CountryName::CROATIA => 'Croatia',
            CountryName::CUBA => 'Cuba',
            CountryName::CURACAO => 'Curaçao',
            CountryName::CYPRUS => 'Siprus',
            CountryName::CZECHIA => 'Czechia',
            CountryName::DEMOCRATIC_REPUBLIC_OF_THE_CONGO => 'Republik Demokratik Kongo',
            CountryName::DENMARK => 'Denmark',
            CountryName::DJIBOUTI => 'Djibouti',
            CountryName::DOMINICA => 'Dominica',
            CountryName::DOMINICAN_REPUBLIC => 'Republik Dominican',
            CountryName::ECUADOR => 'Ecuador',
            CountryName::EGYPT => 'Mesir',
            CountryName::EL_SALVADOR => 'El Salvador',
            CountryName::EQUATORIAL_GUINEA => 'Guinea Khatulistiwa',
            CountryName::ERITREA => 'Eritrea',
            CountryName::ESTONIA => 'Estonia',
            CountryName::ESWATINI => 'Eswatini',
            CountryName::ETHIOPIA => 'Ethiopia',
            CountryName::FALKLAND_ISLANDS => 'Pulau Falkland',
            CountryName::FAROE_ISLANDS => 'Pulau Faroe',
            CountryName::FIJI => 'Fiji',
            CountryName::FINLAND => 'Finland',
            CountryName::FRANCE => 'Perancis',
            CountryName::FRENCH_GUIANA => 'Guiana Perancis',
            CountryName::FRENCH_POLYNESIA => 'Polinesia Perancis',
            CountryName::FRENCH_SOUTHERN_TERRITORIES => 'Wilayah Selatan Perancis',
            CountryName::GABON => 'Gabon',
            CountryName::GAMBIA => 'Gambia',
            CountryName::GEORGIA => 'Georgia',
            CountryName::GERMANY => 'Jerman',
            CountryName::GHANA => 'Ghana',
            CountryName::GIBRALTAR => 'Gibraltar',
            CountryName::GREECE => 'Greece',
            CountryName::GREENLAND => 'Greenland',
            CountryName::GRENADA => 'Grenada',
            CountryName::GUADELOUPE => 'Guadeloupe',
            CountryName::GUAM => 'Guam',
            CountryName::GUATEMALA => 'Guatemala',
            CountryName::GUERNSEY => 'Guernsey',
            CountryName::GUINEA => 'Guinea',
            CountryName::GUINEA_BISSAU => 'Guinea-Bissau',
            CountryName::GUYANA => 'Guyana',
            CountryName::HAITI => 'Haiti',
            CountryName::HEARD_ISLAND_AND_MCDONALD_ISLANDS => 'Pulau Heard dan Pulau McDonald',
            CountryName::HONDURAS => 'Honduras',
            CountryName::HONG_KONG => 'Hong Kong',
            CountryName::HUNGARY => 'Hungary',
            CountryName::ICELAND => 'Iceland',
            CountryName::INDIA => 'India',
            CountryName::INDONESIA => 'Indonesia',
            CountryName::IRAN => 'Iran',
            CountryName::IRAQ => 'Irak',
            CountryName::IRELAND => 'Ireland',
            CountryName::ISLE_OF_MAN => 'Isle of Man',
            CountryName::ISRAEL => 'Israel',
            CountryName::ITALY => 'Itali',
            CountryName::IVORY_COAST => 'Pantai Gading',
            CountryName::JAMAICA => 'Jamaica',
            CountryName::JAPAN => 'Jepun',
            CountryName::JERSEY => 'Jersey',
            CountryName::JORDAN => 'Jordan',
            CountryName::KAZAKHSTAN => 'Kazakhstan',
            CountryName::KENYA => 'Kenya',
            CountryName::KIRIBATI => 'Kiribati',
            CountryName::KOSOVO => 'Kosovo',
            CountryName::KUWAIT => 'Kuwait',
            CountryName::KYRGYZSTAN => 'Kyrgyzstan',
            CountryName::LAOS => 'Laos',
            CountryName::LATVIA => 'Latvia',
            CountryName::LEBANON => 'Lubnan',
            CountryName::LESOTHO => 'Lesotho',
            CountryName::LIBERIA => 'Liberia',
            CountryName::LIBYA => 'Libya',
            CountryName::LIECHTENSTEIN => 'Liechtenstein',
            CountryName::LITHUANIA => 'Lithuania',
            CountryName::LUXEMBOURG => 'Luxembourg',
            CountryName::MACAO => 'Macao',
            CountryName::MADAGASCAR => 'Madagaskar',
            CountryName::MALAWI => 'Malawi',
            CountryName::MALAYSIA => 'Malaysia',
            CountryName::MALDIVES => 'Maldives',
            CountryName::MALI => 'Mali',
            CountryName::MALTA => 'Malta',
            CountryName::MARSHALL_ISLANDS => 'Kepulauan Marshall',
            CountryName::MARTINIQUE => 'Martinique',
            CountryName::MAURITANIA => 'Mauritania',
            CountryName::MAURITIUS => 'Mauritius',
            CountryName::MAYOTTE => 'Mayotte',
            CountryName::MEXICO => 'Mexico',
            CountryName::MICRONESIA => 'Micronesia',
            CountryName::MOLDOVA => 'Moldova',
            CountryName::MONACO => 'Monaco',
            CountryName::MONGOLIA => 'Mongolia',
            CountryName::MONTENEGRO => 'Montenegro',
            CountryName::MONTSERRAT => 'Montserrat',
            CountryName::MOROCCO => 'Maghribi',
            CountryName::MOZAMBIQUE => 'Mozambique',
            CountryName::MYANMAR => 'Myanmar',
            CountryName::NAMIBIA => 'Namibia',
            CountryName::NAURU => 'Nauru',
            CountryName::NEPAL => 'Nepal',
            CountryName::NETHERLANDS => 'Belanda',
            CountryName::NEW_CALEDONIA => 'Kaledonia Baru',
            CountryName::NEW_ZEALAND => 'New Zealand',
            CountryName::NICARAGUA => 'Nicaragua',
            CountryName::NIGER => 'Niger',
            CountryName::NIGERIA => 'Nigeria',
            CountryName::NIUE => 'Niue',
            CountryName::NORFOLK_ISLAND => 'Pulau Norfolk',
            CountryName::NORTHERN_MARIANA_ISLANDS => 'Kepulauan Mariana Utara',
            CountryName::NORTH_KOREA => 'Korea Utara',
            CountryName::NORTH_MACEDONIA => 'Macedonia Utara',
            CountryName::NORWAY => 'Norway',
            CountryName::OMAN => 'Oman',
            CountryName::PAKISTAN => 'Pakistan',
            CountryName::PALAU => 'Palau',
            CountryName::PALESTINE => 'Palestin',
            CountryName::PANAMA => 'Panama',
            CountryName::PAPUA_NEW_GUINEA => 'Papua New Guinea',
            CountryName::PARAGUAY => 'Paraguay',
            CountryName::PERU => 'Peru',
            CountryName::PHILIPPINES => 'Filipina',
            CountryName::PITCAIRN_ISLANDS => 'Kepulauan Pitcairn',
            CountryName::POLAND => 'Poland',
            CountryName::PORTUGAL => 'Portugal',
            CountryName::PUERTO_RICO => 'Puerto Rico',
            CountryName::QATAR => 'Qatar',
            CountryName::REPUBLIC_OF_THE_CONGO => 'Republik Congo',
            CountryName::REUNION => 'Réunion',
            CountryName::ROMANIA => 'Romania',
            CountryName::RUSSIA => 'Rusia',
            CountryName::RWANDA => 'Rwanda',
            CountryName::SAINT_BARTHELEMY => 'Saint Barthélemy',
            CountryName::SAINT_HELENA => 'Saint Helena',
            CountryName::SAINT_KITTS_AND_NEVIS => 'Saint Kitts dan Nevis',
            CountryName::SAINT_LUCIA => 'Saint Lucia',
            CountryName::SAINT_MARTIN => 'Saint Martin',
            CountryName::SAINT_PIERRE_AND_MIQUELON => 'Saint Pierre dan Miquelon',
            CountryName::SAINT_VINCENT_AND_THE_GRENADINES => 'Saint Vincent dan Grenadines',
            CountryName::SAMOA => 'Samoa',
            CountryName::SAN_MARINO => 'San Marino',
            CountryName::SAO_TOME_AND_PRINCIPE => 'São Tomé dan Príncipe',
            CountryName::SAUDI_ARABIA => 'Arab Saudi',
            CountryName::SENEGAL => 'Senegal',
            CountryName::SERBIA => 'Serbia',
            CountryName::SEYCHELLES => 'Seychelles',
            CountryName::SIERRA_LEONE => 'Sierra Leone',
            CountryName::SINGAPORE => 'Singapura',
            CountryName::SINT_MAARTEN => 'Sint Maarten',
            CountryName::SLOVAKIA => 'Slovakia',
            CountryName::SLOVENIA => 'Slovenia',
            CountryName::SOLOMON_ISLANDS => 'Kepulauan Solomon',
            CountryName::SOMALIA => 'Somalia',
            CountryName::SOUTH_AFRICA => 'Afrika Selatan',
            CountryName::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS => 'Georgia Selatan dan Kepulauan Sandwich Selatan',
            CountryName::SOUTH_KOREA => 'Korea Selatan',
            CountryName::SOUTH_SUDAN => 'Sudan Selatan',
            CountryName::SPAIN => 'Sepanyol',
            CountryName::SRI_LANKA => 'Sri Lanka',
            CountryName::SUDAN => 'Sudan',
            CountryName::SURINAME => 'Suriname',
            CountryName::SVALBARD_AND_JAN_MAYEN => 'Svalbard dan Jan Mayen',
            CountryName::SWEDEN => 'Sweden',
            CountryName::SWITZERLAND => 'Switzerland',
            CountryName::SYRIA => 'Syria',
            CountryName::TAIWAN => 'Taiwan',
            CountryName::TAJIKISTAN => 'Tajikistan',
            CountryName::TANZANIA => 'Tanzania',
            CountryName::THAILAND => 'Thailand',
            CountryName::TIMOR_LESTE => 'Timor-Leste',
            CountryName::TOGO => 'Togo',
            CountryName::TOKELAU => 'Tokelau',
            CountryName::TONGA => 'Tonga',
            CountryName::TRINIDAD_AND_TOBAGO => 'Trinidad dan Tobago',
            CountryName::TUNISIA => 'Tunisia',
            CountryName::TURKEY => 'Turki',
            CountryName::TURKMENISTAN => 'Turkmenistan',
            CountryName::TURKS_AND_CAICOS_ISLANDS => 'Kepulauan Turks dan Caicos',
            CountryName::TUVALU => 'Tuvalu',
            CountryName::UGANDA => 'Uganda',
            CountryName::UKRAINE => 'Ukraina',
            CountryName::UNITED_ARAB_EMIRATES => 'Emiriah Arab Bersatu',
            CountryName::UNITED_KINGDOM => 'United Kingdom',
            CountryName::UNITED_STATES_OF_AMERICA => 'Amerika Syarikat',
            CountryName::URUGUAY => 'Uruguay',
            CountryName::US_MINOR_OUTLYING_ISLANDS => 'Kepulauan Minor Lautan Pasifik AS',
            CountryName::UZBEKISTAN => 'Uzbekistan',
            CountryName::VANUATU => 'Vanuatu',
            CountryName::VATICAN_CITY => 'Bandar Vatican',
            CountryName::VENEZUELA => 'Venezuela',
            CountryName::VIET_NAM => 'Vietnam',
            CountryName::VIRGIN_ISLANDS_BRITISH => 'Kepulauan Virgin (British)',
            CountryName::VIRGIN_ISLANDS_US => 'Kepulauan Virgin (AS)',
            CountryName::WALLIS_AND_FUTUNA => 'Wallis dan Futuna',
            CountryName::WESTERN_SAHARA => 'Sahara Barat',
            CountryName::YEMEN => 'Yaman',
            CountryName::ZAMBIA => 'Zambia',
            CountryName::ZIMBABWE => 'Zimbabwe',
        };
    }

    /**
     * Translate Capital
     *
     * @param CountryCapital $capital
     * @return string
     */
    public function translateCapital(CountryCapital $capital): string
    {
        return match ($capital) {
            CountryCapital::ABUJA => 'Abuja',
            CountryCapital::ABU_DHABI => 'Abu Dhabi',
            CountryCapital::ACCRA => 'Accra',
            CountryCapital::ADAMSTOWN => 'Adamstown',
            CountryCapital::ADDIS_ABABA => 'Addis Ababa',
            CountryCapital::ALGIERS => 'Algiers',
            CountryCapital::ALOFI => 'Alofi',
            CountryCapital::AMMAN => 'Amman',
            CountryCapital::AMSTERDAM => 'Amsterdam',
            CountryCapital::ANDORRA_LA_VELLA => 'Andorra la Vella',
            CountryCapital::ANKARA => 'Ankara',
            CountryCapital::ANTANANARIVO => 'Antananarivo',
            CountryCapital::APIA => 'Apia',
            CountryCapital::ASHGABAT => 'Ashgabat',
            CountryCapital::ASMARA => 'Asmara',
            CountryCapital::ASUNCION => 'Asunción',
            CountryCapital::ATHENS => 'Athens',
            CountryCapital::AVARUA => 'Avarua',
            CountryCapital::BAGHDAD => 'Baghdad',
            CountryCapital::BAKU => 'Baku',
            CountryCapital::BAMAKO => 'Bamako',
            CountryCapital::BANDAR_SERI_BEGAWAN => 'Bandar Seri Begawan',
            CountryCapital::BANGKOK => 'Bangkok',
            CountryCapital::BANGUI => 'Bangui',
            CountryCapital::BANJUL => 'Banjul',
            CountryCapital::BASSETERRE => 'Basseterre',
            CountryCapital::BASSE_TERRE => 'Basse-Terre',
            CountryCapital::BEIJING => 'Beijing',
            CountryCapital::BEIRUT => 'Beirut',
            CountryCapital::BELGRADE => 'Belgrade',
            CountryCapital::BELMOPAN => 'Belmopan',
            CountryCapital::BERLIN => 'Berlin',
            CountryCapital::BERN => 'Bern',
            CountryCapital::BISHKEK => 'Bishkek',
            CountryCapital::BISSAU => 'Bissau',
            CountryCapital::BOGOTA => 'Bogotá',
            CountryCapital::BRASILIA => 'Brasília',
            CountryCapital::BRATISLAVA => 'Bratislava',
            CountryCapital::BRAZZAVILLE => 'Brazzaville',
            CountryCapital::BRIDGETOWN => 'Bridgetown',
            CountryCapital::BRUSSELS => 'Brussels',
            CountryCapital::BUCHAREST => 'Bucharest',
            CountryCapital::BUDAPEST => 'Budapest',
            CountryCapital::BUENOS_AIRES => 'Buenos Aires',
            CountryCapital::CAIRO => 'Cairo',
            CountryCapital::CANBERRA => 'Canberra',
            CountryCapital::CARACAS => 'Caracas',
            CountryCapital::CASTRIES => 'Castries',
            CountryCapital::CAYENNE => 'Cayenne',
            CountryCapital::CHARLOTTE_AMALIE => 'Charlotte Amalie',
            CountryCapital::CHISINAU => 'Chișinău',
            CountryCapital::COCKBURN_TOWN => 'Cockburn Town',
            CountryCapital::COLOMBO => 'Colombo',
            CountryCapital::CONAKRY => 'Conakry',
            CountryCapital::COPENHAGEN => 'Copenhagen',
            CountryCapital::DAKAR => 'Dakar',
            CountryCapital::DAMASCUS => 'Damascus',
            CountryCapital::DHAKA => 'Dhaka',
            CountryCapital::DIEGO_GARCIA => 'Diego Garcia',
            CountryCapital::DILI => 'Dili',
            CountryCapital::DJIBOUTI_CITY => 'Djibouti City',
            CountryCapital::DODOMA => 'Dodoma',
            CountryCapital::DOHA => 'Doha',
            CountryCapital::DOUGLAS => 'Douglas',
            CountryCapital::DUBLIN => 'Dublin',
            CountryCapital::DUSHANBE => 'Dushanbe',
            CountryCapital::EAST_JERUSALEM => 'Jerusalem Timur',
            CountryCapital::EL_AAIUN => 'El Aaiún',
            CountryCapital::FAKAOFO => 'Fakaofo',
            CountryCapital::FLYING_FISH_COVE => 'Flying Fish Cove',
            CountryCapital::FORT_DE_FRANCE => 'Fort-de-France',
            CountryCapital::FREETOWN => 'Freetown',
            CountryCapital::FUNAFUTI => 'Funafuti',
            CountryCapital::GABORONE => 'Gaborone',
            CountryCapital::GEORGETOWN => 'Georgetown',
            CountryCapital::GEORGE_TOWN => 'George Town',
            CountryCapital::GIBRALTAR => 'Gibraltar',
            CountryCapital::GITEGA => 'Gitega',
            CountryCapital::GUATEMALA_CITY => 'Guatemala City',
            CountryCapital::GUSTAVIA => 'Gustavia',
            CountryCapital::HAGATNA => 'Hagåtña',
            CountryCapital::HAMILTON => 'Hamilton',
            CountryCapital::HANOI => 'Hanoi',
            CountryCapital::HARARE => 'Harare',
            CountryCapital::HAVANA => 'Havana',
            CountryCapital::HELSINKI => 'Helsinki',
            CountryCapital::HONG_KONG => 'Hong Kong',
            CountryCapital::HONIARA => 'Honiara',
            CountryCapital::ISLAMABAD => 'Islamabad',
            CountryCapital::JAKARTA => 'Jakarta',
            CountryCapital::JAMESTOWN => 'Jamestown',
            CountryCapital::JERUSALEM => 'Jerusalem',
            CountryCapital::JUBA => 'Juba',
            CountryCapital::KABUL => 'Kabul',
            CountryCapital::KAMPALA => 'Kampala',
            CountryCapital::KATHMANDU => 'Kathmandu',
            CountryCapital::KHARTOUM => 'Khartoum',
            CountryCapital::KIGALI => 'Kigali',
            CountryCapital::KINGSTON => 'Kingston',
            CountryCapital::KINGSTOWN => 'Kingstown',
            CountryCapital::KING_EDWARD_POINT => 'King Edward Point',
            CountryCapital::KINSHASA => 'Kinshasa',
            CountryCapital::KRALENDIJK => 'Kralendijk',
            CountryCapital::KUALA_LUMPUR => 'Kuala Lumpur',
            CountryCapital::KUWAIT_CITY => 'Kuwait City',
            CountryCapital::KYIV => 'Kyiv',
            CountryCapital::LIBREVILLE => 'Libreville',
            CountryCapital::LILONGWE => 'Lilongwe',
            CountryCapital::LIMA => 'Lima',
            CountryCapital::LISBON => 'Lisbon',
            CountryCapital::LJUBLJANA => 'Ljubljana',
            CountryCapital::LOME => 'Lomé',
            CountryCapital::LONDON => 'London',
            CountryCapital::LONGYEARBYEN => 'Longyearbyen',
            CountryCapital::LUANDA => 'Luanda',
            CountryCapital::LUSAKA => 'Lusaka',
            CountryCapital::LUXEMBOURG => 'Luxembourg',
            CountryCapital::MACAO => 'Macao',
            CountryCapital::MADRID => 'Madrid',
            CountryCapital::MAJURO => 'Majuro',
            CountryCapital::MALABO => 'Malabo',
            CountryCapital::MALE => 'Malé',
            CountryCapital::MAMOUDZOU => 'Mamoudzou',
            CountryCapital::MANAGUA => 'Managua',
            CountryCapital::MANAMA => 'Manama',
            CountryCapital::MANILA => 'Manila',
            CountryCapital::MAPUTO => 'Maputo',
            CountryCapital::MARIEHAMN => 'Mariehamn',
            CountryCapital::MARIGOT => 'Marigot',
            CountryCapital::MASERU => 'Maseru',
            CountryCapital::MATA_UTU => 'Mata-Utu',
            CountryCapital::MBABANE => 'Mbabane',
            CountryCapital::MEXICO_CITY => 'Mexico City',
            CountryCapital::MINSK => 'Minsk',
            CountryCapital::MOGADISHU => 'Mogadishu',
            CountryCapital::MONACO => 'Monaco',
            CountryCapital::MONROVIA => 'Monrovia',
            CountryCapital::MONTEVIDEO => 'Montevideo',
            CountryCapital::MORONI => 'Moroni',
            CountryCapital::MOSCOW => 'Moscow',
            CountryCapital::MUSCAT => 'Muscat',
            CountryCapital::NA => 'N/A',
            CountryCapital::NAIROBI => 'Nairobi',
            CountryCapital::NASSAU => 'Nassau',
            CountryCapital::NAYPYIDAW => 'Naypyidaw',
            CountryCapital::NDJAMENA => 'N\'Djamena',
            CountryCapital::NEW_DELHI => 'New Delhi',
            CountryCapital::NGERULMUD => 'Ngerulmud',
            CountryCapital::NIAMEY => 'Niamey',
            CountryCapital::NICOSIA => 'Nicosia',
            CountryCapital::NONE => 'Tiada',
            CountryCapital::NOUAKCHOTT => 'Nouakchott',
            CountryCapital::NOUMEA => 'Nouméa',
            CountryCapital::NUKUALOFA => 'Nuku\'alofa',
            CountryCapital::NUR_SULTAN => 'Nur-Sultan',
            CountryCapital::NUUK => 'Nuuk',
            CountryCapital::ORANJESTAD => 'Oranjestad',
            CountryCapital::OSLO => 'Oslo',
            CountryCapital::OTTAWA => 'Ottawa',
            CountryCapital::OUAGADOUGOU => 'Ouagadougou',
            CountryCapital::PAGO_PAGO => 'Pago Pago',
            CountryCapital::PALIKIR => 'Palikir',
            CountryCapital::PANAMA_CITY => 'Panama City',
            CountryCapital::PAPEETE => 'Papeete',
            CountryCapital::PARAMARIBO => 'Paramaribo',
            CountryCapital::PARIS => 'Paris',
            CountryCapital::PHILIPSBURG => 'Philipsburg',
            CountryCapital::PHNOM_PENH => 'Phnom Penh',
            CountryCapital::PLYMOUTH => 'Plymouth',
            CountryCapital::PODGORICA => 'Podgorica',
            CountryCapital::PORTO_NOVO => 'Porto-Novo',
            CountryCapital::PORT_AUX_FRANCAIS => 'Port-aux-Français',
            CountryCapital::PORT_AU_PRINCE => 'Port-au-Prince',
            CountryCapital::PORT_LOUIS => 'Port Louis',
            CountryCapital::PORT_MORESBY => 'Port Moresby',
            CountryCapital::PORT_OF_SPAIN => 'Port of Spain',
            CountryCapital::PORT_VILA => 'Port Vila',
            CountryCapital::PRAGUE => 'Prague',
            CountryCapital::PRAIA => 'Praia',
            CountryCapital::PRETORIA => 'Pretoria',
            CountryCapital::PRISTINA => 'Pristina',
            CountryCapital::PYONGYANG => 'Pyongyang',
            CountryCapital::QUITO => 'Quito',
            CountryCapital::RABAT => 'Rabat',
            CountryCapital::REYKJAVIK => 'Reykjavik',
            CountryCapital::RIGA => 'Riga',
            CountryCapital::RIYADH => 'Riyadh',
            CountryCapital::ROAD_TOWN => 'Road Town',
            CountryCapital::ROME => 'Rom',
            CountryCapital::ROSEAU => 'Roseau',
            CountryCapital::SAINT_DENIS => 'Saint-Denis',
            CountryCapital::SAINT_HELIER => 'Saint Helier',
            CountryCapital::SAINT_JOHNS => 'Saint John\'s',
            CountryCapital::SAINT_PIERRE => 'Saint-Pierre',
            CountryCapital::SAIPAN => 'Saipan',
            CountryCapital::SANA_A => 'Sana\'a',
            CountryCapital::SANTIAGO => 'Santiago',
            CountryCapital::SANTO_DOMINGO => 'Santo Domingo',
            CountryCapital::SAN_JOSE => 'San José',
            CountryCapital::SAN_JUAN => 'San Juan',
            CountryCapital::SAN_MARINO => 'San Marino',
            CountryCapital::SAN_SALVADOR => 'San Salvador',
            CountryCapital::SAO_TOME => 'São Tomé',
            CountryCapital::SARAJEVO => 'Sarajevo',
            CountryCapital::SEOUL => 'Seoul',
            CountryCapital::SINGAPORE => 'Singapura',
            CountryCapital::SKOPJE => 'Skopje',
            CountryCapital::SOFIA => 'Sofia',
            CountryCapital::SOUTH_TARAWA => 'South Tarawa',
            CountryCapital::STANLEY => 'Stanley',
            CountryCapital::STOCKHOLM => 'Stockholm',
            CountryCapital::ST_GEORGES => 'St. George\'s',
            CountryCapital::ST_PETER_PORT => 'St. Peter Port',
            CountryCapital::SUCRE => 'Sucre',
            CountryCapital::SUVA => 'Suva',
            CountryCapital::TAIPEI => 'Taipei',
            CountryCapital::TALLINN => 'Tallinn',
            CountryCapital::TASHKENT => 'Tashkent',
            CountryCapital::TBILISI => 'Tbilisi',
            CountryCapital::TEGUCIGALPA => 'Tegucigalpa',
            CountryCapital::TEHRAN => 'Tehran',
            CountryCapital::THE_VALLEY => 'The Valley',
            CountryCapital::THIMPHU => 'Thimphu',
            CountryCapital::TIRANA => 'Tirana',
            CountryCapital::TOKYO => 'Tokyo',
            CountryCapital::TORSHAVN => 'Tórshavn',
            CountryCapital::TRIPOLI => 'Tripoli',
            CountryCapital::TUNIS => 'Tunis',
            CountryCapital::ULAANBAATAR => 'Ulaanbaatar',
            CountryCapital::VADUZ => 'Vaduz',
            CountryCapital::VALLETTA => 'Valletta',
            CountryCapital::VATICAN_CITY => 'Vatikana City',
            CountryCapital::VICTORIA => 'Victoria',
            CountryCapital::VIENNA => 'Vienna',
            CountryCapital::VIENTIANE => 'Vientiane',
            CountryCapital::VILNIUS => 'Vilnius',
            CountryCapital::WARSAW => 'Warsaw',
            CountryCapital::WASHINGTON_DC => 'Washington, D.C.',
            CountryCapital::WELLINGTON => 'Wellington',
            CountryCapital::WEST_ISLAND => 'West Island',
            CountryCapital::WILLEMSTAD => 'Willemstad',
            CountryCapital::WINDHOEK => 'Windhoek',
            CountryCapital::YAMOUSSOUKRO => 'Yamoussoukro',
            CountryCapital::YAOUNDE => 'Yaoundé',
            CountryCapital::YAREN => 'Yaren',
            CountryCapital::YEREVAN => 'Yerevan',
            CountryCapital::ZAGREB => 'Zagreb',
        };
    }
}
