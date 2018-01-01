<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\StaticData\SpellVars;

class SpellVarsTest extends TestCase
{
    public function testSetAndGetRanksWith()
    {
        $object = new SpellVars(["ranksWith" => "foo"]);

        self::assertEquals("foo", $object->getRanksWith());

        $object->setRanksWith("bar");

        self::assertEquals("bar", $object->getRanksWith());
    }

    public function testSetAndGetDyn()
    {
        $object = new SpellVars(["dyn" => "foo"]);

        self::assertEquals("foo", $object->getDyn());

        $object->setDyn("bar");

        self::assertEquals("bar", $object->getDyn());
    }

    public function testSetAndGetLink()
    {
        $object = new SpellVars(["link" => "foo"]);

        self::assertEquals("foo", $object->getLink());

        $object->setLink("bar");

        self::assertEquals("bar", $object->getLink());
    }

    public function testSetAndGetCoeff()
    {
        $object = new SpellVars(["coeff" => [3.12, 13.37]]);

        self::assertTrue(is_array($object->getCoeff()));
        self::assertEquals(2, sizeof($object->getCoeff()));
        self::assertTrue(is_double($object->getCoeff()[0]));

        $object->setCoeff([1.23]);

        self::assertEquals(1, sizeof($object->getCoeff()));
    }

    public function testSetAndGetKey()
    {
        $object = new SpellVars(["key" => "foo"]);

        self::assertEquals("foo", $object->getKey());

        $object->setKey("bar");

        self::assertEquals("bar", $object->getKey());
    }
}