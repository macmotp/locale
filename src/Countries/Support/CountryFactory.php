<?php

namespace Macmotp\Countries\Support;

use Macmotp\Countries\Exceptions\InvalidCountryCodeException;
use Macmotp\Countries\Support\Countries\AD;
use Macmotp\Countries\Support\Countries\AE;
use Macmotp\Countries\Support\Countries\AF;
use Macmotp\Countries\Support\Countries\AG;
use Macmotp\Countries\Support\Countries\AI;
use Macmotp\Countries\Support\Countries\AL;
use Macmotp\Countries\Support\Countries\AM;
use Macmotp\Countries\Support\Countries\AO;
use Macmotp\Countries\Support\Countries\AQ;
use Macmotp\Countries\Support\Countries\AR;
use Macmotp\Countries\Support\Countries\AS_;
use Macmotp\Countries\Support\Countries\AT;
use Macmotp\Countries\Support\Countries\AU;
use Macmotp\Countries\Support\Countries\AW;
use Macmotp\Countries\Support\Countries\AX;
use Macmotp\Countries\Support\Countries\AZ;
use Macmotp\Countries\Support\Countries\BA;
use Macmotp\Countries\Support\Countries\BB;
use Macmotp\Countries\Support\Countries\BD;
use Macmotp\Countries\Support\Countries\BE;
use Macmotp\Countries\Support\Countries\BF;
use Macmotp\Countries\Support\Countries\BG;
use Macmotp\Countries\Support\Countries\BH;
use Macmotp\Countries\Support\Countries\BI;
use Macmotp\Countries\Support\Countries\BJ;
use Macmotp\Countries\Support\Countries\BL;
use Macmotp\Countries\Support\Countries\BM;
use Macmotp\Countries\Support\Countries\BN;
use Macmotp\Countries\Support\Countries\BO;
use Macmotp\Countries\Support\Countries\BQ;
use Macmotp\Countries\Support\Countries\BR;
use Macmotp\Countries\Support\Countries\BS;
use Macmotp\Countries\Support\Countries\BT;
use Macmotp\Countries\Support\Countries\BV;
use Macmotp\Countries\Support\Countries\BW;
use Macmotp\Countries\Support\Countries\BY;
use Macmotp\Countries\Support\Countries\BZ;
use Macmotp\Countries\Support\Countries\CA;
use Macmotp\Countries\Support\Countries\CC;
use Macmotp\Countries\Support\Countries\CD;
use Macmotp\Countries\Support\Countries\CF;
use Macmotp\Countries\Support\Countries\CG;
use Macmotp\Countries\Support\Countries\CH;
use Macmotp\Countries\Support\Countries\CI;
use Macmotp\Countries\Support\Countries\CK;
use Macmotp\Countries\Support\Countries\CL;
use Macmotp\Countries\Support\Countries\CM;
use Macmotp\Countries\Support\Countries\CN;
use Macmotp\Countries\Support\Countries\CO;
use Macmotp\Countries\Support\Countries\CR;
use Macmotp\Countries\Support\Countries\CU;
use Macmotp\Countries\Support\Countries\CV;
use Macmotp\Countries\Support\Countries\CW;
use Macmotp\Countries\Support\Countries\CX;
use Macmotp\Countries\Support\Countries\CY;
use Macmotp\Countries\Support\Countries\CZ;
use Macmotp\Countries\Support\Countries\DE;
use Macmotp\Countries\Support\Countries\DJ;
use Macmotp\Countries\Support\Countries\DK;
use Macmotp\Countries\Support\Countries\DM;
use Macmotp\Countries\Support\Countries\DO_;
use Macmotp\Countries\Support\Countries\DZ;
use Macmotp\Countries\Support\Countries\EC;
use Macmotp\Countries\Support\Countries\EE;
use Macmotp\Countries\Support\Countries\EG;
use Macmotp\Countries\Support\Countries\EH;
use Macmotp\Countries\Support\Countries\ER;
use Macmotp\Countries\Support\Countries\ES;
use Macmotp\Countries\Support\Countries\ET;
use Macmotp\Countries\Support\Countries\FI;
use Macmotp\Countries\Support\Countries\FJ;
use Macmotp\Countries\Support\Countries\FK;
use Macmotp\Countries\Support\Countries\FM;
use Macmotp\Countries\Support\Countries\FO;
use Macmotp\Countries\Support\Countries\FR;
use Macmotp\Countries\Support\Countries\GA;
use Macmotp\Countries\Support\Countries\GB;
use Macmotp\Countries\Support\Countries\GD;
use Macmotp\Countries\Support\Countries\GE;
use Macmotp\Countries\Support\Countries\GF;
use Macmotp\Countries\Support\Countries\GG;
use Macmotp\Countries\Support\Countries\GH;
use Macmotp\Countries\Support\Countries\GI;
use Macmotp\Countries\Support\Countries\GL;
use Macmotp\Countries\Support\Countries\GM;
use Macmotp\Countries\Support\Countries\GN;
use Macmotp\Countries\Support\Countries\GP;
use Macmotp\Countries\Support\Countries\GQ;
use Macmotp\Countries\Support\Countries\GR;
use Macmotp\Countries\Support\Countries\GS;
use Macmotp\Countries\Support\Countries\GT;
use Macmotp\Countries\Support\Countries\GU;
use Macmotp\Countries\Support\Countries\GW;
use Macmotp\Countries\Support\Countries\GY;
use Macmotp\Countries\Support\Countries\HK;
use Macmotp\Countries\Support\Countries\HM;
use Macmotp\Countries\Support\Countries\HN;
use Macmotp\Countries\Support\Countries\HR;
use Macmotp\Countries\Support\Countries\HT;
use Macmotp\Countries\Support\Countries\HU;
use Macmotp\Countries\Support\Countries\ID;
use Macmotp\Countries\Support\Countries\IE;
use Macmotp\Countries\Support\Countries\IL;
use Macmotp\Countries\Support\Countries\IM;
use Macmotp\Countries\Support\Countries\IN;
use Macmotp\Countries\Support\Countries\IO;
use Macmotp\Countries\Support\Countries\IQ;
use Macmotp\Countries\Support\Countries\IR;
use Macmotp\Countries\Support\Countries\IS;
use Macmotp\Countries\Support\Countries\IT;
use Macmotp\Countries\Support\Countries\JE;
use Macmotp\Countries\Support\Countries\JM;
use Macmotp\Countries\Support\Countries\JO;
use Macmotp\Countries\Support\Countries\JP;
use Macmotp\Countries\Support\Countries\KE;
use Macmotp\Countries\Support\Countries\KG;
use Macmotp\Countries\Support\Countries\KH;
use Macmotp\Countries\Support\Countries\KI;
use Macmotp\Countries\Support\Countries\KM;
use Macmotp\Countries\Support\Countries\KN;
use Macmotp\Countries\Support\Countries\KP;
use Macmotp\Countries\Support\Countries\KR;
use Macmotp\Countries\Support\Countries\KW;
use Macmotp\Countries\Support\Countries\KY;
use Macmotp\Countries\Support\Countries\KZ;
use Macmotp\Countries\Support\Countries\LA;
use Macmotp\Countries\Support\Countries\LB;
use Macmotp\Countries\Support\Countries\LC;
use Macmotp\Countries\Support\Countries\LI;
use Macmotp\Countries\Support\Countries\LK;
use Macmotp\Countries\Support\Countries\LR;
use Macmotp\Countries\Support\Countries\LS;
use Macmotp\Countries\Support\Countries\LT;
use Macmotp\Countries\Support\Countries\LU;
use Macmotp\Countries\Support\Countries\LV;
use Macmotp\Countries\Support\Countries\LY;
use Macmotp\Countries\Support\Countries\MA;
use Macmotp\Countries\Support\Countries\MC;
use Macmotp\Countries\Support\Countries\MD;
use Macmotp\Countries\Support\Countries\ME;
use Macmotp\Countries\Support\Countries\MF;
use Macmotp\Countries\Support\Countries\MG;
use Macmotp\Countries\Support\Countries\MH;
use Macmotp\Countries\Support\Countries\MK;
use Macmotp\Countries\Support\Countries\ML;
use Macmotp\Countries\Support\Countries\MM;
use Macmotp\Countries\Support\Countries\MN;
use Macmotp\Countries\Support\Countries\MO;
use Macmotp\Countries\Support\Countries\MP;
use Macmotp\Countries\Support\Countries\MQ;
use Macmotp\Countries\Support\Countries\MR;
use Macmotp\Countries\Support\Countries\MS;
use Macmotp\Countries\Support\Countries\MT;
use Macmotp\Countries\Support\Countries\MU;
use Macmotp\Countries\Support\Countries\MV;
use Macmotp\Countries\Support\Countries\MW;
use Macmotp\Countries\Support\Countries\MX;
use Macmotp\Countries\Support\Countries\MY;
use Macmotp\Countries\Support\Countries\MZ;
use Macmotp\Countries\Support\Countries\NA;
use Macmotp\Countries\Support\Countries\NC;
use Macmotp\Countries\Support\Countries\NE;
use Macmotp\Countries\Support\Countries\NF;
use Macmotp\Countries\Support\Countries\NG;
use Macmotp\Countries\Support\Countries\NI;
use Macmotp\Countries\Support\Countries\NL;
use Macmotp\Countries\Support\Countries\NO;
use Macmotp\Countries\Support\Countries\NP;
use Macmotp\Countries\Support\Countries\NR;
use Macmotp\Countries\Support\Countries\NU;
use Macmotp\Countries\Support\Countries\NZ;
use Macmotp\Countries\Support\Countries\OM;
use Macmotp\Countries\Support\Countries\PA;
use Macmotp\Countries\Support\Countries\PE;
use Macmotp\Countries\Support\Countries\PF;
use Macmotp\Countries\Support\Countries\PG;
use Macmotp\Countries\Support\Countries\PH;
use Macmotp\Countries\Support\Countries\PK;
use Macmotp\Countries\Support\Countries\PL;
use Macmotp\Countries\Support\Countries\PM;
use Macmotp\Countries\Support\Countries\PN;
use Macmotp\Countries\Support\Countries\PR;
use Macmotp\Countries\Support\Countries\PS;
use Macmotp\Countries\Support\Countries\PT;
use Macmotp\Countries\Support\Countries\PW;
use Macmotp\Countries\Support\Countries\PY;
use Macmotp\Countries\Support\Countries\QA;
use Macmotp\Countries\Support\Countries\RE;
use Macmotp\Countries\Support\Countries\RO;
use Macmotp\Countries\Support\Countries\RS;
use Macmotp\Countries\Support\Countries\RU;
use Macmotp\Countries\Support\Countries\RW;
use Macmotp\Countries\Support\Countries\SA;
use Macmotp\Countries\Support\Countries\SB;
use Macmotp\Countries\Support\Countries\SC;
use Macmotp\Countries\Support\Countries\SD;
use Macmotp\Countries\Support\Countries\SE;
use Macmotp\Countries\Support\Countries\SG;
use Macmotp\Countries\Support\Countries\SH;
use Macmotp\Countries\Support\Countries\SI;
use Macmotp\Countries\Support\Countries\SJ;
use Macmotp\Countries\Support\Countries\SK;
use Macmotp\Countries\Support\Countries\SL;
use Macmotp\Countries\Support\Countries\SM;
use Macmotp\Countries\Support\Countries\SN;
use Macmotp\Countries\Support\Countries\SO;
use Macmotp\Countries\Support\Countries\SR;
use Macmotp\Countries\Support\Countries\SS;
use Macmotp\Countries\Support\Countries\ST;
use Macmotp\Countries\Support\Countries\SV;
use Macmotp\Countries\Support\Countries\SX;
use Macmotp\Countries\Support\Countries\SY;
use Macmotp\Countries\Support\Countries\SZ;
use Macmotp\Countries\Support\Countries\TC;
use Macmotp\Countries\Support\Countries\TD;
use Macmotp\Countries\Support\Countries\TF;
use Macmotp\Countries\Support\Countries\TG;
use Macmotp\Countries\Support\Countries\TH;
use Macmotp\Countries\Support\Countries\TJ;
use Macmotp\Countries\Support\Countries\TK;
use Macmotp\Countries\Support\Countries\TL;
use Macmotp\Countries\Support\Countries\TM;
use Macmotp\Countries\Support\Countries\TN;
use Macmotp\Countries\Support\Countries\TO;
use Macmotp\Countries\Support\Countries\TR;
use Macmotp\Countries\Support\Countries\TT;
use Macmotp\Countries\Support\Countries\TV;
use Macmotp\Countries\Support\Countries\TW;
use Macmotp\Countries\Support\Countries\TZ;
use Macmotp\Countries\Support\Countries\UA;
use Macmotp\Countries\Support\Countries\UG;
use Macmotp\Countries\Support\Countries\UM;
use Macmotp\Countries\Support\Countries\US;
use Macmotp\Countries\Support\Countries\UY;
use Macmotp\Countries\Support\Countries\UZ;
use Macmotp\Countries\Support\Countries\VA;
use Macmotp\Countries\Support\Countries\VC;
use Macmotp\Countries\Support\Countries\VE;
use Macmotp\Countries\Support\Countries\VG;
use Macmotp\Countries\Support\Countries\VI;
use Macmotp\Countries\Support\Countries\VN;
use Macmotp\Countries\Support\Countries\VU;
use Macmotp\Countries\Support\Countries\WF;
use Macmotp\Countries\Support\Countries\WS;
use Macmotp\Countries\Support\Countries\XK;
use Macmotp\Countries\Support\Countries\YE;
use Macmotp\Countries\Support\Countries\YT;
use Macmotp\Countries\Support\Countries\ZA;
use Macmotp\Countries\Support\Countries\ZM;
use Macmotp\Countries\Support\Countries\ZW;
use ValueError;

