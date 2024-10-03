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
 * Dutch
 */
final class NL extends AbstractLocale implements LocaleInterface
{
    public function __construct()
    {
        $this->setCode(LocaleCode::DUTCH);
        $this->setName(LocaleName::DUTCH);
        $this->setEnglishName(LocaleEnglishName::DUTCH);
        $this->setFlag(LocaleFlag::DUTCH);
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
            ContinentName::ANTARCTICA => 'Antarctica',
            ContinentName::ARCTIC => 'Arctisch',
            ContinentName::ASIA => 'Azië',
            ContinentName::EUROPE => 'Europa',
            ContinentName::NORTH_AMERICA => 'Noord-Amerika',
            ContinentName::OCEANIA => 'Oceanië',
            ContinentName::SOUTH_AMERICA => 'Zuid-Amerika',
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
            CountryName::ALBANIA => 'Albanië',
            CountryName::ALGERIA => 'Algerije',
            CountryName::AMERICAN_SAMOA => 'Amerikaans Samoa',
            CountryName::ANDORRA => 'Andorra',
            CountryName::ANGOLA => 'Angola',
            CountryName::ANGUILLA => 'Anguilla',
            CountryName::ANTARCTICA => 'Antarctica',
            CountryName::ANTIGUA_AND_BARBUDA => 'Antigua en Barbuda',
            CountryName::ARGENTINA => 'Argentinië',
            CountryName::ARMENIA => 'Armenië',
            CountryName::ARUBA => 'Aruba',
            CountryName::AUSTRALIA => 'Australië',
            CountryName::AUSTRIA => 'Oostenrijk',
            CountryName::AZERBAIJAN => 'Azerbeidzjan',
            CountryName::BAHAMAS => 'Bahama’s',
            CountryName::BAHRAIN => 'Bahrain',
            CountryName::BANGLADESH => 'Bangladesh',
            CountryName::BARBADOS => 'Barbados',
            CountryName::BELARUS => 'Wit-Rusland',
            CountryName::BELGIUM => 'België',
            CountryName::BELIZE => 'Belize',
            CountryName::BENIN => 'Benin',
            CountryName::BERMUDA => 'Bermuda',
            CountryName::BHUTAN => 'Bhutan',
            CountryName::BOLIVIA => 'Bolivia',
            CountryName::BONAIRE => 'Bonaire',
            CountryName::BOSNIA_AND_HERZEGOVINA => 'Bosnië en Herzegovina',
            CountryName::BOTSWANA => 'Botswana',
            CountryName::BOUVET_ISLAND => 'Bouvet eiland',
            CountryName::BRAZIL => 'Brazilië',
            CountryName::BRITISH_INDIAN_OCEAN_TERRITORY => 'Brits Indische Oceaangebied',
            CountryName::BRUNEI => 'Brunei',
            CountryName::BULGARIA => 'Bulgarije',
            CountryName::BURKINA_FASO => 'Burkina Faso',
            CountryName::BURUNDI => 'Burundi',
            CountryName::CAMBODIA => 'Cambodja',
            CountryName::CAMEROON => 'Kameroen',
            CountryName::CANADA => 'Canada',
            CountryName::CAPE_VERDE => 'Kaapverdië',
            CountryName::CAYMAN_ISLANDS => 'Kaaimaneilanden',
            CountryName::CENTRAL_AFRICAN_REPUBLIC => 'Centraal-Afrikaanse Republiek',
            CountryName::CHAD => 'Tsjaad',
            CountryName::CHILE => 'Chili',
            CountryName::CHINA => 'China',
            CountryName::CHRISTMAS_ISLAND => 'Kerstmis eiland',
            CountryName::COCOS_KEELING_ISLANDS => 'Cocos (Keeling) eilanden',
            CountryName::COLOMBIA => 'Colombia',
            CountryName::COMOROS => 'Comoren',
            CountryName::COOK_ISLANDS => 'Cookeilanden',
            CountryName::COSTA_RICA => 'Costa Rica',
            CountryName::CROATIA => 'Kroatië',
            CountryName::CUBA => 'Cuba',
            CountryName::CURACAO => 'Curaçao',
            CountryName::CYPRUS => 'Cyprus',
            CountryName::CZECHIA => 'Tsjechië',
            CountryName::DEMOCRATIC_REPUBLIC_OF_THE_CONGO => 'Democratische Republiek Congo',
            CountryName::DENMARK => 'Denemarken',
            CountryName::DJIBOUTI => 'Djibouti',
            CountryName::DOMINICA => 'Dominica',
            CountryName::DOMINICAN_REPUBLIC => 'Dominicaanse Republiek',
            CountryName::ECUADOR => 'Ecuador',
            CountryName::EGYPT => 'Egypte',
            CountryName::EL_SALVADOR => 'El Salvador',
            CountryName::EQUATORIAL_GUINEA => 'Equatoriaal-Guinea',
            CountryName::ERITREA => 'Eritrea',
            CountryName::ESTONIA => 'Estland',
            CountryName::ESWATINI => 'Eswatini',
            CountryName::ETHIOPIA => 'Ethiopië',
            CountryName::FALKLAND_ISLANDS => 'Falklandeilanden',
            CountryName::FAROE_ISLANDS => 'Faroer eilanden',
            CountryName::FIJI => 'Fiji',
            CountryName::FINLAND => 'Finland',
            CountryName::FRANCE => 'Frankrijk',
            CountryName::FRENCH_GUIANA => 'Frans-Guyana',
            CountryName::FRENCH_POLYNESIA => 'Frans-Polynesië',
            CountryName::FRENCH_SOUTHERN_TERRITORIES => 'Franse Zuidelijke Gebieden',
            CountryName::GABON => 'Gabon',
            CountryName::GAMBIA => 'Gambia',
            CountryName::GEORGIA => 'Georgië',
            CountryName::GERMANY => 'Duitsland',
            CountryName::GHANA => 'Ghana',
            CountryName::GIBRALTAR => 'Gibraltar',
            CountryName::GREECE => 'Griekenland',
            CountryName::GREENLAND => 'Groenland',
            CountryName::GRENADA => 'Grenada',
            CountryName::GUADELOUPE => 'Guadeloupe',
            CountryName::GUAM => 'Guam',
            CountryName::GUATEMALA => 'Guatemala',
            CountryName::GUERNSEY => 'Guernsey',
            CountryName::GUINEA => 'Guinea',
            CountryName::GUINEA_BISSAU => 'Guinea-Bissau',
            CountryName::GUYANA => 'Guyana',
            CountryName::HAITI => 'Haiti',
            CountryName::HEARD_ISLAND_AND_MCDONALD_ISLANDS => 'Heard Island en McDonald Eilanden',
            CountryName::HONDURAS => 'Honduras',
            CountryName::HONG_KONG => 'Hongkong',
            CountryName::HUNGARY => 'Hongarije',
            CountryName::ICELAND => 'IJsland',
            CountryName::INDIA => 'India',
            CountryName::INDONESIA => 'Indonesië',
            CountryName::IRAN => 'Iran',
            CountryName::IRAQ => 'Irak',
            CountryName::IRELAND => 'Ierland',
            CountryName::ISLE_OF_MAN => 'Isle of Man',
            CountryName::ISRAEL => 'Israël',
            CountryName::ITALY => 'Italië',
            CountryName::IVORY_COAST => 'Ivoorkust',
            CountryName::JAMAICA => 'Jamaica',
            CountryName::JAPAN => 'Japan',
            CountryName::JERSEY => 'Jersey',
            CountryName::JORDAN => 'Jordanië',
            CountryName::KAZAKHSTAN => 'Kazachstan',
            CountryName::KENYA => 'Kenia',
            CountryName::KIRIBATI => 'Kiribati',
            CountryName::KOSOVO => 'Kosovo',
            CountryName::KUWAIT => 'Kuwait',
            CountryName::KYRGYZSTAN => 'Kirgizië',
            CountryName::LAOS => 'Laos',
            CountryName::LATVIA => 'Letland',
            CountryName::LEBANON => 'Libanon',
            CountryName::LESOTHO => 'Lesotho',
            CountryName::LIBERIA => 'Liberia',
            CountryName::LIBYA => 'Libië',
            CountryName::LIECHTENSTEIN => 'Liechtenstein',
            CountryName::LITHUANIA => 'Litouwen',
            CountryName::LUXEMBOURG => 'Luxemburg',
            CountryName::MACAO => 'Macao',
            CountryName::MADAGASCAR => 'Madagaskar',
            CountryName::MALAWI => 'Malawi',
            CountryName::MALAYSIA => 'Maleisië',
            CountryName::MALDIVES => 'Maldiven',
            CountryName::MALI => 'Mali',
            CountryName::MALTA => 'Malta',
            CountryName::MARSHALL_ISLANDS => 'Marshalleilanden',
            CountryName::MARTINIQUE => 'Martinique',
            CountryName::MAURITANIA => 'Mauritanië',
            CountryName::MAURITIUS => 'Mauritius',
            CountryName::MAYOTTE => 'Mayotte',
            CountryName::MEXICO => 'Mexico',
            CountryName::MICRONESIA => 'Micronesië',
            CountryName::MOLDOVA => 'Moldavië',
            CountryName::MONACO => 'Monaco',
            CountryName::MONGOLIA => 'Mongolië',
            CountryName::MONTENEGRO => 'Montenegro',
            CountryName::MONTSERRAT => 'Montserrat',
            CountryName::MOROCCO => 'Marokko',
            CountryName::MOZAMBIQUE => 'Mozambique',
            CountryName::MYANMAR => 'Myanmar',
            CountryName::NAMIBIA => 'Namibië',
            CountryName::NAURU => 'Nauru',
            CountryName::NEPAL => 'Nepal',
            CountryName::NETHERLANDS => 'Nederland',
            CountryName::NEW_CALEDONIA => 'Nieuw-Caledonië',
            CountryName::NEW_ZEALAND => 'Nieuw-Zeeland',
            CountryName::NICARAGUA => 'Nicaragua',
            CountryName::NIGER => 'Niger',
            CountryName::NIGERIA => 'Nigeria',
            CountryName::NIUE => 'Niue',
            CountryName::NORFOLK_ISLAND => 'Norfolkeiland',
            CountryName::NORTHERN_MARIANA_ISLANDS => 'Noordelijke Marianeneilanden',
            CountryName::NORTH_KOREA => 'Noord-Korea',
            CountryName::NORTH_MACEDONIA => 'Noord-Macedonië',
            CountryName::NORWAY => 'Noorwegen',
            CountryName::OMAN => 'Oman',
            CountryName::PAKISTAN => 'Pakistan',
            CountryName::PALAU => 'Palau',
            CountryName::PALESTINE => 'Palestina',
            CountryName::PANAMA => 'Panama',
            CountryName::PAPUA_NEW_GUINEA => 'Papoea-Nieuw-Guinea',
            CountryName::PARAGUAY => 'Paraguay',
            CountryName::PERU => 'Peru',
            CountryName::PHILIPPINES => 'Filipijnen',
            CountryName::PITCAIRN_ISLANDS => 'Pitcairn eilanden',
            CountryName::POLAND => 'Polen',
            CountryName::PORTUGAL => 'Portugal',
            CountryName::PUERTO_RICO => 'Puerto Rico',
            CountryName::QATAR => 'Qatar',
            CountryName::REPUBLIC_OF_THE_CONGO => 'Republiek Congo',
            CountryName::REUNION => 'Réunion',
            CountryName::ROMANIA => 'Roemenië',
            CountryName::RUSSIA => 'Rusland',
            CountryName::RWANDA => 'Rwanda',
            CountryName::SAINT_BARTHELEMY => 'Saint Barthélemy',
            CountryName::SAINT_HELENA => 'Sint Helena',
            CountryName::SAINT_KITTS_AND_NEVIS => 'Saint Kitts en Nevis',
            CountryName::SAINT_LUCIA => 'Saint Lucia',
            CountryName::SAINT_MARTIN, CountryName::SINT_MAARTEN => 'Sint Maarten',
            CountryName::SAINT_PIERRE_AND_MIQUELON => 'Saint Pierre en Miquelon',
            CountryName::SAINT_VINCENT_AND_THE_GRENADINES => 'Saint Vincent en de Grenadines',
            CountryName::SAMOA => 'Samoa',
            CountryName::SAN_MARINO => 'San Marino',
            CountryName::SAO_TOME_AND_PRINCIPE => 'São Tomé en Príncipe',
            CountryName::SAUDI_ARABIA => 'Saoedi-Arabië',
            CountryName::SENEGAL => 'Senegal',
            CountryName::SERBIA => 'Servië',
            CountryName::SEYCHELLES => 'Seychellen',
            CountryName::SIERRA_LEONE => 'Sierra Leone',
            CountryName::SINGAPORE => 'Singapore',
            CountryName::SLOVAKIA => 'Slowakije',
            CountryName::SLOVENIA => 'Slovenië',
            CountryName::SOLOMON_ISLANDS => 'Salomonseilanden',
            CountryName::SOMALIA => 'Somalië',
            CountryName::SOUTH_AFRICA => 'Zuid-Afrika',
            CountryName::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS => 'Zuid-Georgië en de Zuidelijke Sandwicheilanden',
            CountryName::SOUTH_KOREA => 'Zuid-Korea',
            CountryName::SOUTH_SUDAN => 'Zuid-Sudan',
            CountryName::SPAIN => 'Spanje',
            CountryName::SRI_LANKA => 'Sri Lanka',
            CountryName::SUDAN => 'Soedan',
            CountryName::SURINAME => 'Suriname',
            CountryName::SVALBARD_AND_JAN_MAYEN => 'Svalbard en Jan Mayen',
            CountryName::SWEDEN => 'Zweden',
            CountryName::SWITZERLAND => 'Zwitserland',
            CountryName::SYRIA => 'Syrië',
            CountryName::TAIWAN => 'Taiwan',
            CountryName::TAJIKISTAN => 'Tadzjikistan',
            CountryName::TANZANIA => 'Tanzania',
            CountryName::THAILAND => 'Thailand',
            CountryName::TIMOR_LESTE => 'Timor-Leste',
            CountryName::TOGO => 'Togo',
            CountryName::TOKELAU => 'Tokelau',
            CountryName::TONGA => 'Tonga',
            CountryName::TRINIDAD_AND_TOBAGO => 'Trinidad en Tobago',
            CountryName::TUNISIA => 'Tunesië',
            CountryName::TURKEY => 'Turkije',
            CountryName::TURKMENISTAN => 'Turkmenistan',
            CountryName::TURKS_AND_CAICOS_ISLANDS => 'Turks- en Caicoseilanden',
            CountryName::TUVALU => 'Tuvalu',
            CountryName::UGANDA => 'Oeganda',
            CountryName::UKRAINE => 'Oekraïne',
            CountryName::UNITED_ARAB_EMIRATES => 'Verenigde Arabische Emiraten',
            CountryName::UNITED_KINGDOM => 'Verenigd Koninkrijk',
            CountryName::UNITED_STATES_OF_AMERICA => 'Verenigde Staten van Amerika',
            CountryName::URUGUAY => 'Uruguay',
            CountryName::US_MINOR_OUTLYING_ISLANDS => 'U.S. Minor Outlying Islands',
            CountryName::UZBEKISTAN => 'Oezbekistan',
            CountryName::VANUATU => 'Vanuatu',
            CountryName::VATICAN_CITY => 'Vaticaanstad',
            CountryName::VENEZUELA => 'Venezuela',
            CountryName::VIET_NAM => 'Vietnam',
            CountryName::VIRGIN_ISLANDS_BRITISH => 'Maagdeneilanden (Brits)',
            CountryName::VIRGIN_ISLANDS_US => 'Maagdeneilanden (VS)',
            CountryName::WALLIS_AND_FUTUNA => 'Wallis en Futuna',
            CountryName::WESTERN_SAHARA => 'Westelijke Sahara',
            CountryName::YEMEN => 'Jemen',
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
            CountryCapital::ASHGABAT => 'Asjchabad',
            CountryCapital::ASMARA => 'Asmara',
            CountryCapital::ASUNCION => 'Asunción',
            CountryCapital::ATHENS => 'Athene',
            CountryCapital::AVARUA => 'Avarua',
            CountryCapital::BAGHDAD => 'Bagdad',
            CountryCapital::BAKU => 'Bakoe',
            CountryCapital::BAMAKO => 'Bamako',
            CountryCapital::BANDAR_SERI_BEGAWAN => 'Bandar Seri Begawan',
            CountryCapital::BANGKOK => 'Bangkok',
            CountryCapital::BANGUI => 'Bangui',
            CountryCapital::BANJUL => 'Banjul',
            CountryCapital::BASSETERRE => 'Basseterre',
            CountryCapital::BASSE_TERRE => 'Basse-Terre',
            CountryCapital::BEIJING => 'Peking',
            CountryCapital::BEIRUT => 'Beiroet',
            CountryCapital::BELGRADE => 'Belgrado',
            CountryCapital::BELMOPAN => 'Belmopan',
            CountryCapital::BERLIN => 'Berlijn',
            CountryCapital::BERN => 'Bern',
            CountryCapital::BISHKEK => 'Bishkek',
            CountryCapital::BISSAU => 'Bissau',
            CountryCapital::BOGOTA => 'Bogotá',
            CountryCapital::BRASILIA => 'Brasilia',
            CountryCapital::BRATISLAVA => 'Bratislava',
            CountryCapital::BRAZZAVILLE => 'Brazzaville',
            CountryCapital::BRIDGETOWN => 'Bridgetown',
            CountryCapital::BRUSSELS => 'Brussel',
            CountryCapital::BUCHAREST => 'Boekarest',
            CountryCapital::BUDAPEST => 'Boedapest',
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
            CountryCapital::COPENHAGEN => 'Kopenhagen',
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
            CountryCapital::DUSHANBE => 'Doetsjande',
            CountryCapital::EAST_JERUSALEM => 'Oost-Jeruzalem',
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
            CountryCapital::GUATEMALA_CITY => 'Guatemala-Stad',
            CountryCapital::GUSTAVIA => 'Gustavia',
            CountryCapital::HAGATNA => 'Hagåtña',
            CountryCapital::HAMILTON => 'Hamilton',
            CountryCapital::HANOI => 'Hanoi',
            CountryCapital::HARARE => 'Harare',
            CountryCapital::HAVANA => 'Havana',
            CountryCapital::HELSINKI => 'Helsinki',
            CountryCapital::HONG_KONG => 'Hongkong',
            CountryCapital::HONIARA => 'Honiara',
            CountryCapital::ISLAMABAD => 'Islamabad',
            CountryCapital::JAKARTA => 'Jakarta',
            CountryCapital::JAMESTOWN => 'Jamestown',
            CountryCapital::JERUSALEM => 'Jeruzalem',
            CountryCapital::JUBA => 'Juba',
            CountryCapital::KABUL => 'Kabul',
            CountryCapital::KAMPALA => 'Kampala',
            CountryCapital::KATHMANDU => 'Kathmandu',
            CountryCapital::KHARTOUM => 'Khartoem',
            CountryCapital::KIGALI => 'Kigali',
            CountryCapital::KINGSTON => 'Kingston',
            CountryCapital::KINGSTOWN => 'Kingstown',
            CountryCapital::KING_EDWARD_POINT => 'King Edward Point',
            CountryCapital::KINSHASA => 'Kinshasa',
            CountryCapital::KRALENDIJK => 'Kralendijk',
            CountryCapital::KUALA_LUMPUR => 'Kuala Lumpur',
            CountryCapital::KUWAIT_CITY => 'Koeweit-Stad',
            CountryCapital::KYIV => 'Kyiv',
            CountryCapital::LIBREVILLE => 'Libreville',
            CountryCapital::LILONGWE => 'Lilongwe',
            CountryCapital::LIMA => 'Lima',
            CountryCapital::LISBON => 'Lissabon',
            CountryCapital::LJUBLJANA => 'Ljubljana',
            CountryCapital::LOME => 'Lomé',
            CountryCapital::LONDON => 'Londen',
            CountryCapital::LONGYEARBYEN => 'Longyearbyen',
            CountryCapital::LUANDA => 'Luanda',
            CountryCapital::LUSAKA => 'Lusaka',
            CountryCapital::LUXEMBOURG => 'Luxemburg',
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
            CountryCapital::MEXICO_CITY => 'Mexico-Stad',
            CountryCapital::MINSK => 'Minsk',
            CountryCapital::MOGADISHU => 'Mogadishu',
            CountryCapital::MONACO => 'Monaco',
            CountryCapital::MONROVIA => 'Monrovia',
            CountryCapital::MONTEVIDEO => 'Montevideo',
            CountryCapital::MORONI => 'Moroni',
            CountryCapital::MOSCOW => 'Moskou',
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
            CountryCapital::NONE => 'Geen',
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
            CountryCapital::PANAMA_CITY => 'Panama-Stad',
            CountryCapital::PAPEETE => 'Papeete',
            CountryCapital::PARAMARIBO => 'Paramaribo',
            CountryCapital::PARIS => 'Parijs',
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
            CountryCapital::PRAGUE => 'Praag',
            CountryCapital::PRAIA => 'Praia',
            CountryCapital::PRETORIA => 'Pretoria',
            CountryCapital::PRISTINA => 'Pristina',
            CountryCapital::PYONGYANG => 'Pyongyang',
            CountryCapital::QUITO => 'Quito',
            CountryCapital::RABAT => 'Rabat',
            CountryCapital::REYKJAVIK => 'Reykjavik',
            CountryCapital::RIGA => 'Riga',
            CountryCapital::RIYADH => 'Riyad',
            CountryCapital::ROAD_TOWN => 'Road Town',
            CountryCapital::ROME => 'Rome',
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
            CountryCapital::SINGAPORE => 'Singapore',
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
            CountryCapital::TOKYO => 'Tokio',
            CountryCapital::TORSHAVN => 'Tórshavn',
            CountryCapital::TRIPOLI => 'Tripoli',
            CountryCapital::TUNIS => 'Tunis',
            CountryCapital::ULAANBAATAR => 'Ulaanbaatar',
            CountryCapital::VADUZ => 'Vaduz',
            CountryCapital::VALLETTA => 'Valletta',
            CountryCapital::VATICAN_CITY => 'Vaticaanstad',
            CountryCapital::VICTORIA => 'Victoria',
            CountryCapital::VIENNA => 'Wenen',
            CountryCapital::VIENTIANE => 'Vientiane',
            CountryCapital::VILNIUS => 'Vilnius',
            CountryCapital::WARSAW => 'Warschau',
            CountryCapital::WASHINGTON_DC => 'Washington, D.C.',
            CountryCapital::WELLINGTON => 'Wellington',
            CountryCapital::WEST_ISLAND => 'West Island',
            CountryCapital::WILLEMSTAD => 'Willemstad',
            CountryCapital::WINDHOEK => 'Windhoek',
            CountryCapital::YAMOUSSOUKRO => 'Yamoussoukro',
            CountryCapital::YAOUNDE => 'Yaoundé',
            CountryCapital::YAREN => 'Yaren',
            CountryCapital::YEREVAN => 'Eriwan',
            CountryCapital::ZAGREB => 'Zagreb',
        };
    }
}