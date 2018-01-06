<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\StaticData\Realm;

class RealmTest extends TestCase
{
    public function testSetAndGetLg()
    {
        $object = new Realm(["lg" => "foo"]);

        self::assertEquals("foo", $object->getLg());

        $object->setLg("bar");

        self::assertEquals("bar", $object->getLg());
    }

    public function testSetAndGetDd()
    {
        $object = new Realm(["dd" => "foo"]);

        self::assertEquals("foo", $object->getDd());

        $object->setDd("bar");

        self::assertEquals("bar", $object->getDd());
    }

    public function testSetAndGetL()
    {
        $object = new Realm(["l" => "foo"]);

        self::assertEquals("foo", $object->getL());

        $object->setL("bar");

        self::assertEquals("bar", $object->getL());
    }

    public function testSetAndGetN()
    {
        $object = new Realm(["n" => ["foo" => "bar", "bar" => "foo"]]);

        self::assertEquals(["foo" => "bar", "bar" => "foo"], $object->getN());

        $object->setN(["foo" => "bar"]);

        self::assertEquals(["foo" => "bar"], $object->getN());
    }

    public function testProfileiconmax()
    {
        $object = new Realm(["profileiconmax" => 10]);

        self::assertEquals(10, $object->getProfileiconmax());

        $object->setProfileiconmax(99);

        self::assertEquals(99, $object->getProfileiconmax());
    }

    public function testSetAndGetStore()
    {
        $object = new Realm(["store" => "foo"]);

        self::assertEquals("foo", $object->getStore());

        $object->setStore("bar");

        self::assertEquals("bar", $object->getStore());
    }

    public function testSetAndGetV()
    {
        $object = new Realm(["v" => "foo"]);

        self::assertEquals("foo", $object->getV());

        $object->setV("bar");

        self::assertEquals("bar", $object->getV());
    }

    public function testSetAndGetCdn()
    {
        $object = new Realm(["cdn" => "foo"]);

        self::assertEquals("foo", $object->getCdn());

        $object->setCdn("bar");

        self::assertEquals("bar", $object->getCdn());
    }

    public function testSetAndGetCss()
    {
        $object = new Realm(["css" => "foo"]);

        self::assertEquals("foo", $object->getCss());

        $object->setCss("bar");

        self::assertEquals("bar", $object->getCss());
    }
}