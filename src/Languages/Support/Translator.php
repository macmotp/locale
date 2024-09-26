<?php

namespace Macmotp\Languages\Support;

use Macmotp\Language;
use Macmotp\Languages\Translations\ar;
use Macmotp\Languages\Translations\de;
use Macmotp\Languages\Translations\en;
use Macmotp\Languages\Translations\es;
use Macmotp\Languages\Translations\fr;
use Macmotp\Languages\Translations\it;
use Macmotp\Languages\Translations\jp;
use Macmotp\Languages\Translations\ko;
use Macmotp\Languages\Translations\nl;
use Macmotp\Languages\Translations\pt;
use Macmotp\Languages\Translations\zh;

/**
 * Translator class
 */
class Translator
{
    /**
     * Translate keys by locale
     *
     * @param string $key
     * @param string $locale
     * @return string
     */
    public static function translate(string $key, string $locale): string
    {
        $translation = match($locale) {
            Language::ARABIC => new ar(),
            Language::GERMAN => new de(),
            Language::SPANISH => new es(),
            Language::FRENCH => new fr(),
            Language::ITALIAN => new it(),
            Language::JAPANESE => new jp(),
            Language::KOREAN => new ko(),
            Language::DUTCH => new nl(),
            Language::PORTUGUESE => new pt(),
            Language::CHINESE => new zh(),
            default => new en(),
        };

        return $translation->get($key);
    }
}
