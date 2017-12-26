<?php

namespace Phil404\RiotAPI\Tests\Models\Spectator;

use Phil404\RiotAPI\Models\Spectator\CurrentGameInfo;
use PHPUnit\Framework\TestCase;

class CurrentGameInfoTest extends TestCase
{
    public function testSetAndGetGameId()
    {
        $object = new CurrentGameInfo();
        $object->setGameId(1);

        self::assertEquals(1, $object->getGameId());

        $object->setGameId(2);

        self::assertEquals(2, $object->getGameId());
    }

    public function testSetAndGetGameStartTime()
    {
        $object = new CurrentGameInfo();
        $object->setGameStartTime(1);

        self::assertEquals(1, $object->getGameStartTime());

        $object->setGameStartTime(2);

        self::assertEquals(2, $object->getGameStartTime());
    }

    public function testSetAndGetPlatformId()
    {
        $object = new CurrentGameInfo();
        $object->setPlatformId("foo");

        self::assertEquals("foo", $object->getPlatformId());

        $object->setPlatformId("bar");

        self::assertEquals("bar", $object->getPlatformId());
    }

    public function testSetAndGetGameMode()
    {
        $object = new CurrentGameInfo();
        $object->setGameMode("foo");

        self::assertEquals("foo", $object->getGameMode());

        $object->setGameMode("bar");

        self::assertEquals("bar", $object->getGameMode());
    }

    public function testSetAndGetMapId()
    {
        $object = new CurrentGameInfo();
        $object->setMapId(1);

        self::assertEquals(1, $object->getMapId());

        $object->setMapId(2);

        self::assertEquals(2, $object->getMapId());
    }

    public function testSetAndGetGameType()
    {
        $object = new CurrentGameInfo();
        $object->setGameType("foo");

        self::assertEquals("foo", $object->getGameType());

        $object->setGameType("bar");

        self::assertEquals("bar", $object->getGameType());
    }
}