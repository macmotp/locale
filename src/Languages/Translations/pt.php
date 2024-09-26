<?php

namespace Macmotp\Languages\Translations;

use Macmotp\Continent;
use Macmotp\Country;

/**
 * Portuguese
 */
class pt implements Translation
{
    /**
     * Get translation
     *
     * @param string $key
     * @return string
     */
    public function get(string $key): string
    {
        return match ($key) {
            Continent::AFRICA => 'África',
            Continent::ANTARCTICA => 'Antártica',
            Continent::ARCTIC => 'Ártico',
            Continent::ASIA => 'Ásia',
            Continent::EUROPE => 'Europa',
            Continent::NORTH_AMERICA => 'América do Norte',
            Continent::OCEANIA => 'Oceania',
            Continent::SOUTH_AMERICA => 'América do Sul',

            Country::AFGHANISTAN => 'Afeganistão',
            Country::ALAND => 'Åland',
            Country::ALBANIA => 'Albânia',
            Country::ALGERIA => 'Argélia',
            Country::AMERICAN_SAMOA => 'Samoa Americana',
            Country::ANDORRA => 'Andorra',
            Country::ANGOLA => 'Angola',
            Country::ANGUILLA => 'Anguilla',
            Country::ANTARCTICA => 'Antártica',
            Country::ANTIGUA_AND_BARBUDA => 'Antígua e Barbuda',
            Country::ARGENTINA => 'Argentina',
            Country::ARMENIA => 'Armênia',
            Country::ARUBA => 'Aruba',
            Country::AUSTRALIA => 'Austrália',
            Country::AUSTRIA => 'Áustria',
            Country::AZERBAIJAN => 'Azerbaijão',
            Country::BAHAMAS => 'Bahamas',
            Country::BAHRAIN => 'Bahrein',
            Country::BANGLADESH => 'Bangladesh',
            Country::BARBADOS => 'Barbados',
            Country::BELARUS => 'Bielorrússia',
            Country::BELGIUM => 'Bélgica',
            Country::BELIZE => 'Belize',
            Country::BENIN => 'Benin',
            Country::BERMUDA => 'Bermudas',
            Country::BHUTAN => 'Butão',
            Country::BOLIVIA => 'Bolívia',
            Country::BONAIRE => 'Bonaire',
            Country::BOSNIA_AND_HERZEGOVINA => 'Bósnia e Herzegovina',
            Country::BOTSWANA => 'Botswana',
            Country::BOUVET_ISLAND => 'Ilha Bouvet',
            Country::BRAZIL => 'Brasil',
            Country::BRITISH_INDIAN_OCEAN_TERRITORY => 'Território Britânico do Oceano Índico',
            Country::BRUNEI => 'Brunei',
            Country::BULGARIA => 'Bulgária',
            Country::BURKINA_FASO => 'Burquina Faso',
            Country::BURUNDI => 'Burundi',
            Country::CAMBODIA => 'Camboja',
            Country::CAMEROON => 'Camarões',
            Country::CANADA => 'Canadá',
            Country::CAPE_VERDE => 'Cabo Verde',
            Country::CAYMAN_ISLANDS => 'Ilhas Cayman',
            Country::CENTRAL_AFRICAN_REPUBLIC => 'República Centro-Africana',
            Country::CHAD => 'Chade',
            Country::CHILE => 'Chile',
            Country::CHINA => 'China',
            Country::CHRISTMAS_ISLAND => 'Ilha do Natal',
            Country::COCOS_KEELING_ISLANDS => 'Ilhas Cocos (Keeling)',
            Country::COLOMBIA => 'Colômbia',
            Country::COMOROS => 'Comores',
            Country::COOK_ISLANDS => 'Ilhas Cook',
            Country::COSTA_RICA => 'Costa Rica',
            Country::CROATIA => 'Croácia',
            Country::CUBA => 'Cuba',
            Country::CURACAO => 'Curaçao',
            Country::CYPRUS => 'Chipre',
            Country::CZECHIA => 'República Tcheca',
            Country::DEMOCRATIC_REPUBLIC_OF_THE_CONGO => 'República Democrática do Congo',
            Country::DENMARK => 'Dinamarca',
            Country::DJIBOUTI => 'Djibuti',
            Country::DOMINICA => 'Dominica',
            Country::DOMINICAN_REPUBLIC => 'República Dominicana',
            Country::ECUADOR => 'Equador',
            Country::EGYPT => 'Egito',
            Country::EL_SALVADOR => 'El Salvador',
            Country::EQUATORIAL_GUINEA => 'Guiné Equatorial',
            Country::ERITREA => 'Eritreia',
            Country::ESTONIA => 'Estônia',
            Country::ESWATINI => 'Essuatini',
            Country::ETHIOPIA => 'Etiópia',
            Country::FALKLAND_ISLANDS => 'Ilhas Malvinas',
            Country::FAROE_ISLANDS => 'Ilhas Faroe',
            Country::FIJI => 'Fiji',
            Country::FINLAND => 'Finlândia',
            Country::FRANCE => 'França',
            Country::FRENCH_GUIANA => 'Guiana Francesa',
            Country::FRENCH_POLYNESIA => 'Polinésia Francesa',
            Country::FRENCH_SOUTHERN_TERRITORIES => 'Territórios Austrais Franceses',
            Country::GABON => 'Gabão',
            Country::GAMBIA => 'Gâmbia',
            Country::GEORGIA => 'Geórgia',
            Country::GERMANY => 'Alemanha',
            Country::GHANA => 'Gana',
            Country::GIBRALTAR => 'Gibraltar',
            Country::GREECE => 'Grécia',
            Country::GREENLAND => 'Groenlândia',
            Country::GRENADA => 'Grenada',
            Country::GUADELOUPE => 'Guadalupe',
            Country::GUAM => 'Guam',
            Country::GUATEMALA => 'Guatemala',
            Country::GUERNSEY => 'Guernsey',
            Country::GUINEA => 'Guiné',
            Country::GUINEA_BISSAU => 'Guiné-Bissau',
            Country::GUYANA => 'Guiana',
            Country::HAITI => 'Haiti',
            Country::HEARD_ISLAND_AND_MCDONALD_ISLANDS => 'Ilha Heard e Ilhas McDonald',
            Country::HONDURAS => 'Honduras',
            Country::HONG_KONG => 'Hong Kong',
            Country::HUNGARY => 'Hungria',
            Country::ICELAND => 'Islândia',
            Country::INDIA => 'Índia',
            Country::INDONESIA => 'Indonésia',
            Country::IRAN => 'Irã',
            Country::IRAQ => 'Iraque',
            Country::IRELAND => 'Irlanda',
            Country::ISLE_OF_MAN => 'Ilha de Man',
            Country::ISRAEL => 'Israel',
            Country::ITALY => 'Itália',
            Country::IVORY_COAST => 'Costa do Marfim',
            Country::JAMAICA => 'Jamaica',
            Country::JAPAN => 'Japão',
            Country::JERSEY => 'Jersey',
            Country::JORDAN => 'Jordânia',
            Country::KAZAKHSTAN => 'Cazaquistão',
            Country::KENYA => 'Quênia',
            Country::KIRIBATI => 'Quiribati',
            Country::KOSOVO => 'Kosovo',
            Country::KUWAIT => 'Kuwait',
            Country::KYRGYZSTAN => 'Quirguistão',
            Country::LAOS => 'Laos',
            Country::LATVIA => 'Letônia',
            Country::LEBANON => 'Líbano',
            Country::LESOTHO => 'Lesoto',
            Country::LIBERIA => 'Libéria',
            Country::LIBYA => 'Líbia',
            Country::LIECHTENSTEIN => 'Liechtenstein',
            Country::LITHUANIA => 'Lituânia',
            Country::LUXEMBOURG => 'Luxemburgo',
            Country::MACAO => 'Macaú',
            Country::MADAGASCAR => 'Madagascar',
            Country::MALAWI => 'Malawi',
            Country::MALAYSIA => 'Malásia',
            Country::MALDIVES => 'Maldivas',
            Country::MALI => 'Mali',
            Country::MALTA => 'Malta',
            Country::MARSHALL_ISLANDS => 'Ilhas Marshall',
            Country::MARTINIQUE => 'Martinica',
            Country::MAURITANIA => 'Mauritânia',
            Country::MAURITIUS => 'Maurício',
            Country::MAYOTTE => 'Mayotte',
            Country::MEXICO => 'México',
            Country::MICRONESIA => 'Micronésia',
            Country::MOLDOVA => 'Moldávia',
            Country::MONACO => 'Mônaco',
            Country::MONGOLIA => 'Mongólia',
            Country::MONTENEGRO => 'Montenegro',
            Country::MONTSERRAT => 'Montserrat',
            Country::MOROCCO => 'Marrocos',
            Country::MOZAMBIQUE => 'Moçambique',
            Country::MYANMAR => 'Mianmar',
            Country::NAMIBIA => 'Namíbia',
            Country::NAURU => 'Nauru',
            Country::NEPAL => 'Nepal',
            Country::NETHERLANDS => 'Países Baixos',
            Country::NEW_CALEDONIA => 'Nova Caledônia',
            Country::NEW_ZEALAND => 'Nova Zelândia',
            Country::NICARAGUA => 'Nicaragua',
            Country::NIGER => 'Níger',
            Country::NIGERIA => 'Nigéria',
            Country::NIUE => 'Niue',
            Country::NORFOLK_ISLAND => 'Ilha Norfolk',
            Country::NORTHERN_MARIANA_ISLANDS => 'Ilhas Marianas do Norte',
            Country::NORTH_KOREA => 'Coreia do Norte',
            Country::NORTH_MACEDONIA => 'Macedônia do Norte',
            Country::NORWAY => 'Noruega',
            Country::OMAN => 'Omã',
            Country::PAKISTAN => 'Paquistão',
            Country::PALAU => 'Palau',
            Country::PALESTINE => 'Palestina',
            Country::PANAMA => 'Panamá',
            Country::PAPUA_NEW_GUINEA => 'Papua Nova Guiné',
            Country::PARAGUAY => 'Paraguai',
            Country::PERU => 'Peru',
            Country::PHILIPPINES => 'Filipinas',
            Country::PITCAIRN_ISLANDS => 'Ilhas Pitcairn',
            Country::POLAND => 'Polônia',
            Country::PORTUGAL => 'Portugal',
            Country::PUERTO_RICO => 'Porto Rico',
            Country::QATAR => 'Catar',
            Country::REPUBLIC_OF_THE_CONGO => 'República do Congo',
            Country::REUNION => 'Réunion',
            Country::ROMANIA => 'Romênia',
            Country::RUSSIA => 'Rússia',
            Country::RWANDA => 'Ruanda',
            Country::SAINT_BARTHELEMY => 'São Bartolomeu',
            Country::SAINT_HELENA => 'Santa Helena',
            Country::SAINT_KITTS_AND_NEVIS => 'São Cristóvão e Nevis',
            Country::SAINT_LUCIA => 'Santa Lúcia',
            Country::SAINT_MARTIN => 'São Martinho',
            Country::SAINT_PIERRE_AND_MIQUELON => 'São Pedro e Miquelon',
            Country::SAINT_VINCENT_AND_THE_GRENADINES => 'São Vicente e Granadinas',
            Country::SAMOA => 'Samoa',
            Country::SAN_MARINO => 'San Marino',
            Country::SAO_TOME_AND_PRINCIPE => 'São Tomé e Príncipe',
            Country::SAUDI_ARABIA => 'Arábia Saudita',
            Country::SENEGAL => 'Senegal',
            Country::SERBIA => 'Sérvia',
            Country::SEYCHELLES => 'Seicheles',
            Country::SIERRA_LEONE => 'Serra Leoa',
            Country::SINGAPORE => 'Cingapura',
            Country::SINT_MAARTEN => 'Sint Maarten',
            Country::SLOVAKIA => 'Eslováquia',
            Country::SLOVENIA => 'Eslovênia',
            Country::SOLOMON_ISLANDS => 'Ilhas Salomão',
            Country::SOMALIA => 'Somália',
            Country::SOUTH_AFRICA => 'África do Sul',
            Country::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS => 'Geórgia do Sul e Ilhas Sandwich do Sul',
            Country::SOUTH_KOREA => 'Coreia do Sul',
            Country::SOUTH_SUDAN => 'Sudão do Sul',
            Country::SPAIN => 'Espanha',
            Country::SRI_LANKA => 'Sri Lanka',
            Country::SUDAN => 'Sudão',
            Country::SURINAME => 'Suriname',
            Country::SVALBARD_AND_JAN_MAYEN => 'Svalbard e Jan Mayen',
            Country::SWEDEN => 'Suécia',
            Country::SWITZERLAND => 'Suíça',
            Country::SYRIA => 'Síria',
            Country::TAIWAN => 'Taiwan',
            Country::TAJIKISTAN => 'Tajiquistão',
            Country::TANZANIA => 'Tanzânia',
            Country::THAILAND => 'Tailândia',
            Country::TIMOR_LESTE => 'Timor-Leste',
            Country::TOGO => 'Togo',
            Country::TOKELAU => 'Tokelau',
            Country::TONGA => 'Tonga',
            Country::TRINIDAD_AND_TOBAGO => 'Trinidad e Tobago',
            Country::TUNISIA => 'Tunísia',
            Country::TURKEY => 'Turquia',
            Country::TURKMENISTAN => 'Turcomenistão',
            Country::TURKS_AND_CAICOS_ISLANDS => 'Ilhas Turks e Caicos',
            Country::TUVALU => 'Tuvalu',
            Country::UGANDA => 'Uganda',
            Country::UKRAINE => 'Ucrânia',
            Country::UNITED_ARAB_EMIRATES => 'Emirados Árabes Unidos',
            Country::UNITED_KINGDOM => 'Reino Unido',
            Country::UNITED_STATES_OF_AMERICA => 'Estados Unidos da América',
            Country::URUGUAY => 'Uruguai',
            Country::US_MINOR_OUTLYING_ISLANDS => 'Ilhas Menores Distantes dos EUA',
            Country::UZBEKISTAN => 'Uzbequistão',
            Country::VANUATU => 'Vanuatu',
            Country::VATICAN_CITY => 'Vaticano',
            Country::VENEZUELA => 'Venezuela',
            Country::VIET_NAM => 'Vietnã',
            Country::VIRGIN_ISLANDS_BRITISH => 'Ilhas Virgens (Britânicas)',
            Country::VIRGIN_ISLANDS_US => 'Ilhas Virgens (Americanas)',
            Country::WALLIS_AND_FUTUNA => 'Wallis e Futuna',
            Country::WESTERN_SAHARA => 'Sahara Ocidental',
            Country::YEMEN => 'Iémen',
            Country::ZAMBIA => 'Zâmbia',
            Country::ZIMBABWE => 'Zimbábue',

            'Andorra la Vella' => 'Andorra la Vella',
            'Abu Dhabi' => 'Abu Dhabi',
            'Kabul' => 'Cabul',
            'Saint John\'s' => 'São João',
            'The Valley' => 'O Vale',
            'Tirana' => 'Tirana',
            'Yerevan' => 'Erevã',
            'Luanda' => 'Luanda',
            'Buenos Aires' => 'Buenos Aires',
            'Pago Pago' => 'Pago Pago',
            'Vienna' => 'Viena',
            'Canberra' => 'Canberra',
            'Oranjestad' => 'Oranjestad',
            'Mariehamn' => 'Mariehamn',
            'Baku' => 'Baku',
            'Sarajevo' => 'Sarajevo',
            'Bridgetown' => 'Bridgetown',
            'Dhaka' => 'Daca',
            'Brussels' => 'Bruxelas',
            'Ouagadougou' => 'Ouagadougou',
            'Sofia' => 'Sófia',
            'Manama' => 'Manama',
            'Gitega' => 'Gitega',
            'Porto-Novo' => 'Porto-Novo',
            'Gustavia' => 'Gustávia',
            'Hamilton' => 'Hamilton',
            'Bandar Seri Begawan' => 'Bandar Seri Begawan',
            'Sucre' => 'Sucre',
            'Kralendijk' => 'Kralendijk',
            'Brasília' => 'Brasília',
            'Nassau' => 'Nassau',
            'Thimphu' => 'Thimphu',
            'None' => 'Nenhum',
            'Gaborone' => 'Gaborone',
            'Minsk' => 'Minsk',
            'Belmopan' => 'Belmopan',
            'Ottawa' => 'Ottawa',
            'West Island' => 'West Island',
            'Kinshasa' => 'Quinxassa',
            'Bangui' => 'Bangui',
            'Brazzaville' => 'Brazzaville',
            'Bern' => 'Berna',
            'Yamoussoukro' => 'Yamoussoukro',
            'Avarua' => 'Avarua',
            'Santiago' => 'Santiago',
            'Yaoundé' => 'Yaoundé',
            'Beijing' => 'Pequim',
            'Bogotá' => 'Bogotá',
            'San José' => 'São José',
            'Havana' => 'Havana',
            'Praia' => 'Praia',
            'Willemstad' => 'Willemstad',
            'Flying Fish Cove' => 'Cove do Peixe Voador',
            'Nicosia' => 'Nicósia',
            'Prague' => 'Praga',
            'Berlin' => 'Berlim',
            'Djibouti City' => 'Cidade de Djibuti',
            'Copenhagen' => 'Copenhague',
            'Roseau' => 'Roseau',
            'Santo Domingo' => 'Santo Domingo',
            'Algiers' => 'Argel',
            'Quito' => 'Quito',
            'Tallinn' => 'Tallin',
            'Cairo' => 'Cairo',
            'El Aaiún' => 'El Aaiún',
            'Asmara' => 'Asmara',
            'Madrid' => 'Madri',
            'Addis Ababa' => 'Adis Abeba',
            'Helsinki' => 'Helsinque',
            'Suva' => 'Suva',
            'Stanley' => 'Stanley',
            'Palikir' => 'Palikir',
            'Tórshavn' => 'Tórshavn',
            'Paris' => 'Paris',
            'Libreville' => 'Libreville',
            'London' => 'Londres',
            'St. George\'s' => 'São Jorge',
            'Tbilisi' => 'Tbilisi',
            'Cayenne' => 'Caiena',
            'St. Peter Port' => 'Porto de São Pedro',
            'Accra' => 'Acra',
            'Gibraltar' => 'Gibraltar',
            'Nuuk' => 'Nuuk',
            'Banjul' => 'Banjul',
            'Conakry' => 'Conacri',
            'Basse-Terre' => 'Basse-Terre',
            'Malabo' => 'Malabo',
            'Athens' => 'Atenas',
            'King Edward Point' => 'King Edward Point',
            'Guatemala City' => 'Cidade da Guatemala',
            'Hagåtña' => 'Hagåtña',
            'Bissau' => 'Bissau',
            'Georgetown' => 'Georgetown',
            'Hong Kong' => 'Hong Kong',
            'Tegucigalpa' => 'Tegucigalpa',
            'Zagreb' => 'Zagreb',
            'Port-au-Prince' => 'Porto Príncipe',
            'Budapest' => 'Budapeste',
            'Jakarta' => 'Jacarta',
            'Dublin' => 'Dublin',
            'Jerusalem' => 'Jerusalém',
            'Douglas' => 'Douglas',
            'New Delhi' => 'Nova Délhi',
            'Diego Garcia' => 'Diego Garcia',
            'Baghdad' => 'Bagdá',
            'Tehran' => 'Teerã',
            'Reykjavik' => 'Reiquiavique',
            'Rome' => 'Roma',
            'Saint Helier' => 'Saint Helier',
            'Kingston' => 'Kingston',
            'Amman' => 'Amã',
            'Tokyo' => 'Tóquio',
            'Nairobi' => 'Nairóbi',
            'Bishkek' => 'Biquique',
            'Phnom Penh' => 'Fnome Penh',
            'South Tarawa' => 'Tarawa do Sul',
            'Moroni' => 'Moroni',
            'Basseterre' => 'Basseterre',
            'Pyongyang' => 'Pyongyang',
            'Seoul' => 'Seul',
            'Kuwait City' => 'Cidade do Kuwait',
            'George Town' => 'George Town',
            'Nur-Sultan' => 'Nur-Sultan',
            'Vientiane' => 'Vientiane',
            'Beirut' => 'Beirute',
            'Castries' => 'Castries',
            'Vaduz' => 'Vaduz',
            'Colombo' => 'Colombo',
            'Monrovia' => 'Monróvia',
            'Maseru' => 'Maseru',
            'Vilnius' => 'Vilnius',
            'Luxembourg' => 'Luxemburgo',
            'Riga' => 'Riga',
            'Tripoli' => 'Trípoli',
            'Rabat' => 'Rabat',
            'Monaco' => 'Mônaco',
            'Chișinău' => 'Chișinău',
            'Podgorica' => 'Podgorica',
            'Marigot' => 'Marigot',
            'Antananarivo' => 'Antananarivo',
            'Majuro' => 'Majuro',
            'Skopje' => 'Skopje',
            'Bamako' => 'Bamaco',
            'Naypyidaw' => 'Naypyidaw',
            'Ulaanbaatar' => 'Ulan Bator',
            'Macao' => 'Macaú',
            'Saipan' => 'Saipan',
            'Fort-de-France' => 'Fort-de-France',
            'Nouakchott' => 'Nouakchott',
            'Plymouth' => 'Plymouth',
            'Valletta' => 'Valeta',
            'Port Louis' => 'Port Louis',
            'Malé' => 'Malé',
            'Lilongwe' => 'Lilongwe',
            'Mexico City' => 'Cidade do México',
            'Kuala Lumpur' => 'Kuala Lumpur',
            'Maputo' => 'Maputo',
            'Windhoek' => 'Windhoek',
            'Nouméa' => 'Nouméa',
            'Niamey' => 'Niamey',
            'Kingston' => 'Kingston',
            'Abuja' => 'Abuja',
            'Managua' => 'Manágua',
            'Amsterdam' => 'Amsterdã',
            'Oslo' => 'Oslo',
            'Kathmandu' => 'Catmandu',
            'Yaren' => 'Yaren',
            'Alofi' => 'Alofi',
            'Wellington' => 'Wellington',
            'Muscat' => 'Muscat',
            'Panama City' => 'Cidade do Panamá',
            'Lima' => 'Lima',
            'Papeete' => 'Papeete',
            'Port Moresby' => 'Port Moresby',
            'Manila' => 'Manila',
            'Islamabad' => 'Islamabad',
            'Warsaw' => 'Varsóvia',
            'Saint-Pierre' => 'Saint-Pierre',
            'Adamstown' => 'Adamstown',
            'San Juan' => 'San Juan',
            'East Jerusalem' => 'Jerusalém Oriental',
            'Lisbon' => 'Lisboa',
            'Ngerulmud' => 'Ngerulmud',
            'Asunción' => 'Assunção',
            'Doha' => 'Doha',
            'Saint-Denis' => 'Saint-Denis',
            'Bucharest' => 'Bucareste',
            'Belgrade' => 'Belgrado',
            'Moscow' => 'Moscovo',
            'Kigali' => 'Quigali',
            'Riyadh' => 'Riad',
            'Honiara' => 'Honiara',
            'Victoria' => 'Vitoria',
            'Khartoum' => 'Cartum',
            'Stockholm' => 'Estocolmo',
            'Singapore' => 'Cingapura',
            'Jamestown' => 'Jamestown',
            'Ljubljana' => 'Liubliana',
            'Longyearbyen' => 'Longyearbyen',
            'Bratislava' => 'Bratislava',
            'Freetown' => 'Freetown',
            'San Marino' => 'San Marino',
            'Dakar' => 'Dacar',
            'Mogadishu' => 'Mogadíscio',
            'Paramaribo' => 'Paramaribo',
            'Juba' => 'Juba',
            'São Tomé' => 'São Tomé',
            'San Salvador' => 'San Salvador',
            'Philipsburg' => 'Philipsburg',
            'Damascus' => 'Damasco',
            'Mbabane' => 'Mbabane',
            'Cockburn Town' => 'Cockburn Town',
            'N\'Djamena' => 'N\'Djamena',
            'Port-aux-Français' => 'Port-aux-Français',
            'Lomé' => 'Lomé',
            'Bangkok' => 'Banguecoque',
            'Dushanbe' => 'Duchambé',
            'Fakaofo' => 'Fakaofo',
            'Dili' => 'Dili',
            'Ashgabat' => 'Ashgabat',
            'Tunis' => 'Tunis',
            'Nuku\'alofa' => 'Nuku\'alofa',
            'Ankara' => 'Ancara',
            'Port of Spain' => 'Port of Spain',
            'Funafuti' => 'Funafuti',
            'Taipei' => 'Taipei',
            'Dodoma' => 'Dodoma',
            'Kyiv' => 'Kyiv',
            'Kampala' => 'Kampala',
            'Montevideo' => 'Montevidéu',
            'Washington, D.C.' => 'Washington, D.C.',
            'Tashkent' => 'Tashkent',
            'Vatican City' => 'Vaticano',
            'Kingstown' => 'Kingstown',
            'Caracas' => 'Caracas',
            'Road Town' => 'Road Town',
            'Charlotte Amalie' => 'Charlotte Amalie',
            'Hanoi' => 'Hanói',
            'Port Vila' => 'Port Vila',
            'Mata-Utu' => 'Mata-Utu',
            'Apia' => 'Apia',
            'Pristina' => 'Pristina',
            'Sana\'a' => 'Sana\'a',
            'Mamoudzou' => 'Mamoudzou',
            'Pretoria' => 'Pretória',
            'Lusaka' => 'Lusaca',
            'Harare' => 'Harare',
            'N/A' => 'N/A',

            default => '***',
        };
    }
}