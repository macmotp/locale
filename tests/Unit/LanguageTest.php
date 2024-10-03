<?php

namespace Macmotp\Locale\Tests\Unit;

use Macmotp\Language;
use Macmotp\Languages\Exceptions\InvalidLanguageCodeException;
use Macmotp\Languages\Support\LanguageCode;
use PHPUnit\Framework\TestCase;

/**
 * Class LanguageTest
 *
 * @package Macmotp\Language\Tests\Unit
 * @group Locale
 */
class LanguageTest extends TestCase
{
    /**
     * @dataProvider listConstructors
     *
     * @param LanguageCode $languageCode
     * @param string $outputCode
     * @param string $outputName
     * @return void
     * @throws InvalidLanguageCodeException
     */
    public function testLanguageConstructor(
        LanguageCode $languageCode,
        string       $outputCode,
        string       $outputName,
    ): void {
        $language = new Language($languageCode);

        $this->assertEquals($outputCode, $language->getCode());
        $this->assertEquals($outputName, $language->getName());
    }

    /**
     * @return void
     * @throws InvalidLanguageCodeException
     */
    public function testMakeFunction(): void
    {
        $language = Language::make(LanguageCode::ITALIAN);

        $this->assertEquals('it', $language->getCode());
        $this->assertEquals('Italian', $language->getName());
    }

    /**
     * @return void
     * @throws InvalidLanguageCodeException
     */
    public function testToArrayFunction(): void
    {
        $language = Language::make(LanguageCode::ENGLISH);

        $this->assertEquals([
            'code' => 'en',
            'name' => 'English',
        ], $language->toArray());
    }

    /**
     * @return void
     * @throws InvalidLanguageCodeException
     */
    public function testGetAllLanguagesFunction(): void
    {
        $this->assertCount(151, Language::all());
    }

