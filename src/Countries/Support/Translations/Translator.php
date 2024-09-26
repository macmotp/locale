<?php

namespace Macmotp\Countries\Support\Translations;

use Macmotp\Language;

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
            Language::CHINESE => new zh(),
            Language::DUTCH => new nl(),
            Language::GERMAN => new de(),
            Language::FRENCH => new fr(),
            Language::ITALIAN => new it(),
            Language::JAPANESE => new ja(),
            Language::KOREAN => new ko(),
            Language::PORTUGUESE => new pt(),
            Language::ROMANIAN => new ro(),
            Language::SPANISH => new es(),
            default => new en(),
        };

        return $translation->get($key);
    }
}
