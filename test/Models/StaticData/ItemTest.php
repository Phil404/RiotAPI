<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use Phil404\RiotAPI\Models\StaticData\Gold;
use Phil404\RiotAPI\Models\StaticData\Image;
use Phil404\RiotAPI\Models\StaticData\InventoryDataStats;
use Phil404\RiotAPI\Models\StaticData\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testSetAndGetGold()
    {
        $object = new Item(["gold" => ["sell" => 10]]);

        self::assertTrue($object->getGold() instanceof Gold);
        self::assertEquals(10, $object->getGold()->getSell());

        $object->setGold(new Gold);

        self::assertTrue($object->getGold() instanceof Gold);
    }

    public function testSetAndGetPlaintext()
    {
        $object = new Item(["plaintext" => "foo"]);

        self::assertEquals("foo", $object->getPlaintext());

        $object->setPlaintext("bar");

        self::assertEquals("bar", $object->getPlaintext());
    }

    public function testSetAndIsHideFromAll()
    {
        $object = new Item(["hideFromAll" => true]);

        self::assertTrue($object->isHideFromAll());

        $object->setHideFromAll(false);

        self::assertFalse($object->isHideFromAll());
    }

    public function testSetAndIsInStore()
    {
        $object = new Item(["inStore" => true]);

        self::assertTrue($object->isInStore());

        $object->setInStore(false);

        self::assertFalse($object->isInStore());
    }

    public function testSetAndGetInto()
    {
        $object = new Item(["into" => ["foo", "bar"]]);

        self::assertEquals(["foo", "bar"], $object->getInto());

        $object->setInto(["john", "doe"]);

        self::assertEquals(["john", "doe"], $object->getInto());
    }

    public function testSetAndGetId()
    {
        $object = new Item(["id" => 1]);

        self::assertEquals(1, $object->getId());

        $object->setId(99);

        self::assertEquals(99, $object->getId());
    }

    public function testSetAndGetStats()
    {
        $object = new Item(["stats" => ["FlatBlockMod" => 1.23]]);

        self::assertTrue($object->getStats() instanceof InventoryDataStats);
        self::assertEquals(1.23, $object->getStats()->getFlatBlockMod());

        $object->setStats(new InventoryDataStats());

        self::assertTrue($object->getStats() instanceof InventoryDataStats);
    }

    public function testSetAndGetColloq()
    {
        $object = new Item(["colloq" => "foo"]);

        self::assertEquals("foo", $object->getColloq());

        $object->setColloq("bar");

        self::assertEquals("bar", $object->getColloq());
    }

    public function testSetAndGetMaps()
    {
        $object = new Item(["maps" => ["foo" => true]]);

        self::assertEquals(["foo" => true], $object->getMaps());

        $object->setMaps(["bar" => false]);

        self::assertEquals(["bar" => false], $object->getMaps());
    }

    public function testSetAndGetSpecialRecipe()
    {
        $object = new Item(["specialRecipe" => 1]);

        self::assertEquals(1, $object->getSpecialRecipe());

        $object->setSpecialRecipe(99);

        self::assertEquals(99, $object->getSpecialRecipe());
    }

    public function testSetAndGetImage()
    {
        $object = new Item(["image" => ["full" => "foo"]]);

        self::assertTrue($object->getImage() instanceof Image);
        self::assertEquals("foo", $object->getImage()->getFull());

        $object->setImage(new Image);

        self::assertTrue($object->getImage() instanceof Image);
    }

    public function testSetAndGetDescription()
    {
        $object = new Item(["description" => "foo"]);

        self::assertEquals("foo", $object->getDescription());

        $object->setDescription("bar");

        self::assertEquals("bar", $object->getDescription());
    }

    public function testSetAndGetTags()
    {
        $object = new Item(["tags" => ["foo", "bar"]]);

        self::assertEquals(["foo", "bar"], $object->getTags());

        $object->setTags(["john", "doe"]);

        self::assertEquals(["john", "doe"], $object->getTags());
    }

    public function testSetAndGetEffect()
    {
        $object = new Item(["effect" => ["foo" => "bar"]]);

        self::assertEquals(["foo" => "bar"], $object->getEffect());

        $object->setEffect(["john", "doe"]);

        self::assertEquals(["john", "doe"], $object->getEffect());
    }

    public function testSetAndGetRequiredChampion()
    {
        $object = new Item(["requiredChampion" => "foo"]);

        self::assertEquals("foo", $object->getRequiredChampion());

        $object->setRequiredChampion("bar");

        self::assertEquals("bar", $object->getRequiredChampion());
    }

    public function testSetAndGetFrom()
    {
        $object = new Item(["from" => ["foo", "bar"]]);

        self::assertEquals(["foo", "bar"], $object->getFrom());

        $object->setFrom(["foobar"]);

        self::assertEquals(["foobar"], $object->getFrom());
    }

    public function testSetAndGetGroup()
    {
        $object = new Item(["group" => "foo"]);

        self::assertEquals("foo", $object->getGroup());

        $object->setGroup("bar");

        self::assertEquals("bar", $object->getGroup());
    }

    public function testSetAndIsConsumeOnFull()
    {
        $object = new Item(["consumeOnFull" => true]);

        self::assertTrue($object->isConsumeOnFull());

        $object->setConsumeOnFull(false);

        self::assertFalse($object->isConsumeOnFull());
    }

    public function testSetAndGetName()
    {
        $object = new Item(["name" => "foo"]);

        self::assertEquals("foo", $object->getName());

        $object->setName("bar");

        self::assertEquals("bar", $object->getName());
    }

    public function testSetAndisConsumed()
    {
        $object = new Item(["consumed" => true]);

        self::assertTrue($object->isConsumed());

        $object->setConsumed(false);

        self::assertFalse($object->isConsumed());
    }

    public function testSetAndGetSanitizedDescription()
    {
        $object = new Item(["sanitizedDescription" => "foo"]);

        self::assertEquals("foo", $object->getSanitizedDescription());

        $object->setSanitizedDescription("bar");

        self::assertEquals("bar", $object->getSanitizedDescription());
    }

    public function testSetAndGetDepth()
    {
        $object = new Item(["depth" => 1]);

        self::assertEquals(1, $object->getDepth());

        $object->setDepth(99);

        self::assertEquals(99, $object->getDepth());
    }

    public function testSetAndGetStacks()
    {
        $object = new Item(["stacks" => 1]);

        self::assertEquals(1, $object->getStacks());

        $object->setStacks(99);

        self::assertEquals(99, $object->getStacks());
    }
}