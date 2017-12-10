<?php

namespace Phil404\RiotAPI\Models;

use ReflectionClass;

abstract class Region
{
    const BR = "BR1";
    const EUNE = "EUN1";
    const EUW = "EUW1";
    const JP = "JP1";
    const KR = "KR";
    const LAN = "LA1";
    const LAS = "LA2";
    const NA = "NA1";
    const OCE = "OC1";
    const TR = "TR1";
    const RU = "RU";
    const PBE = "PBE1";

    public static function getRegionByString(string $region)
    {
        $class = new ReflectionClass(__CLASS__);
        $constants = $class->getConstants();
        $uppercaseRegion = strtoupper($region);

        return array_key_exists($uppercaseRegion, $constants)
            ? $constants[$uppercaseRegion]
            : null;
    }
}