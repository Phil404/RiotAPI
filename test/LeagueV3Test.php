<?php

namespace Phil404\RiotAPI\Tests;

use Phil404\RiotAPI\Models\League\LeagueList;
use Phil404\RiotAPI\Models\League\LeaguePosition;
use Phil404\RiotAPI\Models\Region;
use Phil404\RiotAPI\LeagueV3;
use PHPUnit\Framework\TestCase;

class LeagueV3Test extends TestCase
{
    private $_summonerId = 25275660;

    public function testGetChallengerLeague()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("apiKey.txt");
        } else {
            $response = LeagueV3::getChallengerLeague(
                Region::EUW,
                "RANKED_SOLO_5x5"
            );

            self::assertTrue($response instanceof LeagueList);
        }
    }

    public function testGetLeagueById()
    {
        $leagueId = "b364c640-4180-30a3-b27e-2f03e1a1ac7a";

        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = LeagueV3::getLeagueById(
                Region::EUW,
                $leagueId
            );

            self::assertTrue($response instanceof LeagueList);
        }
    }

    public function testGetMasterLeague()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = LeagueV3::getMasterLeague(
                Region::EUW,
                "RANKED_SOLO_5x5"
            );

            self::assertTrue($response instanceof LeagueList);
        }
    }

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