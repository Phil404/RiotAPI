<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use Phil404\RiotAPI\Models\StaticData\LevelTip;
use PHPUnit\Framework\TestCase;

class LevelTipTest extends TestCase
{
    public function testConstructor()
    {
        $object = new LevelTip(
            [
                "effect" => ["foo", "bar"],
                "label" => ["john", "doe"]
            ]
        );

        self::assertTrue(is_array($object->getEffect()));
        self::assertEquals(2, sizeof($object->getEffect()));
        self::assertTrue(is_array($object->getLabel()));
        self::assertEquals(2, sizeof($object->getLabel()));
    }

    public function testSetAndGetEffect()
    {
        $object = new LevelTip();
        $object->setEffect(["foo", "bar"]);

        self::assertTrue(is_array($object->getEffect()));
        self::assertEquals(2, sizeof($object->getEffect()));
        self::assertTrue(is_string($object->getEffect()[0]));

        $object->setEffect(["John", "Doe", "foo", "bar"]);

        self::assertEquals(4, sizeof($object->getEffect()));
    }

    public function testSetAndGetLabel()
    {
        $object = new LevelTip();
        $object->setLabel(["foo", "bar"]);

        self::assertTrue(is_array($object->getLabel()));
        self::assertEquals(2, sizeof($object->getLabel()));
        self::assertTrue(is_string($object->getLabel()[0]));

        $object->setLabel(["John", "Doe", "foo", "bar"]);

        self::assertEquals(4, sizeof($object->getLabel()));
    }
}