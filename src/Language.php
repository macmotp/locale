<?php

declare(strict_types=1);

namespace Macmotp;

class Language
{
    public const AFAR = 'aa';
    public const ABKHAZIAN = 'ab';
    public const AFRIKAANS = 'af';
    public const AKAN = 'ak';
    public const AMHARIC = 'am';
    public const ARAGONESE = 'an';
    public const ARABIC = 'ar';
    public const ASSAMESE = 'as';
    public const ASU = 'asa';
    public const AZERBAIJANI = 'az';
    public const BELARUSIAN = 'be';
    public const BEMBA = 'bem';
    public const BENA = 'bez';
    public const BULGARIAN = 'bg';
    public const BISLAMA = 'bi';
    public const BISSA = 'bib';
    public const BAMBARA = 'bm';
    public const BENGALI = 'bn';
    public const BOSNIAN = 'bs';
    public const SENA = 'bwg';
    public const CATALAN = 'ca';
    public const CAROLINIAN = 'cal';
    public const CHAMORRO = 'ch';
    public const CHEROKEE = 'chr';
    public const CHIGA = 'cgg';
    public const MONTENEGRIN = 'cnr';
    public const SEYCHELLOIS_CREOLE = 'crs';
    public const CZECH = 'cs';
    public const DANISH = 'da';
    public const GERMAN = 'de';
    public const DHIVEHI = 'dv';
    public const DYULA = 'dyu';
    public const DZONGKHA = 'dz';
    public const EMBU = 'ebu';
    public const EWE = 'ee';
    public const GREEK = 'el';
    public const ENGLISH = 'en';
    public const ESPERANTO = 'eo';
    public const SPANISH = 'es';
    public const ESTONIAN = 'et';
    public const BASQUE = 'eu';
    public const PERSIAN = 'fa';
    public const FULAH = 'ff';
    public const FINNISH = 'fi';
    public const FILIPINO = 'fil';
    public const FAROESE = 'fo';
    public const FRENCH = 'fr';
    public const IRISH = 'ga';
    public const GALITIAN = 'gl';
    public const GUARANI = 'gn';
    public const GUJARATI = 'gu';
    public const GUSII = 'guz';
    public const HAUSA = 'ha';
    public const HAWAIIAN = 'haw';
    public const HEBREW = 'he';
    public const HINDI = 'hi';
    public const CROATIAN = 'hr';
    public const HAITIAN_CREOLE = 'ht';
    public const HUNGARIAN = 'hu';
    public const ARMENIAN = 'hy';
    public const INDONESIAN = 'id';
    public const IGBO = 'ig';
    public const ICELANDIC = 'is';
    public const ITALIAN = 'it';
    public const JAPANESE = 'ja';
    public const GEORGIAN = 'ka';
    public const KABYLE = 'kab';
    public const KALANGA = 'kck';
    public const KABUVERDIANU = 'kea';
    public const KAZAKH = 'kk';
    public const GREENLANDIC = 'kl';
    public const KALENJIN = 'kln';
    public const KHMER = 'km';
    public const KOREAN = 'ko';
    public const KURDISH = 'ku';
    public const CORNISH = 'kw';
    public const KYRGYZ = 'ky';
    public const LUXEMBOURGISH = 'lb';
    public const GANDA = 'lg';
    public const LAO = 'lo';
    public const LITHUANIAN = 'lt';
    public const LATVIAN = 'lv';
    public const MALAGASY = 'mg';
    public const MARSHALLESE = 'mh';
    public const MAORI = 'mi';
    public const MACEDONIAN = 'mk';
    public const MONGOLIAN = 'mn';
    public const MOORÉ = 'mos';
    public const MALAY = 'ms';
    public const BURMESE = 'my';
    public const MALTESE = 'mt';
    public const NAURUAN = 'na';
    public const NORWEGIAN = 'nb';
    public const NDAU = 'ndc';
    public const NEPALI = 'ne';
    public const NIUEAN = 'niu';
    public const NAMBYA = 'nmq';
    public const DUTCH = 'nl';
    public const NDEBELE = 'nr';
    public const SEPEDI = 'nso';
    public const CHEWA = 'ny';
    public const PUNJABI = 'pa';
    public const PAPIAMENTO = 'pap';
    public const PALAUAN = 'pau';
    public const POLISH = 'pl';
    public const DARI = 'prs';
    public const PASHTO = 'ps';
    public const PORTUGUESE = 'pt';
    public const ROMANSCH = 'rm';
    public const RUNDI = 'rn';
    public const ROMANIAN = 'ro';
    public const ROMBO = 'rof';
    public const RUSSIAN = 'ru';
    public const KINYARWANDA = 'rw';
    public const RWA = 'rwk';
    public const SINHALA = 'si';
    public const SLOVAK = 'sk';
    public const SLOVENIAN = 'sl';
    public const SAMOAN = 'sm';
    public const SHONA = 'sn';
    public const SOMALI = 'so';
    public const ALBANIAN = 'sq';
    public const SERBIAN = 'sr';
    public const SWAZI = 'ss';
    public const SESOTHO = 'st';
    public const SWEDISH = 'sv';
    public const SWAHILI = 'sw';
    public const TAMIL = 'ta';
    public const TETUM = 'tet';
    public const TAJIK = 'tg';
    public const THAI = 'th';
    public const TIGRINYA = 'ti';
    public const TIGRE = 'tig';
    public const TURKMEN = 'tk';
    public const TOKELAUAN = 'tkl';
    public const TSWANA = 'tn';
    public const TONGAN = 'to';
    public const TONGA = 'toi';
    public const TURKISH = 'tr';
    public const TSONGA = 'ts';
    public const TUVALUAN = 'tvl';
    public const UKRAINIAN = 'uk';
    public const URDU = 'ur';
    public const UZBEK = 'uz';
    public const VENDA = 've';
    public const VIETNAMESE = 'vi';
    public const XHOSA = 'xh';
    public const CANTONESE = 'yue';
    public const BERBER = 'zgh';
    public const CHINESE = 'zh';
    public const ZULU = 'zu';

