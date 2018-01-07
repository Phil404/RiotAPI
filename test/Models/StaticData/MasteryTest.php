<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use Phil404\RiotAPI\Models\StaticData\Image;
use Phil404\RiotAPI\Models\StaticData\Mastery;
use PHPUnit\Framework\TestCase;

class MasteryTest extends TestCase
{
    public function testSetAndGetPrereq()
    {
        $object = new Mastery(["prereq" => "foo"]);

        self::assertEquals("foo", $object->getPrereq());

        $object->setPrereq("bar");

        self::assertEquals("bar", $object->getPrereq());
    }

    public function testSetAndGetMasteryTree()
    {
        $object = new Mastery(["masteryTree" => "foo"]);

        self::assertEquals("foo", $object->getMasteryTree());

        $object->setMasteryTree("bar");

        self::assertEquals("bar", $object->getMasteryTree());
    }

    public function testSetAndGetName()
    {
        $object = new Mastery(["name" => "foo"]);

        self::assertEquals("foo", $object->getName());

        $object->setName("bar");

        self::assertEquals("bar", $object->getName());
    }

    public function testSetAndGetRanks()
    {
        $object = new Mastery(["ranks" => 1]);

        self::assertEquals(1, $object->getRanks());

        $object->setRanks(99);

        self::assertEquals(99, $object->getRanks());
    }

    public function testSetAndGetImage()
    {
        $object = new Mastery(["image" => ["full" => "foo"]]);

        self::assertTrue($object->getImage() instanceof Image);
        self::assertEquals("foo", $object->getImage()->getFull());

        $object->setImage(new Image);

        self::assertTrue($object->getImage() instanceof Image);
    }

    public function testSetAndGetSanitizedDescription()
    {
        $object = new Mastery(["sanitizedDescription" => ["foo" , "bar"]]);

        self::assertEquals(["foo", "bar"], $object->getSanitizedDescription());

        $object->setSanitizedDescription(["john"]);

        self::assertEquals(["john"], $object->getSanitizedDescription());
    }

    public function testSetAndGetId()
    {
        $object = new Mastery(["id" => 1]);

        self::assertEquals(1, $object->getId());

        $object->setId(99);

        self::assertEquals(99, $object->getId());
    }

    public function testSetAndGetDescription()
    {
        $object = new Mastery(["description" => ["foo", "bar"]]);

        self::assertEquals(["foo", "bar"], $object->getDescription());

        $object->setDescription(["john"]);

        self::assertEquals(["john"], $object->getDescription());
    }
}