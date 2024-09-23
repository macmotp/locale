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
            Language::ITALIAN => new it(),
            default => new en(),
        };

        return $translation->get($key);
    }
}
