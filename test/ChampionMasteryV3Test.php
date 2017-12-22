<?php

namespace Phil404\RiotAPI\Tests;

use Phil404\RiotAPI\ChampionMasteryV3;
use Phil404\RiotAPI\Models\ChampionMastery\ChampionMastery;
use Phil404\RiotAPI\Models\Region;
use PHPUnit\Framework\TestCase;

class ChampionMasteryV3Test extends TestCase
{
    private $_summonerId = 25275660;

    public function testGetMasteries()
    {
        if (!file_exists("apiKey.txt")) {
          self::markTestSkipped("ApiKey not found!");
        } else {
            $response = ChampionMasteryV3::getMasteries(
                Region::EUW,
                $this->_summonerId
            );
            self::assertTrue(is_array($response));
            self::assertTrue($response[0] instanceof ChampionMastery);
        }
    }

    public function testGetMasteryByChampion()
    {
        $championId = 412;

        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = ChampionMasteryV3::getMasteryByChampion(
                Region::EUW,
                $this->_summonerId,
                $championId
            );
            self::assertTrue($response instanceof ChampionMastery);
            self::assertEquals(7, $response->getChampionLevel());
        }
    }

    public function testGetScore()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = ChampionMasteryV3::getScore(
                Region::EUW,
                $this->_summonerId
            );
            self::assertEquals("177", $response);
        }
    }
}