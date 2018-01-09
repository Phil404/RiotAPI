<?php

namespace Phil404\RiotAPI\Tests;

use Phil404\RiotAPI\LoLStaticDataV3;
use Phil404\RiotAPI\Models\Region;
use Phil404\RiotAPI\Models\StaticData\Item;
use Phil404\RiotAPI\Models\StaticData\LanguageStrings;
use Phil404\RiotAPI\Models\StaticData\MapData;
use Phil404\RiotAPI\Models\StaticData\ProfileIconData;
use Phil404\RiotAPI\Models\StaticData\Realm;
use Phil404\RiotAPI\Models\StaticData\SummonerSpell;
use Phil404\RiotAPI\Models\StaticData\SummonerSpellList;
use PHPUnit\Framework\TestCase;

class LoLStaticDataV3Test extends TestCase
{
    public function testGetItemById()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = LoLStaticDataV3::getItemById(
                Region::EUW,
                1001,
                ["local" => "en_US"]
            );

            self::assertTrue($response instanceof Item);
            self::assertNotNull($response->getId());
        }
    }

    public function testGetLanguageStrings()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = LoLStaticDataV3::getLanguageStrings(
                Region::EUW,
                ["locale" => "en_US"]
            );

            self::assertTrue($response instanceof LanguageStrings);
        }
    }

    public function testGetLanguages()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = LoLStaticDataV3::getLanguages(Region::EUW);

            self::assertTrue(is_array($response));
        }
    }

    public function testGetMapData()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = LoLStaticDataV3::getMapData(
                Region::EUW,
                ["locale" => "en_US"]
            );

            self::assertTrue($response instanceof MapData);
            self::assertNotNull($response->getVersion());
        }
    }

    public function testGetProfileIcons()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = LoLStaticDataV3::getProfileIcons(
                Region::EUW,
                ["locale" => "en_US"]
            );

            self::assertTrue($response instanceof ProfileIconData);
            self::assertNotNull($response->getVersion());
        }
    }

    public function testGetRealms()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = LoLStaticDataV3::getRealms(Region::EUW);

            self::assertTrue($response instanceof Realm);
            self::assertNotNull($response->getL());
        }
    }

    public function testGetSummonerSpells()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = LoLStaticDataV3::getSummonerSpells(
                Region::EUW,
                ["locale" => "en_US"]
            );

            self::assertTrue($response instanceof SummonerSpellList);
            self::assertNotNull($response->getVersion());
        }
    }

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