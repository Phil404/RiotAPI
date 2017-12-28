<?php

namespace Phil404\RiotAPI\Tests\Models\Spectator;

use Phil404\RiotAPI\Models\Spectator\BannedChampion;
use Phil404\RiotAPI\Models\Spectator\CurrentGameInfo;
use Phil404\RiotAPI\Models\Spectator\Observer;
use Phil404\RiotAPI\Models\Spectator\Participant;
use PHPUnit\Framework\TestCase;

class CurrentGameInfoTest extends TestCase
{
    public function testConstructor()
    {
        $object = new CurrentGameInfo(
            [
                "gameId" => 1,
                "gameStartTime" => 2,
                "platformId" => "foo",
                "gameMode" => "bar",
                "mapId" => 3,
                "gameType" => "john",
                "bannedChampions" => [new BannedChampion()],
                "observers" => new Observer(),
                "participants" => [new Participant()],
                "gameLength" => 4,
                "gameQueueConfigId" => 5
            ]
        );

        self::assertEquals(1, $object->getGameId());
        self::assertEquals(2, $object->getGameStartTime());
        self::assertEquals("foo", $object->getPlatformId());
        self::assertEquals("bar", $object->getGameMode());
        self::assertEquals(3, $object->getMapId());
        self::assertEquals("john", $object->getGameType());
        self::assertTrue(is_array($object->getBannedChampions()));
        self::assertTrue(
            $object->getBannedChampions()[0] instanceof BannedChampion
        );
        self::assertTrue(
            $object->getObservers() instanceof Observer
        );
        self::assertTrue(is_array($object->getParticipants()));
        self::assertTrue(
            $object->getParticipants()[0] instanceof Participant
        );
        self::assertEquals(4, $object->getGameLength());
        self::assertEquals(5, $object->getGameQueueConfigId());
    }

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

    public function testSetAndGetBannedChampions()
    {
        $object = new CurrentGameInfo();
        $object->setBannedChampions([new BannedChampion()]);

        self::assertTrue(is_array($object->getBannedChampions()));
        self::assertEquals(1, sizeof($object->getBannedChampions()));
        self::assertTrue(
            $object->getBannedChampions()[0] instanceof BannedChampion
        );

        $object->setBannedChampions([["pickTurn" => 1], new BannedChampion()]);

        self::assertEquals(2, sizeof($object->getBannedChampions()));
        self::assertTrue(
            $object->getBannedChampions()[0] instanceof BannedChampion
        );
    }

    public function testSetAndGetObservers()
    {
        $object = new CurrentGameInfo();
        $object->setObservers(new Observer());

        self::assertTrue($object->getObservers() instanceof Observer);

        $object->setObservers(["encryptionKey" => "foo"]);

        self::assertTrue($object->getObservers() instanceof Observer);
    }

    public function testSetAndGetParticipants()
    {
        $object = new CurrentGameInfo();
        $object->setParticipants([new Participant()]);

        self::assertTrue(is_array($object->getParticipants()));
        self::assertEquals(1, sizeof($object->getParticipants()));
        self::assertTrue($object->getParticipants()[0] instanceof Participant);

        $object->setParticipants([["bot" => true], new Participant()]);

        self::assertEquals(2, sizeof($object->getParticipants()));
        self::assertTrue($object->getParticipants()[0] instanceof Participant);
    }

    public function testSetAndGetGameLength()
    {
        $object = new CurrentGameInfo();
        $object->setGameLength(1);

        self::assertEquals(1, $object->getGameLength());

        $object->setGameLength(2);

        self::assertEquals(2, $object->getGameLength());
    }

    public function testSetAndGetGameQueueConfigId()
    {
        $object = new CurrentGameInfo();
        $object->setGameQueueConfigId(1);

        self::assertEquals(1, $object->getGameQueueConfigId());

        $object->setGameQueueConfigId(2);

        self::assertEquals(2, $object->getGameQueueConfigId());
    }
}