<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use Phil404\RiotAPI\Models\StaticData\Gold;
use PHPUnit\Framework\TestCase;

class GoldTest extends TestCase
{
    public function testSetAndGetSell()
    {
        $object = new Gold(["sell" => 10]);

        self::assertEquals(10, $object->getSell());

        $object->setSell(90);

        self::assertEquals(90, $object->getSell());
    }

    public function testSetAndGetTotal()
    {
        $object = new Gold(["total" => 10]);

        self::assertEquals(10, $object->getTotal());

        $object->setTotal(90);

        self::assertEquals(90, $object->getTotal());
    }

    public function testSetAndGetBase()
    {
        $object = new Gold(["base" => 10]);

        self::assertEquals(10, $object->getBase());

        $object->setBase(90);

        self::assertEquals(90, $object->getBase());
    }

    public function testSetAndGetPurchasable()
    {
        $object = new Gold(["purchasable" => true]);

        self::assertTrue($object->isPurchasable());

        $object->setPurchasable(false);

        self::assertFalse($object->isPurchasable());
    }
}