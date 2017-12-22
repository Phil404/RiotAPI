<?php

namespace Phil404\RiotAPI\Tests;

use Phil404\RiotAPI\Models\Region;
use Phil404\RiotAPI\ThirdPartyCodeV3;
use PHPUnit\Framework\TestCase;

class ThirdPartyCodeV3Test extends TestCase
{
    public function testGetBySummonerId()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = ThirdPartyCodeV3::getBySummonerId(
                Region::EUW,
                25275660
            );

            self::assertTrue(is_string($response));
        }
    }
}