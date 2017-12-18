<?php

namespace Phil404\RiotAPI\Tests;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\LoLStatusV3;
use Phil404\RiotAPI\Models\LoLStatus\ShardData;
use Phil404\RiotAPI\Models\Region;

class LoLStatusV3Test extends TestCase
{

    public function testGetLoLStatus()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = LoLStatusV3::getStatus(Region::EUW);
            self::assertTrue(
                $response instanceof ShardData
            );
            self::assertEquals("EU West", $response->getName());
        }
    }

    public function testTransfromJsonToShardData()
    {
        $lolStatus = new LoLStatusV3();
        $shardData = Helper::invokePrivateMethod(
            $lolStatus,
            'transformJsonToShardData',
            [json_decode(LoLStatusV3Test::$_rawJson, true)]
        );

        self::assertTrue($shardData instanceof ShardData);
        self::assertEquals("EU West", $shardData->getName());
        self::assertEquals(4, sizeof($shardData->getServices()));
    }

    public function testTransformWithEmptyJson()
    {
        $lolStatus = new LoLStatusV3();
        $shardData = Helper::invokePrivateMethod(
            $lolStatus,
            'transformJsonToShardData',
            [[]]
        );
        self::assertNull($shardData);
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