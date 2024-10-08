<?php

namespace Macmotp\Countries\Support;

enum CountryFlag: string
{
    case AD = 'ad'; // Andorra
    case AE = 'ae'; // United Arab Emirates
    case AF = 'af'; // Afghanistan
    case AG = 'ag'; // Antigua and Barbuda
    case AI = 'ai'; // Anguilla
    case AL = 'al'; // Albania
    case AM = 'am'; // Armenia
    case AO = 'ao'; // Angola
    case AQ = 'aq'; // Antarctica
    case AR = 'ar'; // Argentina
    case AS = 'as'; // American Samoa
    case AT = 'at'; // Austria
    case AU = 'au'; // Australia
    case AW = 'aw'; // Aruba
    case AX = 'ax'; // Åland
    case AZ = 'az'; // Azerbaijan
    case BA = 'ba'; // Bosnia and Herzegovina
    case BB = 'bb'; // Barbados
    case BD = 'bd'; // Bangladesh
    case BE = 'be'; // Belgium
    case BF = 'bf'; // Burkina Faso
    case BG = 'bg'; // Bulgaria
    case BH = 'bh'; // Bahrain
    case BI = 'bi'; // Burundi
    case BJ = 'bj'; // Benin
    case BL = 'bl'; // Saint Barthélemy
    case BM = 'bm'; // Bermuda
    case BN = 'bn'; // Brunei
    case BO = 'bo'; // Bolivia
    case BQ = 'bq'; // Bonaire
    case BR = 'br'; // Brazil
    case BS = 'bs'; // Bahamas
    case BT = 'bt'; // Bhutan
    case BV = 'bv'; // Bouvet Island
    case BW = 'bw'; // Botswana
    case BY = 'by'; // Belarus
    case BZ = 'bz'; // Belize
    case CA = 'ca'; // Canada
    case CC = 'cc'; // Cocos (Keeling) Islands
    case CD = 'cd'; // Democratic Republic of the Congo
    case CF = 'cf'; // Central African Republic
    case CG = 'cg'; // Republic of the Congo
    case CH = 'ch'; // Switzerland
    case CI = 'ci'; // Ivory Coast
    case CK = 'ck'; // Cook Islands
    case CL = 'cl'; // Chile
    case CM = 'cm'; // Cameroon
    case CN = 'cn'; // China
    case CO = 'co'; // Colombia
    case CR = 'cr'; // Costa Rica
    case CU = 'cu'; // Cuba
    case CV = 'cv'; // Cape Verde
    case CW = 'cw'; // Curaçao
    case CX = 'cx'; // Christmas Island
    case CY = 'cy'; // Cyprus
    case CZ = 'cz'; // Czechia
    case DE = 'de'; // Germany
    case DJ = 'dj'; // Djibouti
    case DK = 'dk'; // Denmark
    case DM = 'dm'; // Dominica
    case DO = 'do'; // Dominican Republic
    case DZ = 'dz'; // Algeria
    case EC = 'ec'; // Ecuador
    case EE = 'ee'; // Estonia
    case EG = 'eg'; // Egypt
    case EH = 'eh'; // Western Sahara
    case ER = 'er'; // Eritrea
    case ES = 'es'; // Spain
    case ET = 'et'; // Ethiopia
    case FI = 'fi'; // Finland
    case FJ = 'fj'; // Fiji
    case FK = 'fk'; // Falkland Islands
    case FM = 'fm'; // Micronesia
    case FO = 'fo'; // Faroe Islands
    case FR = 'fr'; // France
    case GA = 'ga'; // Gabon
    case GB = 'gb'; // United Kingdom
    case GD = 'gd'; // Grenada
    case GE = 'ge'; // Georgia
    case GF = 'gf'; // French Guiana
    case GG = 'gg'; // Guernsey
    case GH = 'gh'; // Ghana
    case GI = 'gi'; // Gibraltar
    case GL = 'gl'; // Greenland
    case GM = 'gm'; // Gambia
    case GN = 'gn'; // Guinea
    case GP = 'gp'; // Guadeloupe
    case GQ = 'gq'; // Equatorial Guinea
    case GR = 'gr'; // Greece
    case GS = 'gs'; // South Georgia and the South Sandwich Islands
    case GT = 'gt'; // Guatemala
    case GU = 'gu'; // Guam
    case GW = 'gw'; // Guinea-Bissau
    case GY = 'gy'; // Guyana
    case HK = 'hk'; // Hong Kong
    case HM = 'hm'; // Heard Island and McDonald Islands
    case HN = 'hn'; // Honduras
    case HR = 'hr'; // Croatia
    case HT = 'ht'; // Haiti
    case HU = 'hu'; // Hungary
    case ID = 'id'; // Indonesia
    case IE = 'ie'; // Ireland
    case IL = 'il'; // Israel
    case IM = 'im'; // Isle of Man
    case IN = 'in'; // India
    case IO = 'io'; // British Indian Ocean Territory
    case IQ = 'iq'; // Iraq
    case IR = 'ir'; // Iran
    case IS = 'is'; // Iceland
    case IT = 'it'; // Italy
    case JE = 'je'; // Jersey
    case JM = 'jm'; // Jamaica
    case JO = 'jo'; // Jordan
    case JP = 'jp'; // Japan
    case KE = 'ke'; // Kenya
    case KG = 'kg'; // Kyrgyzstan
    case KH = 'kh'; // Cambodia
    case KI = 'ki'; // Kiribati
    case KM = 'km'; // Comoros
    case KN = 'kn'; // Saint Kitts and Nevis
    case KP = 'kp'; // North Korea
    case KR = 'kr'; // South Korea
    case KW = 'kw'; // Kuwait
    case KY = 'ky'; // Cayman Islands
    case KZ = 'kz'; // Kazakhstan
    case LA = 'la'; // Laos
    case LB = 'lb'; // Lebanon
    case LC = 'lc'; // Saint Lucia
    case LI = 'li'; // Liechtenstein
    case LK = 'lk'; // Sri Lanka
    case LR = 'lr'; // Liberia
    case LS = 'ls'; // Lesotho
    case LT = 'lt'; // Lithuania
    case LU = 'lu'; // Luxembourg
    case LV = 'lv'; // Latvia
    case LY = 'ly'; // Libya
    case MA = 'ma'; // Morocco
    case MC = 'mc'; // Monaco
    case MD = 'md'; // Moldova
    case ME = 'me'; // Montenegro
    case MF = 'mf'; // Saint Martin
    case MG = 'mg'; // Madagascar
    case MH = 'mh'; // Marshall Islands
    case MK = 'mk'; // North Macedonia
    case ML = 'ml'; // Mali
    case MM = 'mm'; // Myanmar
    case MN = 'mn'; // Mongolia
    case MO = 'mo'; // Macao
    case MP = 'mp'; // Northern Mariana Islands
    case MQ = 'mq'; // Martinique
    case MR = 'mr'; // Mauritania
    case MS = 'ms'; // Montserrat
    case MT = 'mt'; // Malta
    case MU = 'mu'; // Mauritius
    case MV = 'mv'; // Maldives
    case MW = 'mw'; // Malawi
    case MX = 'mx'; // Mexico
    case MY = 'my'; // Malaysia
    case MZ = 'mz'; // Mozambique
    case NA = 'na'; // Namibia
    case NC = 'nc'; // New Caledonia
    case NE = 'ne'; // Niger
    case NF = 'nf'; // Norfolk Island
    case NG = 'ng'; // Nigeria
    case NI = 'ni'; // Nicaragua
    case NL = 'nl'; // Netherlands
    case NO = 'no'; // Norway
    case NP = 'np'; // Nepal
    case NR = 'nr'; // Nauru
    case NU = 'nu'; // Niue
    case NZ = 'nz'; // New Zealand
    case OM = 'om'; // Oman
    case PA = 'pa'; // Panama
    case PE = 'pe'; // Peru
    case PF = 'pf'; // French Polynesia
    case PG = 'pg'; // Papua New Guinea
    case PH = 'ph'; // Philippines
    case PK = 'pk'; // Pakistan
    case PL = 'pl'; // Poland
    case PM = 'pm'; // Saint Pierre and Miquelon
    case PN = 'pn'; // Pitcairn Islands
    case PR = 'pr'; // Puerto Rico
    case PS = 'ps'; // Palestine
    case PT = 'pt'; // Portugal
    case PW = 'pw'; // Palau
    case PY = 'py'; // Paraguay
    case QA = 'qa'; // Qatar
    case RE = 're'; // Réunion
    case RO = 'ro'; // Romania
    case RS = 'rs'; // Serbia
    case RU = 'ru'; // Russia
    case RW = 'rw'; // Rwanda
    case SA = 'sa'; // Saudi Arabia
    case SB = 'sb'; // Solomon Islands
    case SC = 'sc'; // Seychelles
    case SD = 'sd'; // Sudan
    case SE = 'se'; // Sweden
    case SG = 'sg'; // Singapore
    case SH = 'sh'; // Saint Helena
    case SI = 'si'; // Slovenia
    case SJ = 'sj'; // Svalbard and Jan Mayen
    case SK = 'sk'; // Slovakia
    case SL = 'sl'; // Sierra Leone
    case SM = 'sm'; // San Marino
    case SN = 'sn'; // Senegal
    case SO = 'so'; // Somalia
    case SR = 'sr'; // Suriname
    case SS = 'ss'; // South Sudan
    case ST = 'st'; // São Tomé and Príncipe
    case SV = 'sv'; // El Salvador
    case SX = 'sx'; // Sint Maarten
    case SY = 'sy'; // Syria
    case SZ = 'sz'; // Eswatini
    case TC = 'tc'; // Turks and Caicos Islands
    case TD = 'td'; // Chad
    case TF = 'tf'; // French Southern Territories
    case TG = 'tg'; // Togo
    case TH = 'th'; // Thailand
    case TJ = 'tj'; // Tajikistan
    case TK = 'tk'; // Tokelau
    case TL = 'tl'; // Timor-Leste
    case TM = 'tm'; // Turkmenistan
    case TN = 'tn'; // Tunisia
    case TO = 'to'; // Tonga
    case TR = 'tr'; // Turkey
    case TT = 'tt'; // Trinidad and Tobago
    case TV = 'tv'; // Tuvalu
    case TW = 'tw'; // Taiwan
    case TZ = 'tz'; // Tanzania
    case UA = 'ua'; // Ukraine
    case UG = 'ug'; // Uganda
    case UM = 'um'; // U.S. Minor Outlying Islands
    case US = 'us'; // United States of America
    case UY = 'uy'; // Uruguay
    case UZ = 'uz'; // Uzbekistan
    case VA = 'va'; // Vatican City
    case VC = 'vc'; // Saint Vincent and the Grenadines
    case VE = 've'; // Venezuela
    case VG = 'vg'; // Virgin Islands (British)
    case VI = 'vi'; // Virgin Islands (U.S.)
    case VN = 'vn'; // Viet Nam
    case VU = 'vu'; // Vanuatu
    case WF = 'wf'; // Wallis and Futuna
    case WS = 'ws'; // Samoa
    case XK = 'xk'; // Kosovo
    case YE = 'ye'; // Yemen
    case YT = 'yt'; // Mayotte
    case ZA = 'za'; // South Africa
    case ZM = 'zm'; // Zambia
    case ZW = 'zw'; // Zimbabwe
}
