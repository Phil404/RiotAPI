<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\StaticData\Image;

class ImageTest extends TestCase
{
    public function testConstructor()
    {
        $object = new Image(
            [
                "full" => "foo",
                "group" => "bar",
                "sprite" => "foobar",
                "h" => 1,
                "w" => 2,
                "y" => 3,
                "x" => 4
            ]
        );

        self::assertEquals("foo", $object->getFull());
        self::assertEquals("bar", $object->getGroup());
        self::assertEquals("foobar", $object->getSprite());
        self::assertEquals(1, $object->getHeight());
        self::assertEquals(2, $object->getWidth());
        self::assertEquals(3, $object->getY());
        self::assertEquals(4, $object->getX());
    }

    public function testSetAndGetFull()
    {
        $object = new Image();
        $object->setFull("foo");

        self::assertEquals("foo", $object->getFull());

        $object->setFull("bar");

        self::assertEquals("bar", $object->getFull());
    }

    public function testSetAndGetGroup()
    {
        $object = new Image();
        $object->setGroup("foo");

        self::assertEquals("foo", $object->getGroup());

        $object->setGroup("bar");

        self::assertEquals("bar", $object->getGroup());
    }

    public function testSetAndGetSprite()
    {
        $object = new Image();
        $object->setSprite("foo");

        self::assertEquals("foo", $object->getSprite());

        $object->setSprite("bar");

        self::assertEquals("bar", $object->getSprite());
    }

    public function testSetAndGetHeight()
    {
        $object = new Image();
        $object->setHeight(1);

        self::assertEquals(1, $object->getHeight());

        $object->setHeight(2);

        self::assertEquals(2, $object->getHeight());
    }

    public function testSetAndGetWidth()
    {
        $object = new Image();
        $object->setWidth(1);

        self::assertEquals(1, $object->getWidth());

        $object->setWidth(2);

        self::assertEquals(2, $object->getWidth());
    }

    public function testSetAndGetY()
    {
        $object = new Image();
        $object->setY(1);

        self::assertEquals(1, $object->getY());

        $object->setY(2);

        self::assertEquals(2, $object->getY());
    }

    public function testSetAndGetX()
    {
        $object = new Image();
        $object->setX(1);

        self::assertEquals(1, $object->getX());

        $object->setX(2);

        self::assertEquals(2, $object->getX());
    }
}