<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use Phil404\RiotAPI\Models\StaticData\ProfileIconDetails;
use Phil404\RiotAPI\Models\StaticData\ProfileIconData;
use PHPUnit\Framework\TestCase;

class ProfileIconDataTest extends TestCase
{
    public function testSetAndGetData()
    {
        $object = new ProfileIconData(["data" => ["foo" => ["id" => 10]]]);

        self::assertTrue(is_array($object->getData()));
        self::assertTrue(
            $object->getData()['foo'] instanceof ProfileIconDetails
        );

        $object->setData(["bar" => new ProfileIconDetails()]);

        self::assertTrue(
            $object->getData()['bar'] instanceof ProfileIconDetails
        );
    }

    public function testSetAndGetVersion()
    {
        $object = new ProfileIconData(["version" => "foo"]);

        self::assertEquals("foo", $object->getVersion());

        $object->setVersion("bar");

        self::assertEquals("bar", $object->getVersion());
    }

    public function testSetAndGetType()
    {
        $object = new ProfileIconData(["type" => "foo"]);

        self::assertEquals("foo", $object->getType());

        $object->setType("bar");

        self::assertEquals("bar", $object->getType());
    }
}