<?php

namespace Macmotp\Continents\Support;

use Macmotp\Continents\Exceptions\InvalidContinentCodeException;
use Macmotp\Continents\Support\Continents\AFR;
use Macmotp\Continents\Support\Continents\ANT;
use Macmotp\Continents\Support\Continents\ARC;
use Macmotp\Continents\Support\Continents\ASI;
use Macmotp\Continents\Support\Continents\EUR;
use Macmotp\Continents\Support\Continents\NAM;
use Macmotp\Continents\Support\Continents\OCE;
use Macmotp\Continents\Support\Continents\SAM;
use ValueError;

/**
 * ContinentFactory class
 *
 * Mapping each continent code with related implementation
 */
final class ContinentFactory
{
    /**
     * Map continents codes with related interface
     *
     * @param ContinentCode|string $code
     *
     * @return ContinentInterface
     * @throws InvalidContinentCodeException
     */
    public static function create(ContinentCode|string $code): ContinentInterface
    {
        if (is_string($code)) {
            try {
                $code = ContinentCode::from(strtoupper($code));
            } catch (ValueError $e) {
                return throw new InvalidContinentCodeException($e->getMessage());
            }
        }

        return match ($code) {
            ContinentCode::AFRICA => new AFR(),
            ContinentCode::ANTARCTICA => new ANT(),
            ContinentCode::ARCTIC => new ARC(),
            ContinentCode::ASIA => new ASI(),
            ContinentCode::EUROPE => new EUR(),
            ContinentCode::NORTH_AMERICA => new NAM(),
            ContinentCode::OCEANIA => new OCE(),
            ContinentCode::SOUTH_AMERICA => new SAM(),
            default => throw new InvalidContinentCodeException("Continent not found: $code->value"),
        };
    }
}
