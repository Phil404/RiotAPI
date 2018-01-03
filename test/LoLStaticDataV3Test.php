<?php

namespace Phil404\RiotAPI\Tests;

use Phil404\RiotAPI\LoLStaticDataV3;
use Phil404\RiotAPI\Models\Region;
use Phil404\RiotAPI\Models\StaticData\SummonerSpell;
use PHPUnit\Framework\TestCase;

class LoLStaticDataV3Test extends TestCase
{
    public function testGetSummonerSpellById()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = LoLStaticDataV3::getSummonerSpellById(
                Region::EUW,
                4,
                ["locale" => "en_US"]
            );

            self::assertTrue($response instanceof SummonerSpell);
            self::assertNotNull($response->getId());
        }
    }

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