<?php

namespace Macmotp\Languages\Support;

enum LanguageName: string
{
    case AFAR = 'Afar';
    case ABKHAZIAN = 'Abkhazian';
    case AFRIKAANS = 'Afrikaans';
    case AKAN = 'Akan';
    case AMHARIC = 'Amharic';
    case ARAGONESE = 'Aragonese';
    case ARABIC = 'Arabic';
    case ASSAMESE = 'Assamese';
    case ASU = 'Asu';
    case AZERBAIJANI = 'Azerbaijani';
    case BELARUSIAN = 'Belarusian';
    case BEMBA = 'Bemba';
    case BENA = 'Bena';
    case BULGARIAN = 'Bulgarian';
    case BISLAMA = 'Bislama';
    case BISSA = 'Bissa';
    case BAMBARA = 'Bambara';
    case BENGALI = 'Bengali';
    case BOSNIAN = 'Bosnian';
    case SENA = 'Sena';
    case CATALAN = 'Catalan';
    case CAROLINIAN = 'Carolinian';
    case CHAMORRO = 'Chamorro';
    case CHEROKEE = 'Cherokee';
    case CHIGA = 'Chiga';
    case MONTENEGRIN = 'Montenegrin';
    case SEYCHELLOIS_CREOLE = 'Seychellois Creole';
    case CZECH = 'Czech';
    case DANISH = 'Danish';
    case GERMAN = 'German';
    case DHIVEHI = 'Dhivehi';
    case DYULA = 'Dyula';
    case DZONGKHA = 'Dzongkha';
    case EMBU = 'Embu';
    case EWE = 'Ewe';
    case GREEK = 'Greek';
    case ENGLISH = 'English';
    case ESPERANTO = 'Esperanto';
    case SPANISH = 'Spanish';
    case ESTONIAN = 'Estonian';
    case BASQUE = 'Basque';
    case PERSIAN = 'Persian';
    case FULAH = 'Fulah';
    case FINNISH = 'Finnish';
    case FILIPINO = 'Filipino';
    case FAROESE = 'Faroese';
    case FRENCH = 'French';
    case IRISH = 'Irish';
    case GALITIAN = 'Galitian';
    case GUARANI = 'Guarani';
    case GUJARATI = 'Gujarati';
    case GUSII = 'Gusii';
    case HAUSA = 'Hausa';
    case HAWAIIAN = 'Hawaiian';
    case HEBREW = 'Hebrew';
    case HINDI = 'Hindi';
    case CROATIAN = 'Croatian';
    case HAITIAN_CREOLE = 'Haitian Creole';
    case HUNGARIAN = 'Hungarian';
    case ARMENIAN = 'Armenian';
    case INDONESIAN = 'Indonesian';
    case IGBO = 'Igbo';
    case ICELANDIC = 'Icelandic';
    case ITALIAN = 'Italian';
    case JAPANESE = 'Japanese';
    case GEORGIAN = 'Georgian';
    case KABYLE = 'Kabyle';
    case KALANGA = 'Kalanga';
    case KABUVERDIANU = 'Kabuverdianu';
    case KAZAKH = 'Kazakh';
    case GREENLANDIC = 'Greenlandic';
    case KALENJIN = 'Kalenjin';
    case KHMER = 'Khmer';
    case KOREAN = 'Korean';
    case KURDISH = 'Kurdish';
    case CORNISH = 'Cornish';
    case KYRGYZ = 'Kyrgyz';
    case LUXEMBOURGISH = 'Luxembourgish';
    case GANDA = 'Ganda';
    case LAO = 'Lao';
    case LITHUANIAN = 'Lithuanian';
    case LATVIAN = 'Latvian';
    case MALAGASY = 'Malagasy';
    case MARSHALLESE = 'Marshallese';
    case MAORI = 'Maori';
    case MACEDONIAN = 'Macedonian';
    case MONGOLIAN = 'Mongolian';
    case MOORÉ = 'Mooré';
    case MALAY = 'Malay';
    case BURMESE = 'Burmese';
    case MALTESE = 'Maltese';
    case NAURUAN = 'Nauruan';
    case NORWEGIAN = 'Norwegian';
    case NDAU = 'Ndau';
    case NEPALI = 'Nepali';
    case NIUEAN = 'Niuean';
    case NAMBYA = 'Nambya';
    case DUTCH = 'Dutch';
    case NDEBELE = 'Ndebele';
    case SEPEDI = 'Sepedi';
    case CHEWA = 'Chewa';
    case PUNJABI = 'Punjabi';
    case PAPIAMENTO = 'Papiamento';
    case PALAUAN = 'Palauan';
    case POLISH = 'Polish';
    case DARI = 'Dari';
    case PASHTO = 'Pashto';
    case PORTUGUESE = 'Portuguese';
    case ROMANSCH = 'Romansch';
    case RUNDI = 'Rundi';
    case ROMANIAN = 'Romanian';
    case ROMBO = 'Rombo';
    case RUSSIAN = 'Russian';
    case KINYARWANDA = 'Kinyarwanda';
    case RWA = 'Rwa';
    case SINHALA = 'Sinhala';
    case SLOVAK = 'Slovak';
    case SLOVENIAN = 'Slovenian';
    case SAMOAN = 'Samoan';
    case SHONA = 'Shona';
    case SOMALI = 'Somali';
    case ALBANIAN = 'Albanian';
    case SERBIAN = 'Serbian';
    case SWAZI = 'Swazi';
    case SESOTHO = 'Sesotho';
    case SWEDISH = 'Swedish';
    case SWAHILI = 'Swahili';
    case TAMIL = 'Tamil';
    case TETUM = 'Tetum';
    case TAJIK = 'Tajik';
    case THAI = 'Thai';
    case TIGRINYA = 'Tigrinya';
    case TIGRE = 'Tigre';
    case TURKMEN = 'Turkmen';
    case TOKELAUAN = 'Tokelauan';
    case TSWANA = 'Tswana';
    case TONGAN = 'Tongan';
    case TONGA = 'Tonga';
    case TURKISH = 'Turkish';
    case TSONGA = 'Tsonga';
    case TUVALUAN = 'Tuvaluan';
    case UKRAINIAN = 'Ukrainian';
    case URDU = 'Urdu';
    case UZBEK = 'Uzbek';
    case VENDA = 'Venda';
    case VIETNAMESE = 'Vietnamese';
    case XHOSA = 'Xhosa';
    case CANTONESE = 'Cantonese';
    case BERBER = 'Berber';
    case CHINESE = 'Chinese';
    case ZULU = 'Zulu';

    /**
     * @param string $name
     * @return LanguageName
     */
    public static function fromName(string $name): LanguageName
    {
        return constant("self::$name");
    }
}
