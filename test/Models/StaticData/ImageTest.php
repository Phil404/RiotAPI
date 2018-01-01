<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\StaticData\Image;

class ImageTest extends TestCase
{
    public function testSetAndGetFull()
    {
        $object = new Image(["full" => "foo"]);

        self::assertEquals("foo", $object->getFull());

        $object->setFull("bar");

        self::assertEquals("bar", $object->getFull());
    }

    public function testSetAndGetGroup()
    {
        $object = new Image(["group" => "foo"]);

        self::assertEquals("foo", $object->getGroup());

        $object->setGroup("bar");

        self::assertEquals("bar", $object->getGroup());
    }

    public function testSetAndGetSprite()
    {
        $object = new Image(["sprite" => "foo"]);

        self::assertEquals("foo", $object->getSprite());

        $object->setSprite("bar");

        self::assertEquals("bar", $object->getSprite());
    }

    public function testSetAndGetHeight()
    {
        $object = new Image(["h" => 1]);

        self::assertEquals(1, $object->getHeight());

        $object->setHeight(2);

        self::assertEquals(2, $object->getHeight());
    }

    public function testSetAndGetWidth()
    {
        $object = new Image(["w" => 1]);

        self::assertEquals(1, $object->getWidth());

        $object->setWidth(2);

        self::assertEquals(2, $object->getWidth());
    }

    public function testSetAndGetY()
    {
        $object = new Image(["y" => 1]);

        self::assertEquals(1, $object->getY());

        $object->setY(2);

        self::assertEquals(2, $object->getY());
    }

    public function testSetAndGetX()
    {
        $object = new Image(["x" => 1]);

        self::assertEquals(1, $object->getX());

        $object->setX(2);

        self::assertEquals(2, $object->getX());
    }
}