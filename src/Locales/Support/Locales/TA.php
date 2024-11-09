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
 * Tamil
 */
final class TA extends AbstractLocale implements LocaleInterface
{
    public function __construct()
    {
        $this->setCode(LocaleCode::TAMIL);
        $this->setName(LocaleName::TAMIL);
        $this->setEnglishName(LocaleEnglishName::TAMIL);
        $this->setFlag(LocaleFlag::TAMIL);
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
            ContinentName::AFRICA => 'ஆபிரிக்கா',
            ContinentName::ANTARCTICA => 'அண்டார்டிகா',
            ContinentName::ARCTIC => 'ஆர்க்டிக்',
            ContinentName::ASIA => 'ஆசியா',
            ContinentName::EUROPE => 'ஏரோப்',
            ContinentName::NORTH_AMERICA => 'வட அமெரிக்கா',
            ContinentName::OCEANIA => 'பசிபிக்',
            ContinentName::SOUTH_AMERICA => 'தென் அமெரிக்கா',
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
            CountryName::AFGHANISTAN => 'ஆப்கானிஸ்தான்',
            CountryName::ALAND => 'ஆலண்ட்',
            CountryName::ALBANIA => 'ஆல்பேனியா',
            CountryName::ALGERIA => 'அல்ஜீரியா',
            CountryName::AMERICAN_SAMOA => 'அமெரிக்கா சமோஆ',
            CountryName::ANDORRA => 'ஆண்டோரா',
            CountryName::ANGOLA => 'அங்கோலா',
            CountryName::ANGUILLA => 'ஆங்கிலா',
            CountryName::ANTARCTICA => 'அண்டார்டிகா',
            CountryName::ANTIGUA_AND_BARBUDA => 'ஆன்டிகுவா மற்றும் பார்பு',
            CountryName::ARGENTINA => 'ஆர்ஜென்டினா',
            CountryName::ARMENIA => 'அர்மேனியா',
            CountryName::ARUBA => 'அரூபா',
            CountryName::AUSTRALIA => 'ஆஸ்திரேலியா',
            CountryName::AUSTRIA => 'ஆஸ்திரியா',
            CountryName::AZERBAIJAN => 'அசர்பைஜான்',
            CountryName::BAHAMAS => 'பஹாமாஸ்',
            CountryName::BAHRAIN => 'பஹ்ரேன்',
            CountryName::BANGLADESH => 'பங்களாதேஷ்',
            CountryName::BARBADOS => 'பார்பேடோஸ்',
            CountryName::BELARUS => 'பெலாரஸ்',
            CountryName::BELGIUM => 'பெல்ஜியம்',
            CountryName::BELIZE => 'பெலிஸ்',
            CountryName::BENIN => 'பெனின்',
            CountryName::BERMUDA => 'பெர்முடா',
            CountryName::BHUTAN => 'பூதான்',
            CountryName::BOLIVIA => 'பொலிவியா',
            CountryName::BONAIRE => 'பொனேயர்',
            CountryName::BOSNIA_AND_HERZEGOVINA => 'போஸ்னியா மற்றும் ஹெர்செகோவினா',
            CountryName::BOTSWANA => 'பொட்ஸ்வானா',
            CountryName::BOUVET_ISLAND => 'பூவேட் தீவு',
            CountryName::BRAZIL => 'பிரேசில்',
            CountryName::BRITISH_INDIAN_OCEAN_TERRITORY => 'பிரிட்டிஷ் இந்தி பெருங்கடல் பிரதேசம்',
            CountryName::BRUNEI => 'பிருனெய்',
            CountryName::BULGARIA => 'புல்கேரியா',
            CountryName::BURKINA_FASO => 'புர்கினா பாசோ',
            CountryName::BURUNDI => 'புருண்டி',
            CountryName::CAMBODIA => 'கம்போடியா',
            CountryName::CAMEROON => 'கேமரூன்',
            CountryName::CANADA => 'கனடா',
            CountryName::CAPE_VERDE => 'கேப் வெர்டே',
            CountryName::CAYMAN_ISLANDS => 'கேமன் தீவுகள்',
            CountryName::CENTRAL_AFRICAN_REPUBLIC => 'மத்திய ஆப்பிரிக்கா குடியரசு',
            CountryName::CHAD => 'சாட்',
            CountryName::CHILE => 'சிலே',
            CountryName::CHINA => 'சீனா',
            CountryName::CHRISTMAS_ISLAND => 'கிறிஸ்மஸ் தீவு',
            CountryName::COCOS_KEELING_ISLANDS => 'கோகோஸ் (கீலிங்) தீவுகள்',
            CountryName::COLOMBIA => 'கொலம்பியா',
            CountryName::COMOROS => 'கோமோரோஸ்',
            CountryName::COOK_ISLANDS => 'குக் தீவுகள்',
            CountryName::COSTA_RICA => 'கோஸ்டா ரிக்கா',
            CountryName::CROATIA => 'குரோயேஷியா',
            CountryName::CUBA => 'கியூபா',
            CountryName::CURACAO => 'குராகாவோ',
            CountryName::CYPRUS => 'சைபிரஸ்',
            CountryName::CZECHIA => 'செக்கியா',
            CountryName::DEMOCRATIC_REPUBLIC_OF_THE_CONGO => 'காங்கோ ஜனநாயக குடியரசு',
            CountryName::DENMARK => 'டென்மார்க்',
            CountryName::DJIBOUTI => 'ஜிபவுடி',
            CountryName::DOMINICA => 'டொமினிக்கா',
            CountryName::DOMINICAN_REPUBLIC => 'டொமினிகன் குடியரசு',
            CountryName::ECUADOR => 'ஈக்குவடோர்',
            CountryName::EGYPT => 'எகிப்து',
            CountryName::EL_SALVADOR => 'எல் சால்வடோர்',
            CountryName::EQUATORIAL_GUINEA => 'சமுதாய கூனியா',
            CountryName::ERITREA => 'எரிட்ரியா',
            CountryName::ESTONIA => 'எஸ்டோனியா',
            CountryName::ESWATINI => 'எஸ்வாட்டினி',
            CountryName::ETHIOPIA => 'எத்தியோப்பியா',
            CountryName::FALKLAND_ISLANDS => 'பால்க்லாந்து தீவுகள்',
            CountryName::FAROE_ISLANDS => 'பாரோ தீவுகள்',
            CountryName::FIJI => 'ஃபிஜி',
            CountryName::FINLAND => 'ஃபின்லாந்து',
            CountryName::FRANCE => 'பிரான்ஸ்',
            CountryName::FRENCH_GUIANA => 'பிரஞ்சு குவியானா',
            CountryName::FRENCH_POLYNESIA => 'பிரஞ்சு பாலினேசியா',
            CountryName::FRENCH_SOUTHERN_TERRITORIES => 'பிரஞ்சு தெற்கு பிரதேசங்கள்',
            CountryName::GABON => 'காபோன்',
            CountryName::GAMBIA => 'காம்பியா',
            CountryName::GEORGIA => 'ஜார்ஜியா',
            CountryName::GERMANY => 'ஜெர்மனி',
            CountryName::GHANA => 'கானா',
            CountryName::GIBRALTAR => 'ஜிப்ரால்டார்',
            CountryName::GREECE => 'கிரேசு',
            CountryName::GREENLAND => 'கிரீன்லாந்து',
            CountryName::GRENADA => 'கிரெனடா',
            CountryName::GUADELOUPE => 'குவாடெலூப்',
            CountryName::GUAM => 'குவாம்',
            CountryName::GUATEMALA => 'குவாடமலை',
            CountryName::GUERNSEY => 'குரன்சி',
            CountryName::GUINEA => 'கினியா',
            CountryName::GUINEA_BISSAU => 'கினியா-பிசாவு',
            CountryName::GUYANA => 'குவியானா',
            CountryName::HAITI => 'ஹைட்டி',
            CountryName::HEARD_ISLAND_AND_MCDONALD_ISLANDS => 'ஹர்ட் தீவு மற்றும் மேக்டொனால்ட் தீவுகள்',
            CountryName::HONDURAS => 'ஹொண்டூராஸ்',
            CountryName::HONG_KONG => 'ஹாங்காங்',
            CountryName::HUNGARY => 'ஹங்கேரி',
            CountryName::ICELAND => 'ஐஸ்லாந்து',
            CountryName::INDIA => 'இந்தியா',
            CountryName::INDONESIA => 'இந்தோனேஷியா',
            CountryName::IRAN => 'இரான்',
            CountryName::IRAQ => 'இராக்',
            CountryName::IRELAND => 'ஐர்லாந்து',
            CountryName::ISLE_OF_MAN => 'மேன் தீவு',
            CountryName::ISRAEL => 'இஸ்ரேல்',
            CountryName::ITALY => 'இத்தாலி',
            CountryName::IVORY_COAST => 'எலும்புத் தட்டி கடல்',
            CountryName::JAMAICA => 'ஜமெய்க்கா',
            CountryName::JAPAN => 'ஜப்பான்',
            CountryName::JERSEY => 'ஜர்ஸி',
            CountryName::JORDAN => 'ஜோர்டன்',
            CountryName::KAZAKHSTAN => 'கசகஸ்தான்',
            CountryName::KENYA => 'கேன்யா',
            CountryName::KIRIBATI => 'கிரிபாத்தி',
            CountryName::KOSOVO => 'கொசோவோ',
            CountryName::KUWAIT => 'குவைத்',
            CountryName::KYRGYZSTAN => 'கிர்கிஸ்தான்',
            CountryName::LAOS => 'லாவோஸ்',
            CountryName::LATVIA => 'லாட்ட்வியா',
            CountryName::LEBANON => 'லெபனான்',
            CountryName::LESOTHO => 'லசோதோ',
            CountryName::LIBERIA => 'லிபேரியா',
            CountryName::LIBYA => 'லிபியா',
            CountryName::LIECHTENSTEIN => 'லிச்செட்டென்ஸ்டைன்',
            CountryName::LITHUANIA => 'லிதுவேனியா',
            CountryName::LUXEMBOURG => 'லக்சம்பர்க்',
            CountryName::MACAO => 'மகாவோ',
            CountryName::MADAGASCAR => 'மடகாஸ்கர்',
            CountryName::MALAWI => 'மலாவி',
            CountryName::MALAYSIA => 'மலேசியா',
            CountryName::MALDIVES => 'மாலத்தீவுகள்',
            CountryName::MALI => 'மாலி',
            CountryName::MALTA => 'மால்டா',
            CountryName::MARSHALL_ISLANDS => 'மார்ஷல் தீவுகள்',
            CountryName::MARTINIQUE => 'மார்டினிக்',
            CountryName::MAURITANIA => 'மொரிடானியா',
            CountryName::MAURITIUS => 'மோரீஷியஸ்',
            CountryName::MAYOTTE => 'மேயொட்',
            CountryName::MEXICO => 'மேக்சிகோ',
            CountryName::MICRONESIA => 'மைக்ரோனேசியா',
            CountryName::MOLDOVA => 'மொல்டோவா',
            CountryName::MONACO => 'மொனாகோ',
            CountryName::MONGOLIA => 'மங்கோலியா',
            CountryName::MONTENEGRO => 'மொன்டெனேக்ரோ',
            CountryName::MONTSERRAT => 'மொன்ட்செர்ராட்',
            CountryName::MOROCCO => 'மொரோக்கோ',
            CountryName::MOZAMBIQUE => 'மோசாம்பிக்',
            CountryName::MYANMAR => 'மியான்மார்',
            CountryName::NAMIBIA => 'நமீபியா',
            CountryName::NAURU => 'நௌரு',
            CountryName::NEPAL => 'நேபால்',
            CountryName::NETHERLANDS => 'நெதர்லாந்து',
            CountryName::NEW_CALEDONIA => 'புதிய கேலிடோனியா',
            CountryName::NEW_ZEALAND => 'புதிய நியூசிலாந்து',
            CountryName::NICARAGUA => 'நிகராகுவா',
            CountryName::NIGER => 'நைஜர்',
            CountryName::NIGERIA => 'நைஜீரியா',
            CountryName::NIUE => 'நியூ',
            CountryName::NORFOLK_ISLAND => 'நார்ஃபோக் தீவு',
            CountryName::NORTHERN_MARIANA_ISLANDS => 'வட மாறியானா தீவுகள்',
            CountryName::NORTH_KOREA => 'வட கொரியா',
            CountryName::NORTH_MACEDONIA => 'வட மேசிடோனியா',
            CountryName::NORWAY => 'நோர்வே',
            CountryName::OMAN => 'ஒமான',
            CountryName::PAKISTAN => 'பாகிஸ்தான்',
            CountryName::PALAU => 'பாலாவு',
            CountryName::PALESTINE => 'பாலஸ்தீன்',
            CountryName::PANAMA => 'பனாமா',
            CountryName::PAPUA_NEW_GUINEA => 'பபுவா புதிய கினியா',
            CountryName::PARAGUAY => 'பாரகுவே',
            CountryName::PERU => 'பெரு',
            CountryName::PHILIPPINES => 'பிலிப்பைன்ஸ்',
            CountryName::PITCAIRN_ISLANDS => 'பிட்கெர்ன் தீவுகள்',
            CountryName::POLAND => 'போலந்து',
            CountryName::PORTUGAL => 'போர்ச்சுகல்',
            CountryName::PUERTO_RICO => 'புவேர்டோ ரிகோ',
            CountryName::QATAR => 'கத்தார்',
            CountryName::REPUBLIC_OF_THE_CONGO => 'காங்கோ குடியரசு',
            CountryName::REUNION => 'ரியூனியன்',
            CountryName::ROMANIA => 'ரொமேனியா',
            CountryName::RUSSIA => 'ரஷ்யா',
            CountryName::RWANDA => 'ருவாண்டா',
            CountryName::SAINT_BARTHELEMY => 'செயிண்ட் பர்தெலமி',
            CountryName::SAINT_HELENA => 'செயிண்ட் ஹெலினா',
            CountryName::SAINT_KITTS_AND_NEVIS => 'செயிண்ட் கிட்ட்ஸ் மற்றும் நெவிஸ்',
            CountryName::SAINT_LUCIA => 'செயிண்ட் லூசியா',
            CountryName::SAINT_MARTIN => 'செயிண்ட் மார்டின்',
            CountryName::SAINT_PIERRE_AND_MIQUELON => 'செயிண்ட் பியரே மற்றும் மிக்கூலான்',
            CountryName::SAINT_VINCENT_AND_THE_GRENADINES => 'செயிண்ட் வின்சென்ட் மற்றும் கிரனடின்ஸ்',
            CountryName::SAMOA => 'சாமோஆ',
            CountryName::SAN_MARINO => 'சான் மாரினோ',
            CountryName::SAO_TOME_AND_PRINCIPE => 'சாவோ தொமே மற்றும் பிரின்சிபே',
            CountryName::SAUDI_ARABIA => 'சவூதி அரேபியா',
            CountryName::SENEGAL => 'செனெகல்',
            CountryName::SERBIA => 'செர்பியா',
            CountryName::SEYCHELLES => 'செய்செல்ஸ்',
            CountryName::SIERRA_LEONE => 'சியெரா லியோன்',
            CountryName::SINGAPORE => 'சிங்கப்பூர்',
            CountryName::SINT_MAARTEN => 'சிண்ட் மார்டன்',
            CountryName::SLOVAKIA => 'ஸ்லோவாகியா',
            CountryName::SLOVENIA => 'ஸ்லோவேனியா',
            CountryName::SOLOMON_ISLANDS => 'சாலமன் தீவுகள்',
            CountryName::SOMALIA => 'சோமாலியா',
            CountryName::SOUTH_AFRICA => 'தென் ஆப்பிரிக்கா',
            CountryName::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS => 'தென் ஜார்ஜியா மற்றும் தென் சாண்ட்விச் தீவுகள்',
            CountryName::SOUTH_KOREA => 'தென் கொரியா',
            CountryName::SOUTH_SUDAN => 'தென் சூடான்',
            CountryName::SPAIN => 'ஸ்பெயின்',
            CountryName::SRI_LANKA => 'இலங்கை',
            CountryName::SUDAN => 'சூடான்',
            CountryName::SURINAME => 'சூரினாம்',
            CountryName::SVALBARD_AND_JAN_MAYEN => 'ஸ்வால்பார்ட் மற்றும் ஜான் மெயென்',
            CountryName::SWEDEN => 'சுவீடன்',
            CountryName::SWITZERLAND => 'சுவிட்சர்லாந்து',
            CountryName::SYRIA => 'சிரியா',
            CountryName::TAIWAN => 'தாய்வான்',
            CountryName::TAJIKISTAN => 'தாஜிகிஸ்தான்',
            CountryName::TANZANIA => 'தான்சேனியா',
            CountryName::THAILAND => 'தாய்லாந்து',
            CountryName::TIMOR_LESTE => 'டிமோர்-லெஸ்டே',
            CountryName::TOGO => 'தோகு',
            CountryName::TOKELAU => 'தொகேலாவு',
            CountryName::TONGA => 'தோங்கா',
            CountryName::TRINIDAD_AND_TOBAGO => 'டிரினிடாட் மற்றும் டோபாகோ',
            CountryName::TUNISIA => 'தூனிசியா',
            CountryName::TURKEY => 'துருக்கி',
            CountryName::TURKMENISTAN => 'துர்க்மெனிஸ்தான்',
            CountryName::TURKS_AND_CAICOS_ISLANDS => 'துர்க்ஸ் மற்றும் கைகோஸ் தீவுகள்',
            CountryName::TUVALU => 'துவாலு',
            CountryName::UGANDA => 'யுகாண்டா',
            CountryName::UKRAINE => 'உக்ரைன்',
            CountryName::UNITED_ARAB_EMIRATES => 'ஐக்கிய அரபு அமீரகங்கள்',
            CountryName::UNITED_KINGDOM => 'ஐக்கிய இராச்சியம்',
            CountryName::UNITED_STATES_OF_AMERICA => 'அமெரிக்கா ஐக்கிய நாடுகள்',
            CountryName::URUGUAY => 'உருகுவே',
            CountryName::US_MINOR_OUTLYING_ISLANDS => 'அமெரிக்கா சிறிய வெளிப்புற தீவுகள்',
            CountryName::UZBEKISTAN => 'உழபெக்கிஸ்தான்',
            CountryName::VANUATU => 'வானுவாட்டு',
            CountryName::VATICAN_CITY => 'வத்திகான் நகரம்',
            CountryName::VENEZUELA => 'வேனிசுவேலா',
            CountryName::VIET_NAM => 'வியட்நாம்',
            CountryName::VIRGIN_ISLANDS_BRITISH => 'பிரிட்டிஷ் கவுரி தீவுகள்',
            CountryName::VIRGIN_ISLANDS_US => 'அமெரிக்க கவர்ஜன் தீவுகள்',
            CountryName::WALLIS_AND_FUTUNA => 'வாலிஸ் மற்றும் ஃபூடூனா',
            CountryName::WESTERN_SAHARA => 'மேற்கு சஹாரா',
            CountryName::YEMEN => 'எமன்',
            CountryName::ZAMBIA => 'ஜாம்பியா',
            CountryName::ZIMBABWE => 'சிம்பாப்வே',
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
            CountryCapital::ABUJA => 'அபுஜா',
            CountryCapital::ABU_DHABI => 'அபு தாபி',
            CountryCapital::ACCRA => 'அக்கிரா',
            CountryCapital::ADAMSTOWN => 'அடம்ஸ்டவுன்',
            CountryCapital::ADDIS_ABABA => 'அடிஸ் அபாபா',
            CountryCapital::ALGIERS => 'ஆல்ஜியர்ஸ்',
            CountryCapital::ALOFI => 'அலோஃபி',
            CountryCapital::AMMAN => 'அம்மான்',
            CountryCapital::AMSTERDAM => 'ஆம்ஸ்டர்டாம்',
            CountryCapital::ANDORRA_LA_VELLA => 'ஆன்டோரா லா வேலா',
            CountryCapital::ANKARA => 'அங்காரா',
            CountryCapital::ANTANANARIVO => 'ஆண்டனானரிவோ',
            CountryCapital::APIA => 'அபியா',
            CountryCapital::ASHGABAT => 'அஷ்காபாட்',
            CountryCapital::ASMARA => 'அஸ்மாரா',
            CountryCapital::ASUNCION => 'அசுஞ்சியோன்',
            CountryCapital::ATHENS => 'ஆத்தின்ஸ்',
            CountryCapital::AVARUA => 'ஆவரூா',
            CountryCapital::BAGHDAD => 'பாக்தாத்',
            CountryCapital::BAKU => 'பாகு',
            CountryCapital::BAMAKO => 'பாமாகோ',
            CountryCapital::BANDAR_SERI_BEGAWAN => 'பாண்டர் ஸெரி பெகாவான்',
            CountryCapital::BANGKOK => 'பாங்காக்',
            CountryCapital::BANGUI => 'பாங்குவி',
            CountryCapital::BANJUL => 'பஞ்சுல்',
            CountryCapital::BASSETERRE => 'பாஸெட்டர்',
            CountryCapital::BASSE_TERRE => 'பாஸே-தெர்ரே',
            CountryCapital::BEIJING => 'பேஜிங்',
            CountryCapital::BEIRUT => 'பெய்ரூத்',
            CountryCapital::BELGRADE => 'பெல்கிரேட்',
            CountryCapital::BELMOPAN => 'பெல்மோபான்',
            CountryCapital::BERLIN => 'பர்லின்',
            CountryCapital::BERN => 'பெர்ன்',
            CountryCapital::BISHKEK => 'பிஷ்கெக்',
            CountryCapital::BISSAU => 'பிசாவு',
            CountryCapital::BOGOTA => 'போகோட்டா',
            CountryCapital::BRASILIA => 'பிராசிலியா',
            CountryCapital::BRATISLAVA => 'பிராடிஸ்லாவா',
            CountryCapital::BRAZZAVILLE => 'பிராசவில்லே',
            CountryCapital::BRIDGETOWN => 'பிரிட்ஜ்டவுன்',
            CountryCapital::BRUSSELS => 'பிரசல்ஸ்',
            CountryCapital::BUCHAREST => 'புக்கரெஸ்ட்',
            CountryCapital::BUDAPEST => 'புடாபெஸ்ட்',
            CountryCapital::BUENOS_AIRES => 'புவெனோஸ் ஐர்ஸ்',
            CountryCapital::CAIRO => 'கெயிரோ',
            CountryCapital::CANBERRA => 'கான்பெர்ரா',
            CountryCapital::CARACAS => 'காரகாஸ்',
            CountryCapital::CASTRIES => 'காஸ்ட்ரீஸ்',
            CountryCapital::CAYENNE => 'கயென்னே',
            CountryCapital::CHARLOTTE_AMALIE => 'சார்லட் அமாலி',
            CountryCapital::CHISINAU => 'சிசினௌ',
            CountryCapital::COCKBURN_TOWN => 'காக்பர்ன் டவுன்',
            CountryCapital::COLOMBO => 'கொழும்பு',
            CountryCapital::CONAKRY => 'கொனாக்ரி',
            CountryCapital::COPENHAGEN => 'கோபன்ஹேகன்',
            CountryCapital::DAKAR => 'தாக்கர்',
            CountryCapital::DAMASCUS => 'தமாஸ்கஸ்',
            CountryCapital::DHAKA => 'தாக்கா',
            CountryCapital::DIEGO_GARCIA => 'டியேகோ கார்சியா',
            CountryCapital::DILI => 'டிலி',
            CountryCapital::DJIBOUTI_CITY => 'ஜிபௌட்டி நகரம்',
            CountryCapital::DODOMA => 'டோடோமா',
            CountryCapital::DOHA => 'தோகா',
            CountryCapital::DOUGLAS => 'டஊக்ளஸ்',
            CountryCapital::DUBLIN => 'டப்ளின்',
            CountryCapital::DUSHANBE => 'துஷான்பே',
            CountryCapital::EAST_JERUSALEM => 'கிழக்கு ஜெரூசலேம்',
            CountryCapital::EL_AAIUN => 'எல் ஐயூன்',
            CountryCapital::FAKAOFO => 'பாகாஓஃபோ',
            CountryCapital::FLYING_FISH_COVE => 'பறக்கும் மீன் கோவ்',
            CountryCapital::FORT_DE_FRANCE => 'போர்ட்-டெ-ஃப்ரான்ஸ்',
            CountryCapital::FREETOWN => 'ஃபிரீடவுன்',
            CountryCapital::FUNAFUTI => 'ஃபுனாஃபுடி',
            CountryCapital::GABORONE => 'கபரோனே',
            CountryCapital::GEORGETOWN => 'ஜார்ஜ்டவுன்',
            CountryCapital::GEORGE_TOWN => 'ஜார்ஜ் டவுன்',
            CountryCapital::GIBRALTAR => 'கிப்ரால்டார்',
            CountryCapital::GITEGA => 'கிடேகா',
            CountryCapital::GUATEMALA_CITY => 'குவாடமாலா நகரம்',
            CountryCapital::GUSTAVIA => 'கஸ்டேவியா',
            CountryCapital::HAGATNA => 'ஹாகட்னா',
            CountryCapital::HAMILTON => 'ஹாமில்டன்',
            CountryCapital::HANOI => 'ஹனோய்',
            CountryCapital::HARARE => 'ஹராரே',
            CountryCapital::HAVANA => 'ஹவானா',
            CountryCapital::HELSINKI => 'ஹெல்சிங்கி',
            CountryCapital::HONG_KONG => 'ஹாங்காங்க்',
            CountryCapital::HONIARA => 'ஹோனியாரா',
            CountryCapital::ISLAMABAD => 'இஸ்லாமாபாத்',
            CountryCapital::JAKARTA => 'ஜாகர்த்தா',
            CountryCapital::JAMESTOWN => 'ஜேம் ஸ்டவுன்',
            CountryCapital::JERUSALEM => 'ஜெரூசலேம்',
            CountryCapital::JUBA => 'ஜூபா',
            CountryCapital::KABUL => 'காபூல்',
            CountryCapital::KAMPALA => 'கம்பாலா',
            CountryCapital::KATHMANDU => 'காத்மாண்டு',
            CountryCapital::KHARTOUM => 'கார்த்தூம்',
            CountryCapital::KIGALI => 'கிகாலி',
            CountryCapital::KINGSTON => 'கிங்க்ஸ்டன்',
            CountryCapital::KINGSTOWN => 'கிங்ஸ்டவுன்',
            CountryCapital::KING_EDWARD_POINT => 'கிங் எட்வர்டு பாயிண்ட்',
            CountryCapital::KINSHASA => 'கின்ஷாசா',
            CountryCapital::KRALENDIJK => 'கிராலெண்டிஜ்',
            CountryCapital::KUALA_LUMPUR => 'குவாலா லம்பூர்',
            CountryCapital::KUWAIT_CITY => 'குவைத் நகரம்',
            CountryCapital::KYIV => 'கீவ்',
            CountryCapital::LIBREVILLE => 'லிப்ரெவில்லே',
            CountryCapital::LILONGWE => 'லிலாங்வே',
            CountryCapital::LIMA => 'லிமா',
            CountryCapital::LISBON => 'லிஸ்பன்',
            CountryCapital::LJUBLJANA => 'ல்யூப்லியானா',
            CountryCapital::LOME => 'லோமே',
            CountryCapital::LONDON => 'லண்டன்',
            CountryCapital::LONGYEARBYEN => 'லாங்யர்பியன்',
            CountryCapital::LUANDA => 'லுவாண்டா',
            CountryCapital::LUSAKA => 'லூசாக்கா',
            CountryCapital::LUXEMBOURG => 'லுக்செம்பர்க்',
            CountryCapital::MACAO => 'மகாவ்',
            CountryCapital::MADRID => 'மாட்ரிட்',
            CountryCapital::MAJURO => 'மாஜூரோ',
            CountryCapital::MALABO => 'மாலபோ',
            CountryCapital::MALE => 'மாலே',
            CountryCapital::MAMOUDZOU => 'மமூத்சு',
            CountryCapital::MANAGUA => 'மனாகுவா',
            CountryCapital::MANAMA => 'மனாமா',
            CountryCapital::MANILA => 'மனிலா',
            CountryCapital::MAPUTO => 'மபுடோ',
            CountryCapital::MARIEHAMN => 'மாரிஹாம்',
            CountryCapital::MARIGOT => 'மாரிகோ',
            CountryCapital::MASERU => 'மாசெரு',
            CountryCapital::MATA_UTU => 'மாடா-உட்டு',
            CountryCapital::MBABANE => 'எமபாபேன்',
            CountryCapital::MEXICO_CITY => 'மெக்ஸிகோ நகரம்',
            CountryCapital::MINSK => 'மின்ஸ',
            CountryCapital::NA => 'N/A',
            CountryCapital::NAIROBI => 'நைரோபி',
            CountryCapital::NASSAU => 'நாஸ்சா',
            CountryCapital::NAYPYIDAW => 'நெய்பிடாவ்',
            CountryCapital::NDJAMENA => 'என்\'ஜமேனா',
            CountryCapital::NEW_DELHI => 'புதிய டெல்லி',
            CountryCapital::NGERULMUD => 'ந்கெருல்முட்',
            CountryCapital::NIAMEY => 'நியாமே',
            CountryCapital::NICOSIA => 'நிகோசியா',
            CountryCapital::NONE => 'எதுவும் இல்லை',
            CountryCapital::NOUAKCHOTT => 'நுவாக்சாட்',
            CountryCapital::NOUMEA => 'நூமேஏ',
            CountryCapital::NUKUALOFA => 'நுகுவாலோஃபா',
            CountryCapital::NUR_SULTAN => 'நூர்-சுல்தான்',
            CountryCapital::NUUK => 'நூக்',
            CountryCapital::ORANJESTAD => 'ஓரஞ்சேஸ்டாட்',
            CountryCapital::OSLO => 'ஒஸ்லோ',
            CountryCapital::OTTAWA => 'ஒட்டாவா',
            CountryCapital::OUAGADOUGOU => 'ஊஅகடோகூ',
            CountryCapital::PAGO_PAGO => 'பாகோ பாகோ',
            CountryCapital::PALIKIR => 'பாலிகிர்',
            CountryCapital::PANAMA_CITY => 'பனாமா நகரம்',
            CountryCapital::PAPEETE => 'பாபீட்டே',
            CountryCapital::PARAMARIBO => 'பரமரிபோ',
            CountryCapital::PARIS => 'பாரிஸ்',
            CountryCapital::PHILIPSBURG => 'பிலிப்ஸ்பர்க்',
            CountryCapital::PHNOM_PENH => 'புனாம் பென்',
            CountryCapital::PLYMOUTH => 'பிளைமத்',
            CountryCapital::PODGORICA => 'போட்கோரிகா',
            CountryCapital::PORTO_NOVO => 'போர்டோ-நோவோ',
            CountryCapital::PORT_AUX_FRANCAIS => 'போர்ட்-ஆக்ஸ்-பிரான்சிஸ்',
            CountryCapital::PORT_AU_PRINCE => 'போர்ட்-ஆயூ-பிரின்ஸ்',
            CountryCapital::PORT_LOUIS => 'போர்ட் லூயிஸ்',
            CountryCapital::PORT_MORESBY => 'போர்ட் மோரெஸ்பி',
            CountryCapital::PORT_OF_SPAIN => 'போர்ட் ஆஃப் ஸ்பெயின்',
            CountryCapital::PORT_VILA => 'போர்ட் விளா',
            CountryCapital::PRAGUE => 'பிராக்',
            CountryCapital::PRAIA => 'பிரயா',
            CountryCapital::PRETORIA => 'பிரிடோரியா',
            CountryCapital::PRISTINA => 'பிரிஸ்டினா',
            CountryCapital::PYONGYANG => 'ப்யாங்யாங்',
            CountryCapital::QUITO => 'குவிடோ',
            CountryCapital::RABAT => 'ரபத்',
            CountryCapital::REYKJAVIK => 'ரெய்க்யாவிக்',
            CountryCapital::RIGA => 'ரிகா',
            CountryCapital::RIYADH => 'ரியாத்',
            CountryCapital::ROAD_TOWN => 'ரோட் டவுன்',
            CountryCapital::ROME => 'ரோம்',
            CountryCapital::ROSEAU => 'ரோசௌ',
            CountryCapital::SAINT_DENIS => 'செயிண்ட்-டெனிஸ்',
            CountryCapital::SAINT_HELIER => 'செயிண்ட் ஹெலியர்',
            CountryCapital::SAINT_JOHNS => 'செயிண்ட் ஜான்\'ஸ்',
            CountryCapital::SAINT_PIERRE => 'செயிண்ட்-பியெரே',
            CountryCapital::SAIPAN => 'செய்பேன்',
            CountryCapital::SANA_A => 'சன\'ஆ',
            CountryCapital::SANTIAGO => 'சாண்டியாகோ',
            CountryCapital::SANTO_DOMINGO => 'சாண்டோ டொமிங்கோ',
            CountryCapital::SAN_JOSE => 'சான் ஜோசே',
            CountryCapital::SAN_JUAN => 'சான் ஜுவான்',
            CountryCapital::SAN_MARINO => 'சான் மாரினோ',
            CountryCapital::SAN_SALVADOR => 'சான் சல்வாடோர்',
            CountryCapital::SAO_TOME => 'சாஓ தோமே',
            CountryCapital::SARAJEVO => 'சராஜெவோ',
            CountryCapital::SEOUL => 'சியோல்',
            CountryCapital::SINGAPORE => 'சிங்கப்பூர்',
            CountryCapital::SKOPJE => 'ஸ்கோப்ஜே',
            CountryCapital::SOFIA => 'சோபியா',
            CountryCapital::SOUTH_TARAWA => 'தெற்கு தராவா',
            CountryCapital::STANLEY => 'ஸ்டான்லி',
            CountryCapital::STOCKHOLM => 'ஸ்டாக்ஹோல்ம்',
            CountryCapital::ST_GEORGES => 'ஸ்டி. ஜார்ஜ்\'ஸ்',
            CountryCapital::ST_PETER_PORT => 'ஸ்டி. பீட்டர் போர்ட்',
            CountryCapital::SUCRE => 'சுக்ரே',
            CountryCapital::SUVA => 'சூவா',
            CountryCapital::TAIPEI => 'தைபே',
            CountryCapital::TALLINN => 'தல்லின்',
            CountryCapital::TASHKENT => 'தஷ்கெண்ட்',
            CountryCapital::TBILISI => 'த்பிலிசி',
            CountryCapital::TEGUCIGALPA => 'தெகுசிகல்பா',
            CountryCapital::TEHRAN => 'தெஹ்ரான்',
            CountryCapital::THE_VALLEY => 'தி வாலி',
            CountryCapital::THIMPHU => 'திம்பு',
            CountryCapital::TIRANA => 'திரானா',
            CountryCapital::TOKYO => 'தோக்கியோ',
            CountryCapital::TORSHAVN => 'தோர்ஷாவன்',
            CountryCapital::TRIPOLI => 'டிரிபோலி',
            CountryCapital::TUNIS => 'டூநிஸ்',
            CountryCapital::ULAANBAATAR => 'உலான் பாட்டர்',
            CountryCapital::VADUZ => 'வடூஸ்',
            CountryCapital::VALLETTA => 'வாலெட்டா',
            CountryCapital::VATICAN_CITY => 'வாடிகன் நகரம்',
            CountryCapital::VICTORIA => 'விக்டோரியா',
            CountryCapital::VIENNA => 'வியன்னா',
            CountryCapital::VIENTIANE => 'வியெண்டியான்',
            CountryCapital::VILNIUS => 'வில்நியஸ்',
            CountryCapital::WARSAW => 'வர்சா',
            CountryCapital::WASHINGTON_DC => 'வாஷிங்டன் டி.சி.',
            CountryCapital::WELLINGTON => 'வெலிங்டன்',
            CountryCapital::WEST_ISLAND => 'மேற்கு தீவு',
            CountryCapital::WILLEMSTAD => 'வில்லெம்ஸ்டாட்',
            CountryCapital::WINDHOEK => 'விந்தோகேக்',
            CountryCapital::YAMOUSSOUKRO => 'யமோசுசுக்குரோ',
            CountryCapital::YAOUNDE => 'யாவுண்டே',
            CountryCapital::YAREN => 'யரென்',
            CountryCapital::YEREVAN => 'யெரெவன்',
            CountryCapital::ZAGREB => 'சாகிரெப்',
        };
    }
}