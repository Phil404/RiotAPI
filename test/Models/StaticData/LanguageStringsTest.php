<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use Phil404\RiotAPI\Models\StaticData\LanguageStrings;
use PHPUnit\Framework\TestCase;

class LanguageStringsTest extends TestCase
{
    public function testSetAndGetData()
    {
        $object = new LanguageStrings(["data" => ["foo" => "bar"]]);

        self::assertTrue(is_array($object->getData()));
        self::assertEquals("bar", $object->getData()['foo']);

        $object->setData([123 => "doe"]);

        self::assertEquals("doe", $object->getData()[123]);
    }

    public function testSetAndGetVersion()
    {
        $object = new LanguageStrings(["version" => "foo"]);

        self::assertEquals("foo", $object->getVersion());

        $object->setVersion("bar");

        self::assertEquals("bar", $object->getVersion());
    }

    public function testSetAndGetType()
    {
        $object = new LanguageStrings(["type" => "foo"]);

        self::assertEquals("foo", $object->getType());

        $object->setType("bar");

        self::assertEquals("bar", $object->getType());
    }
}