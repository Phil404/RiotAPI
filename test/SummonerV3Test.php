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
            $this->markTestSkipped("ApiKey not found!");
        } else {
            $response = SummonerV3::getSummonerById(Region::EUW, $summonerId);

            $this->assertTrue($response instanceof Summoner);
            $this->assertEquals("Phil404", $response->getName());
        }
    }

    public function testGetSummonerByAccountId()
    {
        $accountId = 29753022;

        if (!file_exists("apikey.txt")) {
            $this->markTestSkipped("ApiKey not found!");
        } else {
            $response = SummonerV3::getSummonerByAccountId(
                Region::EUW,
                $accountId
            );

            $this->assertTrue($response instanceof Summoner);
            $this->assertEquals("Phil404", $response->getName());
        }
    }
}