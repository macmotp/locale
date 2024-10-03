<?php

namespace Macmotp\Continents\Support\Continents;

use Macmotp\Continents\Support\AbstractContinent;
use Macmotp\Continents\Support\ContinentCode;
use Macmotp\Continents\Support\ContinentInterface;
use Macmotp\Continents\Support\ContinentName;

/**
 * South America
 */
final class SAM extends AbstractContinent implements ContinentInterface
{
    public function __construct()
    {
        $this->setName(ContinentName::SOUTH_AMERICA);
        $this->setCode(ContinentCode::SOUTH_AMERICA);
    }
}
