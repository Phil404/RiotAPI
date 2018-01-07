<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use Phil404\RiotAPI\Models\StaticData\Image;
use Phil404\RiotAPI\Models\StaticData\MapDetails;
use PHPUnit\Framework\TestCase;

class MapDetailsTest extends TestCase
{
    public function testSetAndGetMapName()
    {
        $object = new MapDetails(["mapName" => "foo"]);

        self::assertEquals("foo", $object->getMapName());

        $object->setMapName("bar");

        self::assertEquals("bar", $object->getMapName());
    }

    public function testSetAndGetImage()
    {
        $object = new MapDetails(["image" => ["full" => "foo"]]);

        self::assertTrue($object->getImage() instanceof Image);
        self::assertEquals("foo", $object->getImage()->getFull());

        $object->setImage(new Image());

        self::assertTrue($object->getImage() instanceof Image);
    }

    public function testSetAndGetMapId()
    {
        $object = new MapDetails(["mapId" => 1]);

        self::assertEquals(1, $object->getMapId());

        $object->setMapId(99);

        self::assertEquals(99, $object->getMapId());
    }

    public function testSetAndGetUnpurchasableItemList()
    {
        $object = new MapDetails(["unpurchasableItemList" => [1, 99]]);

        self::assertEquals([1, 99], $object->getUnpurchasableItemList());

        $object->setUnpurchasableItemList([100]);

        self::assertEquals([100], $object->getUnpurchasableItemList());
    }
}