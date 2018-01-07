<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use Phil404\RiotAPI\Models\StaticData\MapDetails;
use Phil404\RiotAPI\Models\StaticData\MapData;
use PHPUnit\Framework\TestCase;

class MapDataTest extends TestCase
{
    public function testSetAndGetData()
    {
        $object = new MapData(["data" => ["foo" => ["mapName" => "bar"]]]);

        self::assertTrue(is_array($object->getData()));
        self::assertTrue($object->getData()['foo'] instanceof MapDetails);

        $object->setData([123 => new MapDetails()]);

        self::assertTrue($object->getData()[123] instanceof MapDetails);
    }

    public function testSetAndGetVersion()
    {
        $object = new MapData(["version" => "foo"]);

        self::assertEquals("foo", $object->getVersion());

        $object->setVersion("bar");

        self::assertEquals("bar", $object->getVersion());
    }

    public function testSetAndGetType()
    {
        $object = new MapData(["type" => "foo"]);

        self::assertEquals("foo", $object->getType());

        $object->setType("bar");

        self::assertEquals("bar", $object->getType());
    }
}