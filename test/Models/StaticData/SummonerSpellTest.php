<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use Phil404\RiotAPI\Models\StaticData\Image;
use Phil404\RiotAPI\Models\StaticData\LevelTip;
use Phil404\RiotAPI\Models\StaticData\SpellVars;
use Phil404\RiotAPI\Models\StaticData\SummonerSpell;
use PHPUnit\Framework\TestCase;

class SummonerSpellTest extends TestCase
{
    public function testSetAndGetVars()
    {
        $object = new SummonerSpell(["vars" => [new SpellVars()]]);

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
        $object = new SummonerSpell(["image" => new Image()]);

        self::assertTrue($object->getImage() instanceof Image);

        $object->setImage(["full" => "foo"]);

        self::assertTrue($object->getImage() instanceof Image);
    }

    public function testSetAndGetCostBurn()
    {
        $object = new SummonerSpell(["costBurn" => "foo"]);

        self::assertEquals("foo", $object->getCostBurn());

        $object->setCostBurn("bar");

        self::assertEquals("bar", $object->getCostBurn());
    }

    public function testSetAndGetCooldown()
    {
        $object = new SummonerSpell(["cooldown" => [1.23]]);

        self::assertEquals([1.23], $object->getCooldown());

        $object->setCooldown([4.56]);

        self::assertEquals([4.56], $object->getCooldown());
    }

    public function testSetAndGetEffectBurn()
    {
        $object = new SummonerSpell(["effectBurn" => ["foo"]]);

        self::assertEquals(["foo"], $object->getEffectBurn());

        $object->setEffectBurn(["bar"]);

        self::assertEquals(["bar"], $object->getEffectBurn());
    }

    public function testSetAndGetId()
    {
        $object = new SummonerSpell(["id" => 1]);

        self::assertEquals(1, $object->getId());

        $object->setId(2);

        self::assertEquals(2, $object->getId());
    }

    public function testSetAndGetCooldownBurn()
    {
        $object = new SummonerSpell(["cooldownBurn" => "foo"]);

        self::assertEquals("foo", $object->getCooldownBurn());

        $object->setCooldownBurn("bar");

        self::assertEquals("bar", $object->getCooldownBurn());
    }

    public function testSetAndGetTooltip()
    {
        $object = new SummonerSpell(["tooltip" => "foo"]);

        self::assertEquals("foo", $object->getTooltip());

        $object->setTooltip("bar");

        self::assertEquals("bar", $object->getTooltip());
    }

    public function testSetAndGetMaxrank()
    {
        $object = new SummonerSpell(["maxrank" => 1]);

        self::assertEquals(1, $object->getMaxrank());

        $object->setMaxrank(2);

        self::assertEquals(2, $object->getMaxrank());
    }

    public function testSetAndGetRangeBurn()
    {
        $object = new SummonerSpell(["rangeBurn" => "foo"]);

        self::assertEquals("foo", $object->getRangeBurn());

        $object->setRangeBurn("bar");

        self::assertEquals("bar", $object->getRangeBurn());
    }

    public function testSetAndGetDescription()
    {
        $object = new SummonerSpell(["description" => "foo"]);

        self::assertEquals("foo", $object->getDescription());

        $object->setDescription("bar");

        self::assertEquals("bar", $object->getDescription());
    }

    public function testSetAndGetEffect()
    {
        $object = new SummonerSpell(["effect" => [[1.23]]]);

        self::assertEquals([[1.23]], $object->getEffect());

        $object->setEffect([[4.56], [7.89]]);

        self::assertEquals([[4.56], [7.89]], $object->getEffect());
    }

    public function testSetAndGetKey()
    {
        $object = new SummonerSpell(["key" => "foo"]);

        self::assertEquals("foo", $object->getKey());

        $object->setKey("bar");

        self::assertEquals("bar", $object->getKey());
    }

    public function testSetAndGetLeveltip()
    {
        $object = new SummonerSpell(["leveltip" => new LevelTip()]);

        self::assertTrue($object->getLeveltip() instanceof LevelTip);

        $object->setLeveltip(["effect" => ["foo", "bar"]]);

        self::assertTrue($object->getLeveltip() instanceof LevelTip);
        self::assertEquals(["foo", "bar"], $object->getLeveltip()->getEffect());
    }

    public function testSetAndGetModes()
    {
        $object = new SummonerSpell(["modes" => ["foo"]]);

        self::assertEquals(["foo"], $object->getModes());

        $object->setModes(["bar"]);

        self::assertEquals(["bar"], $object->getModes());
    }

    public function testSetAndGetResource()
    {
        $object = new SummonerSpell(["resource" => "foo"]);

        self::assertEquals("foo", $object->getResource());

        $object->setResource("bar");

        self::assertEquals("bar", $object->getResource());
    }

    public function testSetAndGetName()
    {
        $object = new SummonerSpell(["name" => "foo"]);

        self::assertEquals("foo", $object->getName());

        $object->setName("bar");

        self::assertEquals("bar", $object->getName());
    }

    public function testSetAndGetCostType()
    {
        $object = new SummonerSpell(["costType" => "foo"]);

        self::assertEquals("foo", $object->getCostType());

        $object->setCostType("bar");

        self::assertEquals("bar", $object->getCostType());
    }

    public function testSetAndGetSanitizedDescription()
    {
        $object = new SummonerSpell(["sanitizedDescription" => "foo"]);

        self::assertEquals("foo", $object->getSanitizedDescription());

        $object->setSanitizedDescription("bar");

        self::assertEquals("bar", $object->getSanitizedDescription());
    }

    public function testSetAndGetSanitizedTooltip()
    {
        $object = new SummonerSpell(["sanitizedTooltip" => "foo"]);

        self::assertEquals("foo", $object->getSanitizedTooltip());

        $object->setSanitizedTooltip("bar");

        self::assertEquals("bar", $object->getSanitizedTooltip());
    }

    public function testSetAndGetRange()
    {
        $object = new SummonerSpell(["range" => "self"]);

        self::assertEquals("self", $object->getRange());

        $object->setRange([10, 100]);

        self::assertEquals([10, 100], $object->getRange());
    }

    public function testSetAndGetCost()
    {
        $object = new SummonerSpell(["cost" => [10]]);

        self::assertEquals([10], $object->getCost());

        $object->setCost([10, 100]);

        self::assertEquals([10, 100], $object->getCost());
    }

    public function testSetAndGetSummonerLevel()
    {
        $object = new SummonerSpell(["summonerLevel" => 1]);

        self::assertEquals(1, $object->getSummonerLevel());

        $object->setSummonerLevel(2);

        self::assertEquals(2, $object->getSummonerLevel());
    }
}