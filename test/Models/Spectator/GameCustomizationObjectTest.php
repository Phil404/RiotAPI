<?php

namespace Phil404\RiotAPI\Tests\Models\Spectator;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\Spectator\GameCustomizationObject;

class GameCustomizationObjectTest extends TestCase
{
    public function testConstructor()
    {
        $gameCustomizationObject = new GameCustomizationObject(
            [
                "category" => "foo",
                "content" => "bar"
            ]
        );

        self::assertEquals("foo", $gameCustomizationObject->getCategory());
        self::assertEquals("bar", $gameCustomizationObject->getContent());
    }

    public function testSetAndGetCategory()
    {
        $gameCustomizationObject = new GameCustomizationObject();
        $gameCustomizationObject->setCategory("foo");

        self::assertEquals("foo", $gameCustomizationObject->getCategory());

        $gameCustomizationObject->setCategory("bar");

        self::assertEquals("bar", $gameCustomizationObject->getCategory());
    }

    public function testSetAndGetContent()
    {
        $gameCustomizationObject = new GameCustomizationObject();
        $gameCustomizationObject->setContent("foo");

        self::assertEquals("foo", $gameCustomizationObject->getContent());

        $gameCustomizationObject->setContent("bar");

        self::assertEquals("bar", $gameCustomizationObject->getContent());
    }
}