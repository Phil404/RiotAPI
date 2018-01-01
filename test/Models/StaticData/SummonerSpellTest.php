<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use Phil404\RiotAPI\Models\StaticData\Image;
use Phil404\RiotAPI\Models\StaticData\SpellVars;
use Phil404\RiotAPI\Models\StaticData\SummonerSpell;
use PHPUnit\Framework\TestCase;

class SummonerSpellTest extends TestCase
{
    public function testSetAndGetVars()
    {
        $object = new SummonerSpell();
        $object->setVars([new SpellVars()]);

        self::assertTrue(is_array($object->getVars()));
        self::assertEquals(1, sizeof($object->getVars()));
        self::assertTrue($object->getVars()[0] instanceof SpellVars);

        $object->setVars([["ranksWith" => "foo"], new SpellVars()]);

        self::assertEquals(2, sizeof($object->getVars()));
        self::assertTrue($object->getVars()[0] instanceof SpellVars);
        self::assertEquals("foo", $object->getVars()[0]->getRanksWith());
    }

    public function testSetAndGetImage()
    {
        $object = new SummonerSpell();
        $object->setImage(new Image);

        self::assertTrue($object->getImage() instanceof Image);

        $object->setImage(["full" => "foo"]);

        self::assertTrue($object->getImage() instanceof Image);
    }

    public function testSetAndGetCostBurn()
    {
        $object = new SummonerSpell();
        $object->setCostBurn("foo");

        self::assertEquals("foo", $object->getCostBurn());

        $object->setCostBurn("bar");

        self::assertEquals("bar", $object->getCostBurn());
    }

    public function testSetAndGetCooldown()
    {
        $object = new SummonerSpell();
        $object->setCooldown([1.23]);

        self::assertEquals([1.23], $object->getCooldown());

        $object->setCooldown([4.56, 7.89]);

        self::assertEquals(2, sizeof($object->getCooldown()));
    }

    public function testSetAndGetEffectBurn()
    {
        $object = new SummonerSpell();
        $object->setEffectBurn(["foo"]);

        self::assertEquals(["foo"], $object->getEffectBurn());

        $object->setEffectBurn(["bar", "john"]);

        self::assertEquals(["bar", "john"], $object->getEffectBurn());
    }

    public function testSetAndGetId()
    {
        $object = new SummonerSpell();
        $object->setId(1);

        self::assertEquals(1, $object->getId());

        $object->setId(2);

        self::assertEquals(2, $object->getId());
    }

    public function testSetAndGetCooldownBurn()
    {
        $object = new SummonerSpell();
        $object->setCooldownBurn("foo");

        self::assertEquals("foo", $object->getCooldownBurn());

        $object->setCooldownBurn("bar");

        self::assertEquals("bar", $object->getCooldownBurn());
    }

    public function testSetAndGetTooltip()
    {
        $object = new SummonerSpell();
        $object->setTooltip("foo");

        self::assertEquals("foo", $object->getTooltip());

        $object->setTooltip("bar");

        self::assertEquals("bar", $object->getTooltip());
    }

    public function testSetAndGetMaxrank()
    {
        $object = new SummonerSpell();
        $object->setMaxrank(1);

        self::assertEquals(1, $object->getMaxrank());

        $object->setMaxrank(2);

        self::assertEquals(2, $object->getMaxrank());
    }

    public function testSetAndGetRangeBurn()
    {
        $object = new SummonerSpell();
        $object->setRangeBurn("foo");

        self::assertEquals("foo", $object->getRangeBurn());

        $object->setRangeBurn("bar");

        self::assertEquals("bar", $object->getRangeBurn());
    }

    public function testSetAndGetDescription()
    {
        $object = new SummonerSpell();
        $object->setDescription("foo");

        self::assertEquals("foo", $object->getDescription());

        $object->setDescription("bar");

        self::assertEquals("bar", $object->getDescription());
    }
}