<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\LoLStatus\ShardData;
use Phil404\RiotAPI\Models\LoLStatus\Service;

class ShardDataTest extends TestCase
{
    public function testShardData()
    {
        $shardData = new ShardData();
        self::assertTrue(is_object($shardData));
    }

    public function testConstructor()
    {
        $service = new Service();

        $shardData = new ShardData(
            ["name" => "EU West",
            "regionTag" => "euw",
            "hostname" => "foo.bar",
            "slug" => "eu",
            "locales" => ["foo", "bar"],
            "services" => [$service]]
        );

        self::assertEquals("EU West", $shardData->getName());
        self::assertEquals("euw", $shardData->getRegionTag());
        self::assertEquals("foo.bar", $shardData->getHostname());
        self::assertEquals("eu", $shardData->getSlug());
        self::assertEquals(["foo", "bar"], $shardData->getLocales());
        self::assertEquals([$service], $shardData->getServices());
    }

    public function testConstructorWithServicesAsArray()
    {
        $shardData = new ShardData(["services" => [["name" => "Foo"]]]);

        self::assertEquals(1, sizeof($shardData->getServices()));
        self::assertTrue($shardData->getServices()[0] instanceof Service);

        $service = (object) $shardData->getServices()[0];
        self::assertEquals("Foo", $service->getName());
    }

    public function testConstructorWithoutServices()
    {
        $shardData = new ShardData(["services" => []]);

        self::assertEquals(0, sizeof($shardData->getServices()));
    }

    public function testSetAndGetName()
    {
        $shardData = new ShardData();
        $shardData->setName("EU West");

        self::assertEquals("EU West", $shardData->getName());

        $shardData->setName("NA");

        self::assertEquals("NA", $shardData->getName());
    }

    public function testSetAndGetRegionTag()
    {
        $shardData = new ShardData();
        $shardData->setRegionTag("eu");

        self::assertEquals("eu", $shardData->getRegionTag());

        $shardData->setRegionTag("na");

        self::assertEquals("na", $shardData->getRegionTag());
    }

    public function testSetAndGetHostname()
    {
        $shardData = new ShardData();
        $shardData->setHostname("prod.euw1.lol.riotgames.com");

        self::assertEquals(
            "prod.euw1.lol.riotgames.com",
            $shardData->getHostname()
        );

        $shardData->setHostname("prod.na.lol.riotgames.com");

        self::assertEquals(
            "prod.na.lol.riotgames.com",
            $shardData->getHostname()
        );
    }

    public function testSetAndGetSlug()
    {
        $shardData = new ShardData();
        $shardData->setSlug("euw");

        self::assertEquals("euw", $shardData->getSlug());

        $shardData->setSlug("na");

        self::assertEquals("na", $shardData->getSlug());
    }

    public function testSetAndGetLocales()
    {
        $shardData = new ShardData();
        $shardData->setLocales(["de_DE", "en_EN"]);

        $response = $shardData->getLocales();
        self::assertEquals(["de_DE", "en_EN"], $response);
        self::assertTrue(is_array($response));
        self::assertTrue(sizeof($response) == 2);

        $shardData->setLocales(["en_EN", "de_DE", "random"]);

        $response = $shardData->getLocales();
        self::assertEquals(["en_EN", "de_DE", "random"], $response);
        self::assertTrue(is_array($response));
        self::assertTrue(sizeof($response) == 3);
    }

    public function testSetAndGetServices()
    {
        $serviceA = new Service();
        $serviceB = new Service();

        $shardData = new ShardData();
        $shardData->setServices([$serviceA]);

        self::assertEquals([$serviceA], $shardData->getServices());
        self::assertTrue($shardData->getServices()[0] instanceof Service);

        $shardData->setServices([$serviceA, $serviceB]);

        self::assertEquals([$serviceA, $serviceB], $shardData->getServices());
        self::assertTrue($shardData->getServices()[0] instanceof Service);
        self::assertTrue($shardData->getServices()[1] instanceof Service);
    }
}