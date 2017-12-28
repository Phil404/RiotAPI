<?php

namespace Phil404\RiotAPI\Tests;

use Phil404\RiotAPI\LoLStaticDataV3;
use Phil404\RiotAPI\Models\Region;
use PHPUnit\Framework\TestCase;

class LoLStaticDataV3Test extends TestCase
{
    public function testGetVersions()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = LoLStaticDataV3::getVersions(Region::EUW);

            self::assertTrue(is_array($response));
            self::assertTrue(is_string($response[0]));
        }
    }
}