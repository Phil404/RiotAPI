<?php

namespace Phil404\RiotAPI\Tests;

use Phil404\RiotAPI\ChampionMasteryV3;
use Phil404\RiotAPI\Models\Region;
use PHPUnit\Framework\TestCase;

class ChampionMasteryV3Test extends TestCase
{
    public function testGetScore()
    {
        $summonerId = 25275660;

        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = ChampionMasteryV3::getScore(Region::EUW, $summonerId);
            self::assertEquals("177", $response);
        }
    }
}