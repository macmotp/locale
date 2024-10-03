<?php

namespace Macmotp\Continents\Support\Continents;

use Macmotp\Continents\Support\AbstractContinent;
use Macmotp\Continents\Support\ContinentCode;
use Macmotp\Continents\Support\ContinentInterface;
use Macmotp\Continents\Support\ContinentName;

/**
 * Europe
 */
final class EUR extends AbstractContinent implements ContinentInterface
{
    public function __construct()
    {
        $this->setName(ContinentName::EUROPE);
        $this->setCode(ContinentCode::EUROPE);
    }
}