    /**
     * List of different constructors
     *
     * @return array[]
     */
    public static function listConstructors(): array
    {
        return [
            [LanguageCode::AFAR, 'aa', 'Afar'],
            [LanguageCode::ABKHAZIAN, 'ab', 'Abkhazian'],
            [LanguageCode::AFRIKAANS, 'af', 'Afrikaans'],
            [LanguageCode::AKAN, 'ak', 'Akan'],
            [LanguageCode::AMHARIC, 'am', 'Amharic'],
            [LanguageCode::ARAGONESE, 'an', 'Aragonese'],
            [LanguageCode::ARABIC, 'ar', 'Arabic'],
            [LanguageCode::ASSAMESE, 'as', 'Assamese'],
            [LanguageCode::ASU, 'asa', 'Asu'],
            [LanguageCode::AZERBAIJANI, 'az', 'Azerbaijani'],
            [LanguageCode::BELARUSIAN, 'be', 'Belarusian'],
            [LanguageCode::BEMBA, 'bem', 'Bemba'],
            [LanguageCode::BENA, 'bez', 'Bena'],
            [LanguageCode::BULGARIAN, 'bg', 'Bulgarian'],
            [LanguageCode::BISLAMA, 'bi', 'Bislama'],
            [LanguageCode::BISSA, 'bib', 'Bissa'],
            [LanguageCode::BAMBARA, 'bm', 'Bambara'],
            [LanguageCode::BENGALI, 'bn', 'Bengali'],
            [LanguageCode::BOSNIAN, 'bs', 'Bosnian'],
            [LanguageCode::SENA, 'bwg', 'Sena'],
            [LanguageCode::CATALAN, 'ca', 'Catalan'],
            [LanguageCode::CAROLINIAN, 'cal', 'Carolinian'],
            [LanguageCode::CHAMORRO, 'ch', 'Chamorro'],
            [LanguageCode::CHEROKEE, 'chr', 'Cherokee'],
            [LanguageCode::CHIGA, 'cgg', 'Chiga'],
            [LanguageCode::MONTENEGRIN, 'cnr', 'Montenegrin'],
            [LanguageCode::SEYCHELLOIS_CREOLE, 'crs', 'Seychellois Creole'],
            [LanguageCode::CZECH, 'cs', 'Czech'],
            [LanguageCode::DANISH, 'da', 'Danish'],
            [LanguageCode::GERMAN, 'de', 'German'],
            [LanguageCode::DHIVEHI, 'dv', 'Dhivehi'],
            [LanguageCode::DYULA, 'dyu', 'Dyula'],
            [LanguageCode::DZONGKHA, 'dz', 'Dzongkha'],
            [LanguageCode::EMBU, 'ebu', 'Embu'],
            [LanguageCode::EWE, 'ee', 'Ewe'],
            [LanguageCode::GREEK, 'el', 'Greek'],
            [LanguageCode::ENGLISH, 'en', 'English'],
            [LanguageCode::ESPERANTO, 'eo', 'Esperanto'],
            [LanguageCode::SPANISH, 'es', 'Spanish'],
            [LanguageCode::ESTONIAN, 'et', 'Estonian'],
            [LanguageCode::BASQUE, 'eu', 'Basque'],
            [LanguageCode::PERSIAN, 'fa', 'Persian'],
            [LanguageCode::FULAH, 'ff', 'Fulah'],
            [LanguageCode::FINNISH, 'fi', 'Finnish'],
            [LanguageCode::FILIPINO, 'fil', 'Filipino'],
            [LanguageCode::FAROESE, 'fo', 'Faroese'],
            [LanguageCode::FRENCH, 'fr', 'French'],
            [LanguageCode::IRISH, 'ga', 'Irish'],
            [LanguageCode::GALITIAN, 'gl', 'Galitian'],
            [LanguageCode::GUARANI, 'gn', 'Guarani'],
            [LanguageCode::GUJARATI, 'gu', 'Gujarati'],
            [LanguageCode::GUSII, 'guz', 'Gusii'],
            [LanguageCode::HAUSA, 'ha', 'Hausa'],
            [LanguageCode::HAWAIIAN, 'haw', 'Hawaiian'],
            [LanguageCode::HEBREW, 'he', 'Hebrew'],
            [LanguageCode::HINDI, 'hi', 'Hindi'],
            [LanguageCode::CROATIAN, 'hr', 'Croatian'],
            [LanguageCode::HAITIAN_CREOLE, 'ht', 'Haitian Creole'],
            [LanguageCode::HUNGARIAN, 'hu', 'Hungarian'],
            [LanguageCode::ARMENIAN, 'hy', 'Armenian'],
            [LanguageCode::INDONESIAN, 'id', 'Indonesian'],
            [LanguageCode::IGBO, 'ig', 'Igbo'],
            [LanguageCode::ICELANDIC, 'is', 'Icelandic'],
            [LanguageCode::ITALIAN, 'it', 'Italian'],
            [LanguageCode::JAPANESE, 'ja', 'Japanese'],
            [LanguageCode::GEORGIAN, 'ka', 'Georgian'],
            [LanguageCode::KABYLE, 'kab', 'Kabyle'],
            [LanguageCode::KALANGA, 'kck', 'Kalanga'],
            [LanguageCode::KABUVERDIANU, 'kea', 'Kabuverdianu'],
            [LanguageCode::KAZAKH, 'kk', 'Kazakh'],
            [LanguageCode::GREENLANDIC, 'kl', 'Greenlandic'],
            [LanguageCode::KALENJIN, 'kln', 'Kalenjin'],
            [LanguageCode::KHMER, 'km', 'Khmer'],
            [LanguageCode::KOREAN, 'ko', 'Korean'],
            [LanguageCode::KURDISH, 'ku', 'Kurdish'],
            [LanguageCode::CORNISH, 'kw', 'Cornish'],
            [LanguageCode::KYRGYZ, 'ky', 'Kyrgyz'],
            [LanguageCode::LUXEMBOURGISH, 'lb', 'Luxembourgish'],
            [LanguageCode::GANDA, 'lg', 'Ganda'],
            [LanguageCode::LAO, 'lo', 'Lao'],
            [LanguageCode::LITHUANIAN, 'lt', 'Lithuanian'],
            [LanguageCode::LATVIAN, 'lv', 'Latvian'],
            [LanguageCode::MALAGASY, 'mg', 'Malagasy'],
            [LanguageCode::MARSHALLESE, 'mh', 'Marshallese'],
            [LanguageCode::MAORI, 'mi', 'Maori'],
            [LanguageCode::MACEDONIAN, 'mk', 'Macedonian'],
            [LanguageCode::MONGOLIAN, 'mn', 'Mongolian'],
            [LanguageCode::MOORÉ, 'mos', 'Mooré'],
            [LanguageCode::MALAY, 'ms', 'Malay'],
            [LanguageCode::BURMESE, 'my', 'Burmese'],
            [LanguageCode::MALTESE, 'mt', 'Maltese'],
            [LanguageCode::NAURUAN, 'na', 'Nauruan'],
            [LanguageCode::NORWEGIAN, 'nb', 'Norwegian'],
            [LanguageCode::NDAU, 'ndc', 'Ndau'],
            [LanguageCode::NEPALI, 'ne', 'Nepali'],
            [LanguageCode::NIUEAN, 'niu', 'Niuean'],
            [LanguageCode::NAMBYA, 'nmq', 'Nambya'],
            [LanguageCode::DUTCH, 'nl', 'Dutch'],
            [LanguageCode::NDEBELE, 'nr', 'Ndebele'],
            [LanguageCode::SEPEDI, 'nso', 'Sepedi'],
            [LanguageCode::CHEWA, 'ny', 'Chewa'],
            [LanguageCode::PUNJABI, 'pa', 'Punjabi'],
            [LanguageCode::PAPIAMENTO, 'pap', 'Papiamento'],
            [LanguageCode::PALAUAN, 'pau', 'Palauan'],
            [LanguageCode::POLISH, 'pl', 'Polish'],
            [LanguageCode::DARI, 'prs', 'Dari'],
            [LanguageCode::PASHTO, 'ps', 'Pashto'],
            [LanguageCode::PORTUGUESE, 'pt', 'Portuguese'],
            [LanguageCode::ROMANSCH, 'rm', 'Romansch'],
            [LanguageCode::RUNDI, 'rn', 'Rundi'],
            [LanguageCode::ROMANIAN, 'ro', 'Romanian'],
            [LanguageCode::ROMBO, 'rof', 'Rombo'],
            [LanguageCode::RUSSIAN, 'ru', 'Russian'],
            [LanguageCode::KINYARWANDA, 'rw', 'Kinyarwanda'],
            [LanguageCode::RWA, 'rwk', 'Rwa'],
            [LanguageCode::SINHALA, 'si', 'Sinhala'],
            [LanguageCode::SLOVAK, 'sk', 'Slovak'],
            [LanguageCode::SLOVENIAN, 'sl', 'Slovenian'],
            [LanguageCode::SAMOAN, 'sm', 'Samoan'],
            [LanguageCode::SHONA, 'sn', 'Shona'],
            [LanguageCode::SOMALI, 'so', 'Somali'],
            [LanguageCode::ALBANIAN, 'sq', 'Albanian'],
            [LanguageCode::SERBIAN, 'sr', 'Serbian'],
            [LanguageCode::SWAZI, 'ss', 'Swazi'],
            [LanguageCode::SESOTHO, 'st', 'Sesotho'],
            [LanguageCode::SWEDISH, 'sv', 'Swedish'],
            [LanguageCode::SWAHILI, 'sw', 'Swahili'],
            [LanguageCode::TAMIL, 'ta', 'Tamil'],
            [LanguageCode::TETUM, 'tet', 'Tetum'],
            [LanguageCode::TAJIK, 'tg', 'Tajik'],
            [LanguageCode::THAI, 'th', 'Thai'],
            [LanguageCode::TIGRINYA, 'ti', 'Tigrinya'],
            [LanguageCode::TIGRE, 'tig', 'Tigre'],
            [LanguageCode::TURKMEN, 'tk', 'Turkmen'],
            [LanguageCode::TOKELAUAN, 'tkl', 'Tokelauan'],
            [LanguageCode::TSWANA, 'tn', 'Tswana'],
            [LanguageCode::TONGAN, 'to', 'Tongan'],
            [LanguageCode::TONGA, 'toi', 'Tonga'],
            [LanguageCode::TURKISH, 'tr', 'Turkish'],
            [LanguageCode::TSONGA, 'ts', 'Tsonga'],
            [LanguageCode::TUVALUAN, 'tvl', 'Tuvaluan'],
            [LanguageCode::UKRAINIAN, 'uk', 'Ukrainian'],
            [LanguageCode::URDU, 'ur', 'Urdu'],
            [LanguageCode::UZBEK, 'uz', 'Uzbek'],
            [LanguageCode::VENDA, 've', 'Venda'],
            [LanguageCode::VIETNAMESE, 'vi', 'Vietnamese'],
            [LanguageCode::XHOSA, 'xh', 'Xhosa'],
            [LanguageCode::CANTONESE, 'yue', 'Cantonese'],
            [LanguageCode::BERBER, 'zgh', 'Berber'],
            [LanguageCode::CHINESE, 'zh', 'Chinese'],
            [LanguageCode::ZULU, 'zu', 'Zulu'],
        ];
    }
}
