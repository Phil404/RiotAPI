<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use Phil404\RiotAPI\Models\StaticData\SummonerSpell;
use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\StaticData\SummonerSpellList;

class SummonerSpellListTest extends TestCase
{
    public function testSetAndGetData()
    {
        $object = new SummonerSpellList(
            ["data" => ["foo" => ["costBurn" => "foo"]]]
        );

        self::assertTrue(
            $object->getData()['foo'] instanceof SummonerSpell
        );

        $object->setData(["foo" => new SummonerSpell()]);

        self::assertTrue(
            $object->getData()['foo'] instanceof SummonerSpell
        );
    }

    public function testSetAndGetVersion()
    {
        $object = new SummonerSpellList(["version" => "foo"]);

        self::assertEquals("foo", $object->getVersion());

        $object->setVersion("bar");

        self::assertEquals("bar", $object->getVersion());
    }

    public function testSetAndGetType()
    {
        $object = new SummonerSpellList(["type" => "foo"]);

        self::assertEquals("foo", $object->getType());

        $object->setType("bar");

        self::assertEquals("bar", $object->getType());
    }
}