    private string $name;
    private string $englishName;
    private string $flag;

    /**
     * @param string $code
     */
    public function __construct(
        private readonly string $code,
    ) {
        $this->name = $this->mapName();
        $this->englishName = $this->mapEnglishName();
        $this->flag = $this->mapFlag();
    }

    /**
     * @param string $code
     * @return Language
     */
    public static function make(string $code): self
    {
        return new self($code);
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
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get English Name
     *
     * @return string
     */
    public function getEnglishName(): string
    {
        return $this->englishName;
    }

    /**
     * Get Flag
     *
     * @return string
     */
    public function getFlag(): string
    {
        return $this->flag;
    }

    /**
     * Map the name of the language
     *
     * @return string
     */
    private function mapName(): string
    {
        return match($this->code) {
            'ar' => 'العربية',
            'de' => 'Deutsche',
            'es' => 'Español',
            'fr' => 'Français',
            'it' => 'Italiano',
            'ja' => '日本語',
            'ko' => '한국인',
            'nl' => 'Nederlands',
            'pt' => 'Portuguese',
            'zh' => '普通话',
            default => 'English',
        };
    }

    /**
     * Map the name of the language in English
     *
     * @return string
     */
    private function mapEnglishName(): string
    {
        return match($this->code) {
            'ar' => 'Arabic',
            'de' => 'German',
            'es' => 'Spanish',
            'fr' => 'French',
            'it' => 'Italian',
            'ja' => 'Japanese',
            'ko' => 'Korean',
            'nl' => 'Dutch',
            'pt' => 'Portuguese',
            'zh' => 'Chinese',
            default => 'English',
        };
    }

    /**
     * Map the flag of the language
     *
     * @return string
     */
    private function mapFlag(): string
    {
        return match($this->code) {
            'ar' => 'sa',
            'de' => 'de',
            'es' => 'es',
            'fr' => 'fr',
            'it' => 'it',
            'ja' => 'jp',
            'ko' => 'kr',
            'nl' => 'nl',
            'pt' => 'pt',
            'zh' => 'cn',
            default => 'gb',
        };
    }
}
