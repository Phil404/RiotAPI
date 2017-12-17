<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\Region;
use Phil404\RiotAPI\SummonerV3;
use Phil404\RiotAPI\Models\Summoner\Summoner;

class SummonerV3Test extends TestCase
{
    public function testGetSummonerById()
    {
        $summonerId = 25275660;

        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = SummonerV3::getSummonerById(Region::EUW, $summonerId);

            self::assertTrue($response instanceof Summoner);
            self::assertEquals("Phil404", $response->getName());
        }
    }

    public function testGetSummonerByAccountId()
    {
        $accountId = 29753022;

        if (!file_exists("apikey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = SummonerV3::getSummonerByAccountId(
                Region::EUW,
                $accountId
            );

            self::assertTrue($response instanceof Summoner);
            self::assertEquals("Phil404", $response->getName());
        }
    }

    public function testGetSummonerByName()
    {
        if (!file_exists("apiKey.txt")) {
           self::markTestSkipped("ApiKey not found!");
        } else {
            $response = SummonerV3::getSummonerByName(Region::EUW, "Phil404");

            self::assertTrue($response instanceof Summoner);
            self::assertEquals("Phil404", $response->getName());
        }
    }
}