/**
 * CountryFactory class
 *
 * Mapping each country code with related implementation
 */
final class CountryFactory
{
    /**
     * Map country codes with related interface
     *
     * @param CountryCode|string $code
     *
     * @return CountryInterface
     * @throws InvalidCountryCodeException
     */
    public static function create(CountryCode|string $code): CountryInterface
    {
        if (is_string($code)) {
            try {
                $code = CountryCode::from(strtoupper($code));
            } catch (ValueError $e) {
                return throw new InvalidCountryCodeException($e->getMessage());
            }
        }

        return match ($code) {
            CountryCode::AD => new AD(), // Andorra
            CountryCode::AE => new AE(), // United Arab Emirates
            CountryCode::AF => new AF(), // Afghanistan
            CountryCode::AG => new AG(), // Antigua and Barbuda
            CountryCode::AI => new AI(), // Anguilla
            CountryCode::AL => new AL(), // Albania
            CountryCode::AM => new AM(), // Armenia
            CountryCode::AO => new AO(), // Angola
            CountryCode::AQ => new AQ(), // Antarctica
            CountryCode::AR => new AR(), // Argentina
            CountryCode::AS => new AS_(), // American Samoa
            CountryCode::AT => new AT(), // Austria
            CountryCode::AU => new AU(), // Australia
            CountryCode::AW => new AW(), // Aruba
            CountryCode::AX => new AX(), // Åland
            CountryCode::AZ => new AZ(), // Azerbaijan
            CountryCode::BA => new BA(), // Bosnia and Herzegovina
            CountryCode::BB => new BB(), // Barbados
            CountryCode::BD => new BD(), // Bangladesh
            CountryCode::BE => new BE(), // Belgium
            CountryCode::BF => new BF(), // Burkina Faso
            CountryCode::BG => new BG(), // Bulgaria
            CountryCode::BH => new BH(), // Bahrain
            CountryCode::BI => new BI(), // Burundi
            CountryCode::BJ => new BJ(), // Benin
            CountryCode::BL => new BL(), // Saint Barthélemy
            CountryCode::BM => new BM(), // Bermuda
            CountryCode::BN => new BN(), // Brunei
            CountryCode::BO => new BO(), // Bolivia
            CountryCode::BQ => new BQ(), // Bonaire
            CountryCode::BR => new BR(), // Brazil
            CountryCode::BS => new BS(), // Bahamas
            CountryCode::BT => new BT(), // Bhutan
            CountryCode::BV => new BV(), // Bouvet Island
            CountryCode::BW => new BW(), // Botswana
            CountryCode::BY => new BY(), // Belarus
            CountryCode::BZ => new BZ(), // Belize
            CountryCode::CA => new CA(), // Canada
            CountryCode::CC => new CC(), // Cocos (Keeling) Islands
            CountryCode::CD => new CD(), // Democratic Republic of the Congo
            CountryCode::CF => new CF(), // Central African Republic
            CountryCode::CG => new CG(), // Republic of the Congo
            CountryCode::CH => new CH(), // Switzerland
            CountryCode::CI => new CI(), // Ivory Coast
            CountryCode::CK => new CK(), // Cook Islands
            CountryCode::CL => new CL(), // Chile
            CountryCode::CM => new CM(), // Cameroon
            CountryCode::CN => new CN(), // China
            CountryCode::CO => new CO(), // Colombia
            CountryCode::CR => new CR(), // Costa Rica
            CountryCode::CU => new CU(), // Cuba
            CountryCode::CV => new CV(), // Cape Verde
            CountryCode::CW => new CW(), // Curaçao
            CountryCode::CX => new CX(), // Christmas Island
            CountryCode::CY => new CY(), // Cyprus
            CountryCode::CZ => new CZ(), // Czechia
            CountryCode::DE => new DE(), // Germany
            CountryCode::DJ => new DJ(), // Djibouti
            CountryCode::DK => new DK(), // Denmark
            CountryCode::DM => new DM(), // Dominica
            CountryCode::DO => new DO_(), // Dominican Republic
            CountryCode::DZ => new DZ(), // Algeria
            CountryCode::EC => new EC(), // Ecuador
            CountryCode::EE => new EE(), // Estonia
            CountryCode::EG => new EG(), // Egypt
            CountryCode::EH => new EH(), // Western Sahara
            CountryCode::ER => new ER(), // Eritrea
            CountryCode::ES => new ES(), // Spain
            CountryCode::ET => new ET(), // Ethiopia
            CountryCode::FI => new FI(), // Finland
            CountryCode::FJ => new FJ(), // Fiji
            CountryCode::FK => new FK(), // Falkland Islands
            CountryCode::FM => new FM(), // Micronesia
            CountryCode::FO => new FO(), // Faroe Islands
            CountryCode::FR => new FR(), // France
            CountryCode::GA => new GA(), // Gabon
            CountryCode::GB => new GB(), // United Kingdom
            CountryCode::GD => new GD(), // Grenada
            CountryCode::GE => new GE(), // Georgia
            CountryCode::GF => new GF(), // French Guiana
            CountryCode::GG => new GG(), // Guernsey
            CountryCode::GH => new GH(), // Ghana
            CountryCode::GI => new GI(), // Gibraltar
            CountryCode::GL => new GL(), // Greenland
            CountryCode::GM => new GM(), // Gambia
            CountryCode::GN => new GN(), // Guinea
            CountryCode::GP => new GP(), // Guadeloupe
            CountryCode::GQ => new GQ(), // Equatorial Guinea
            CountryCode::GR => new GR(), // Greece
            CountryCode::GS => new GS(), // South Georgia and the South Sandwich Islands
            CountryCode::GT => new GT(), // Guatemala
            CountryCode::GU => new GU(), // Guam
            CountryCode::GW => new GW(), // Guinea-Bissau
            CountryCode::GY => new GY(), // Guyana
            CountryCode::HK => new HK(), // Hong Kong
            CountryCode::HM => new HM(), // Heard Island and McDonald Islands
            CountryCode::HN => new HN(), // Honduras
            CountryCode::HR => new HR(), // Croatia
            CountryCode::HT => new HT(), // Haiti
            CountryCode::HU => new HU(), // Hungary
            CountryCode::ID => new ID(), // Indonesia
            CountryCode::IE => new IE(), // Ireland
            CountryCode::IL => new IL(), // Israel
            CountryCode::IM => new IM(), // Isle of Man
            CountryCode::IN => new IN(), // India
            CountryCode::IO => new IO(), // British Indian Ocean Territory
            CountryCode::IQ => new IQ(), // Iraq
            CountryCode::IR => new IR(), // Iran
            CountryCode::IS => new IS(), // Iceland
            CountryCode::IT => new IT(), // Italy
            CountryCode::JE => new JE(), // Jersey
            CountryCode::JM => new JM(), // Jamaica
            CountryCode::JO => new JO(), // Jordan
            CountryCode::JP => new JP(), // Japan
            CountryCode::KE => new KE(), // Kenya
            CountryCode::KG => new KG(), // Kyrgyzstan
            CountryCode::KH => new KH(), // Cambodia
            CountryCode::KI => new KI(), // Kiribati
            CountryCode::KM => new KM(), // Comoros
            CountryCode::KN => new KN(), // Saint Kitts and Nevis
            CountryCode::KP => new KP(), // North Korea
            CountryCode::KR => new KR(), // South Korea
            CountryCode::KW => new KW(), // Kuwait
            CountryCode::KY => new KY(), // Cayman Islands
            CountryCode::KZ => new KZ(), // Kazakhstan
            CountryCode::LA => new LA(), // Laos
            CountryCode::LB => new LB(), // Lebanon
            CountryCode::LC => new LC(), // Saint Lucia
            CountryCode::LI => new LI(), // Liechtenstein
            CountryCode::LK => new LK(), // Sri Lanka
            CountryCode::LR => new LR(), // Liberia
            CountryCode::LS => new LS(), // Lesotho
            CountryCode::LT => new LT(), // Lithuania
            CountryCode::LU => new LU(), // Luxembourg
            CountryCode::LV => new LV(), // Latvia
            CountryCode::LY => new LY(), // Libya
            CountryCode::MA => new MA(), // Morocco
            CountryCode::MC => new MC(), // Monaco
            CountryCode::MD => new MD(), // Moldova
            CountryCode::ME => new ME(), // Montenegro
            CountryCode::MF => new MF(), // Saint Martin
            CountryCode::MG => new MG(), // Madagascar
            CountryCode::MH => new MH(), // Marshall Islands
            CountryCode::MK => new MK(), // North Macedonia
            CountryCode::ML => new ML(), // Mali
            CountryCode::MM => new MM(), // Myanmar
            CountryCode::MN => new MN(), // Mongolia
            CountryCode::MO => new MO(), // Macao
            CountryCode::MP => new MP(), // Northern Mariana Islands
            CountryCode::MQ => new MQ(), // Martinique
            CountryCode::MR => new MR(), // Mauritania
            CountryCode::MS => new MS(), // Montserrat
            CountryCode::MT => new MT(), // Malta
            CountryCode::MU => new MU(), // Mauritius
            CountryCode::MV => new MV(), // Maldives
            CountryCode::MW => new MW(), // Malawi
            CountryCode::MX => new MX(), // Mexico
            CountryCode::MY => new MY(), // Malaysia
            CountryCode::MZ => new MZ(), // Mozambique
            CountryCode::NA => new NA(), // Namibia
            CountryCode::NC => new NC(), // New Caledonia
            CountryCode::NE => new NE(), // Niger
            CountryCode::NF => new NF(), // Norfolk Island
            CountryCode::NG => new NG(), // Nigeria
            CountryCode::NI => new NI(), // Nicaragua
            CountryCode::NL => new NL(), // Netherlands
            CountryCode::NO => new NO(), // Norway
            CountryCode::NP => new NP(), // Nepal
            CountryCode::NR => new NR(), // Nauru
            CountryCode::NU => new NU(), // Niue
            CountryCode::NZ => new NZ(), // New Zealand
            CountryCode::OM => new OM(), // Oman
            CountryCode::PA => new PA(), // Panama
            CountryCode::PE => new PE(), // Peru
            CountryCode::PF => new PF(), // French Polynesia
            CountryCode::PG => new PG(), // Papua New Guinea
            CountryCode::PH => new PH(), // Philippines
            CountryCode::PK => new PK(), // Pakistan
            CountryCode::PL => new PL(), // Poland
            CountryCode::PM => new PM(), // Saint Pierre and Miquelon
            CountryCode::PN => new PN(), // Pitcairn Islands
            CountryCode::PR => new PR(), // Puerto Rico
            CountryCode::PS => new PS(), // Palestine
            CountryCode::PT => new PT(), // Portugal
            CountryCode::PW => new PW(), // Palau
            CountryCode::PY => new PY(), // Paraguay
            CountryCode::QA => new QA(), // Qatar
            CountryCode::RE => new RE(), // Réunion
            CountryCode::RO => new RO(), // Romania
            CountryCode::RS => new RS(), // Serbia
            CountryCode::RU => new RU(), // Russia
            CountryCode::RW => new RW(), // Rwanda
            CountryCode::SA => new SA(), // Saudi Arabia
            CountryCode::SB => new SB(), // Solomon Islands
            CountryCode::SC => new SC(), // Seychelles
            CountryCode::SD => new SD(), // Sudan
            CountryCode::SE => new SE(), // Sweden
            CountryCode::SG => new SG(), // Singapore
            CountryCode::SH => new SH(), // Saint Helena
            CountryCode::SI => new SI(), // Slovenia
            CountryCode::SJ => new SJ(), // Svalbard and Jan Mayen
            CountryCode::SK => new SK(), // Slovakia
            CountryCode::SL => new SL(), // Sierra Leone
            CountryCode::SM => new SM(), // San Marino
            CountryCode::SN => new SN(), // Senegal
            CountryCode::SO => new SO(), // Somalia
            CountryCode::SR => new SR(), // Suriname
            CountryCode::SS => new SS(), // South Sudan
            CountryCode::ST => new ST(), // São Tomé and Príncipe
            CountryCode::SV => new SV(), // El Salvador
            CountryCode::SX => new SX(), // Sint Maarten
            CountryCode::SY => new SY(), // Syria
            CountryCode::SZ => new SZ(), // Eswatini
            CountryCode::TC => new TC(), // Turks and Caicos Islands
            CountryCode::TD => new TD(), // Chad
            CountryCode::TF => new TF(), // French Southern Territories
            CountryCode::TG => new TG(), // Togo
            CountryCode::TH => new TH(), // Thailand
            CountryCode::TJ => new TJ(), // Tajikistan
            CountryCode::TK => new TK(), // Tokelau
            CountryCode::TL => new TL(), // Timor-Leste
            CountryCode::TM => new TM(), // Turkmenistan
            CountryCode::TN => new TN(), // Tunisia
            CountryCode::TO => new TO(), // Tonga
            CountryCode::TR => new TR(), // Turkey
            CountryCode::TT => new TT(), // Trinidad and Tobago
            CountryCode::TV => new TV(), // Tuvalu
            CountryCode::TW => new TW(), // Taiwan
            CountryCode::TZ => new TZ(), // Tanzania
            CountryCode::UA => new UA(), // Ukraine
            CountryCode::UG => new UG(), // Uganda
            CountryCode::UM => new UM(), // U.S. Minor Outlying Islands
            CountryCode::US => new US(), // United States of America
            CountryCode::UY => new UY(), // Uruguay
            CountryCode::UZ => new UZ(), // Uzbekistan
            CountryCode::VA => new VA(), // Vatican City
            CountryCode::VC => new VC(), // Saint Vincent and the Grenadines
            CountryCode::VE => new VE(), // Venezuela
            CountryCode::VG => new VG(), // Virgin Islands (British)
            CountryCode::VI => new VI(), // Virgin Islands (U.S.)
            CountryCode::VN => new VN(), // Viet Nam
            CountryCode::VU => new VU(), // Vanuatu
            CountryCode::WF => new WF(), // Wallis and Futuna
            CountryCode::WS => new WS(), // Samoa
            CountryCode::XK => new XK(), // Kosovo
            CountryCode::YE => new YE(), // Yemen
            CountryCode::YT => new YT(), // Mayotte
            CountryCode::ZA => new ZA(), // South Africa
            CountryCode::ZM => new ZM(), // Zambia
            CountryCode::ZW => new ZW(), // Zimbabwe
            default => throw new InvalidCountryCodeException("Country not supported: $code->value"),
        };
    }
}
