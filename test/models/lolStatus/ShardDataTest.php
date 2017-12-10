<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\LoLStatus\ShardData;
use Phil404\RiotAPI\Models\LoLStatus\Service;

class ShardDataTest extends TestCase
{
    public function testShardData()
    {
        $shardData = new ShardData();
        $this->assertTrue(is_object($shardData));
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

        $this->assertEquals("EU West", $shardData->getName());
        $this->assertEquals("euw", $shardData->getRegionTag());
        $this->assertEquals("foo.bar", $shardData->getHostname());
        $this->assertEquals("eu", $shardData->getSlug());
        $this->assertEquals(["foo", "bar"], $shardData->getLocales());
        $this->assertEquals([$service], $shardData->getServices());
    }

    public function testConstructorWithServicesAsArray()
    {
        $shardData = new ShardData(["services" => [["name" => "Foo"]]]);

        $this->assertEquals(1, sizeof($shardData->getServices()));
        $this->assertTrue($shardData->getServices()[0] instanceof Service);

        $service = (object) $shardData->getServices()[0];
        $this->assertEquals("Foo", $service->getName());
    }

    public function testConstructorWithoutServices()
    {
        $shardData = new ShardData(["services" => []]);

        $this->assertEquals(0, sizeof($shardData->getServices()));
    }

    public function testSetAndGetName()
    {
        $shardData = new ShardData();
        $shardData->setName("EU West");

        $this->assertEquals("EU West", $shardData->getName());

        $shardData->setName("NA");

        $this->assertEquals("NA", $shardData->getName());
    }

    public function testSetAndGetRegionTag()
    {
        $shardData = new ShardData();
        $shardData->setRegionTag("eu");

        $this->assertEquals("eu", $shardData->getRegionTag());

        $shardData->setRegionTag("na");

        $this->assertEquals("na", $shardData->getRegionTag());
    }

    public function testSetAndGetHostname()
    {
        $shardData = new ShardData();
        $shardData->setHostname("prod.euw1.lol.riotgames.com");

        $this->assertEquals(
            "prod.euw1.lol.riotgames.com",
            $shardData->getHostname()
        );

        $shardData->setHostname("prod.na.lol.riotgames.com");

        $this->assertEquals(
            "prod.na.lol.riotgames.com",
            $shardData->getHostname()
        );
    }

    public function testSetAndGetSlug()
    {
        $shardData = new ShardData();
        $shardData->setSlug("euw");

        $this->assertEquals("euw", $shardData->getSlug());

        $shardData->setSlug("na");

        $this->assertEquals("na", $shardData->getSlug());
    }

    public function testSetAndGetLocales()
    {
        $shardData = new ShardData();
        $shardData->setLocales(["de_DE", "en_EN"]);

        $response = $shardData->getLocales();
        $this->assertEquals(["de_DE", "en_EN"], $response);
        $this->assertTrue(is_array($response));
        $this->assertTrue(sizeof($response) == 2);

        $shardData->setLocales(["en_EN", "de_DE", "random"]);

        $response = $shardData->getLocales();
        $this->assertEquals(["en_EN", "de_DE", "random"], $response);
        $this->assertTrue(is_array($response));
        $this->assertTrue(sizeof($response) == 3);
    }

    public function testSetAndGetServices()
    {
        $serviceA = new Service();
        $serviceB = new Service();

        $shardData = new ShardData();
        $shardData->setServices([$serviceA]);

        $this->assertEquals([$serviceA], $shardData->getServices());
        $this->assertTrue($shardData->getServices()[0] instanceof Service);

        $shardData->setServices([$serviceA, $serviceB]);

        $this->assertEquals([$serviceA, $serviceB], $shardData->getServices());
        $this->assertTrue($shardData->getServices()[0] instanceof Service);
        $this->assertTrue($shardData->getServices()[1] instanceof Service);
    }
}