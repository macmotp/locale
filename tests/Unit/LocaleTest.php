<?php

namespace Macmotp\Locale\Tests\Unit;

use Macmotp\Locale;
use Macmotp\Locales\Exceptions\InvalidLocaleCodeException;
use Macmotp\Locales\Support\LocaleCode;
use PHPUnit\Framework\TestCase;

/**
 * Class LocaleTest
 *
 * @package Macmotp\Locale\Tests\Unit
 * @group Locale
 */
class LocaleTest extends TestCase
{
    /**
     * @dataProvider listConstructors
     *
     * @param LocaleCode $localeCode
     * @param string $outputCode
     * @param string $outputName
     * @param string $outputEnglishName
     * @param string $outputFlag
     * @return void
     * @throws InvalidLocaleCodeException
     */
    public function testLocaleConstructor(
        LocaleCode $localeCode,
        string     $outputCode,
        string     $outputName,
        string     $outputEnglishName,
        string     $outputFlag,
    ): void {
        $locale = new Locale($localeCode);

        $this->assertEquals($outputCode, $locale->getCode());
        $this->assertEquals($outputName, $locale->getName());
        $this->assertEquals($outputEnglishName, $locale->getEnglishName());
        $this->assertEquals($outputFlag, $locale->getFlag());
    }

    /**
     * @return void
     * @throws InvalidLocaleCodeException
     */
    public function testMakeFunction(): void
    {
        $locale = Locale::make(LocaleCode::ITALIAN);

        $this->assertEquals('it', $locale->getCode());
        $this->assertEquals('Italiano', $locale->getName());
        $this->assertEquals('Italian', $locale->getEnglishName());
        $this->assertEquals('it', $locale->getFlag());
    }

    /**
     * @return void
     * @throws InvalidLocaleCodeException
     */
    public function testToArrayFunction(): void
    {
        $locale = Locale::make(LocaleCode::ENGLISH);

        $this->assertEquals([
            'code' => 'en',
            'english_name' => 'English',
            'flag' => 'gb',
            'name' => 'English',
        ], $locale->toArray());
    }

    /**
     * @return void
     * @throws InvalidLocaleCodeException
     */
    public function testGetAllLocalesFunction(): void
    {
        $this->assertCount(14, Locale::all());
    }

    /**
     * List of different constructors
     *
     * @return array[]
     */
    public static function listConstructors(): array
    {
        return [
            [LocaleCode::ARABIC, 'ar', 'العربية', 'Arabic', 'sa'],
            [LocaleCode::CHINESE, 'zh', '普通话', 'Chinese', 'cn'],
            [LocaleCode::DUTCH, 'nl', 'Nederlands', 'Dutch', 'nl'],
            [LocaleCode::ENGLISH, 'en', 'English', 'English', 'gb'],
            [LocaleCode::FRENCH, 'fr', 'Français', 'French', 'fr'],
            [LocaleCode::GERMAN, 'de', 'Deutsche', 'German', 'de'],
            [LocaleCode::HUNGARIAN, 'hu', 'Magyar', 'Hungarian', 'hu'],
            [LocaleCode::ITALIAN, 'it', 'Italiano', 'Italian', 'it'],
            [LocaleCode::JAPANESE, 'ja', '日本語', 'Japanese', 'jp'],
            [LocaleCode::KOREAN, 'ko', '한국인', 'Korean', 'kr'],
            [LocaleCode::PORTUGUESE, 'pt', 'Portuguese', 'Portuguese', 'pt'],
            [LocaleCode::ROMANIAN, 'ro', 'Romana', 'Romanian', 'ro'],
            [LocaleCode::RUSSIAN, 'ru', 'Русский', 'Russian', 'ru'],
            [LocaleCode::SPANISH, 'es', 'Español', 'Spanish', 'es'],
        ];
    }
}
