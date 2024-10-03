<?php

namespace Macmotp\Continents\Support\Continents;

use Macmotp\Continents\Support\AbstractContinent;
use Macmotp\Continents\Support\ContinentCode;
use Macmotp\Continents\Support\ContinentInterface;
use Macmotp\Continents\Support\ContinentName;

/**
 * Africa
 */
final class AFR extends AbstractContinent implements ContinentInterface
{
    public function __construct()
    {
        $this->setName(ContinentName::AFRICA);
        $this->setCode(ContinentCode::AFRICA);
    }
}
