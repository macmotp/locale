<?php

namespace Macmotp\Locales\Support;

use Macmotp\Locales\Exceptions\InvalidLocaleCodeException;

use Macmotp\Locales\Support\Locales\AR;
use Macmotp\Locales\Support\Locales\DE;
use Macmotp\Locales\Support\Locales\EN;
use Macmotp\Locales\Support\Locales\ES;
use Macmotp\Locales\Support\Locales\FR;
use Macmotp\Locales\Support\Locales\HU;
use Macmotp\Locales\Support\Locales\IT;
use Macmotp\Locales\Support\Locales\JA;
use Macmotp\Locales\Support\Locales\KO;
use Macmotp\Locales\Support\Locales\NL;
use Macmotp\Locales\Support\Locales\PT;
use Macmotp\Locales\Support\Locales\RO;
use Macmotp\Locales\Support\Locales\RU;
use Macmotp\Locales\Support\Locales\ZH;
use ValueError;

/**
 * LocaleFactory class
 *
 * Mapping each locale code with related implementation
 */
final class LocaleFactory
{
    /**
     * Map country codes with related interface
     *
     * @param LocaleCode|string $code
     *
     * @return LocaleInterface
     * @throws InvalidLocaleCodeException
     */
    public static function create(LocaleCode|string $code): LocaleInterface
    {
        if (is_string($code)) {
            try {
                $code = LocaleCode::from(strtoupper($code));
            } catch (ValueError $e) {
                return throw new InvalidLocaleCodeException($e->getMessage());
            }
        }

        return match ($code) {
            LocaleCode::ARABIC => new AR(),
            LocaleCode::CHINESE => new ZH(),
            LocaleCode::DUTCH => new NL(),
            LocaleCode::ENGLISH => new EN(),
            LocaleCode::FRENCH => new FR(),
            LocaleCode::GERMAN => new DE(),
            LocaleCode::HUNGARIAN => new HU(),
            LocaleCode::ITALIAN => new IT(),
            LocaleCode::JAPANESE => new JA(),
            LocaleCode::KOREAN => new KO(),
            LocaleCode::PORTUGUESE => new PT(),
            LocaleCode::ROMANIAN => new RO(),
            LocaleCode::RUSSIAN => new RU(),
            LocaleCode::SPANISH => new ES(),
            default => throw new InvalidLocaleCodeException("Locale not supported: $code->value"),
        };
    }
}
