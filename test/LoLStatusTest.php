<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\LoLStatus;
use Phil404\RiotAPI\Models\LoLStatus\ShardData;
use Phil404\RiotAPI\Models\Region;

class LoLStatusTest extends TestCase
{

    public function testGetLoLStatus()
    {
        $response = LolStatus::getStatus(Region::EUW);
        $this->assertTrue(
            $response instanceof ShardData
        );
        $this->assertEquals("EU West", $response->getName());
    }

    public function testTransfromJsonToShardData()
    {
        $shardData = LoLStatus::transformJsonToShardData(
            json_decode(LoLStatusTest::$_rawJson, true)
        );

        $this->assertTrue($shardData instanceof ShardData);
        $this->assertEquals("EU West", $shardData->getName());
        $this->assertEquals(4, sizeof($shardData->getServices()));
    }

    public function testTransformWithEmptyJson()
    {
        $shardData = LoLStatus::transformJsonToShardData([]);

        $this->assertNull($shardData);
    }

    private static $_rawJson = '{
        "name": "EU West",
        "region_tag": "eu",
        "hostname": "prod.euw1.lol.riotgames.com",
        "services": [
            {
                "status": "online",
                "incidents": [
        
                ],
                "name": "Game",
                "slug": "game"
            },
            {
                "status": "online",
                "incidents": [
                
                ],
                "name": "Store",
                "slug": "store"
            },
            {
                "status": "online",
                "incidents": [

                ],
                "name": "Website",
                "slug": "website"
            },
            {
                "status": "online",
                "incidents": [

                ],
                "name": "Client",
                "slug": "client"
            }
        ],
        "slug": "euw",
        "locales": [
            "en_GB",
            "fr_FR",
            "it_IT",
            "es_ES",
            "de_DE"
        ]
    }';
}