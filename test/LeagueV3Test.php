<?php

namespace Phil404\RiotAPI\Tests;

use Phil404\RiotAPI\Models\League\LeaguePosition;
use Phil404\RiotAPI\Models\Region;
use Phil404\RiotAPI\LeagueV3;
use PHPUnit\Framework\TestCase;

class LeagueV3Test extends TestCase
{
    private $_summonerId = 25275660;

    public function testGetAllLeaguePositionsForSummoner()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = LeagueV3::getAllLeaguePositionsForSummoner(
                Region::EUW,
                $this->_summonerId
            );

            self::assertEquals(2, sizeof($response));
            self::assertTrue($response[0] instanceof LeaguePosition);
        }
    }
}