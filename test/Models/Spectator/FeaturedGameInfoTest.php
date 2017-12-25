<?php

namespace Phil404\RiotAPI\Tests\Models\Spectator;

use Phil404\RiotAPI\Models\Spectator\BannedChampion;
use Phil404\RiotAPI\Models\Spectator\FeaturedGameInfo;
use Phil404\RiotAPI\Models\Spectator\Observer;
use Phil404\RiotAPI\Models\Spectator\Participant;
use PHPUnit\Framework\TestCase;

class FeaturedGameInfoTest extends TestCase
{
    public function testConstructor()
    {
        $featuredGameInfo = new FeaturedGameInfo(
            [
                "gameId" => 1,
                "gameStartTime" => 2,
                "platformId" => "foo",
                "gameMode" => "bar",
                "mapId" => 3,
                "gameType" => "chewie",
                "bannedChampions" => [new BannedChampion()],
                "observers" => new Observer(),
                "participants" => [new Participant()],
                "gameLength" => 4,
                "gameQueueConfigId" => 5
            ]
        );

        self::assertEquals(1, $featuredGameInfo->getGameId());
        self::assertEquals(2, $featuredGameInfo->getGameStartTime());
        self::assertEquals("foo", $featuredGameInfo->getPlatformId());
        self::assertEquals("bar", $featuredGameInfo->getGameMode());
        self::assertEquals(3, $featuredGameInfo->getMapId());
        self::assertEquals("chewie", $featuredGameInfo->getGameType());
        self::assertTrue(is_array($featuredGameInfo->getBannedChampions()));
        self::assertTrue($featuredGameInfo->getObservers() instanceof Observer);
        self::assertTrue(is_array($featuredGameInfo->getParticipants()));
        self::assertEquals(4, $featuredGameInfo->getGameLength());
        self::assertEquals(5, $featuredGameInfo->getGameQueueConfigId());
    }

    public function testSetAndGetGameId()
    {
        $featuredGameInfo = new FeaturedGameInfo();
        $featuredGameInfo->setGameId(1);

        self::assertEquals(1, $featuredGameInfo->getGameId());

        $featuredGameInfo->setGameId(2);

        self::assertEquals(2, $featuredGameInfo->getGameId());
    }

    public function testSetAndGetGameStartTime()
    {
        $featuredGameInfo = new FeaturedGameInfo();
        $featuredGameInfo->setGameStartTime(1);

        self::assertEquals(1, $featuredGameInfo->getGameStartTime());

        $featuredGameInfo->setGameStartTime(2);

        self::assertEquals(2, $featuredGameInfo->getGameStartTime());
    }

    public function testSetAndGetPlatformId()
    {
        $featuredGameInfo = new FeaturedGameInfo();
        $featuredGameInfo->setPlatformId("foo");

        self::assertEquals("foo", $featuredGameInfo->getPlatformId());

        $featuredGameInfo->setPlatformId("bar");

        self::assertEquals("bar", $featuredGameInfo->getPlatformId());
    }

    public function testSetAndGetGameMode()
    {
        $featuredGameInfo = new FeaturedGameInfo();
        $featuredGameInfo->setGameMode("foo");

        self::assertEquals("foo", $featuredGameInfo->getGameMode());

        $featuredGameInfo->setGameMode("bar");

        self::assertEquals("bar", $featuredGameInfo->getGameMode());
    }

    public function testSetAndGetMapId()
    {
        $featuredGameInfo = new FeaturedGameInfo();
        $featuredGameInfo->setMapId(1);

        self::assertEquals(1, $featuredGameInfo->getMapId());

        $featuredGameInfo->setMapId(2);

        self::assertEquals(2, $featuredGameInfo->getMapId());
    }

    public function testSetAndGetGameType()
    {
        $featuredGameInfo = new FeaturedGameInfo();
        $featuredGameInfo->setGameType("foo");

        self::assertEquals("foo", $featuredGameInfo->getGameType());

        $featuredGameInfo->setGameType("bar");

        self::assertEquals("bar", $featuredGameInfo->getGameType());
    }

    public function testSetAndGetBannedChampions()
    {
        $featuredGameInfo = new FeaturedGameInfo();
        $featuredGameInfo->setBannedChampions([new BannedChampion()]);

        self::assertTrue(is_array($featuredGameInfo->getBannedChampions()));
        self::assertEquals(1, sizeof($featuredGameInfo->getBannedChampions()));
        self::assertTrue(
            $featuredGameInfo->getBannedChampions()[0] instanceof BannedChampion
        );

        $featuredGameInfo->setBannedChampions(
            [new BannedChampion(), ["pickTurn" => 1]]
        );

        self::assertEquals(2, sizeof($featuredGameInfo->getBannedChampions()));
        self::assertTrue(
            $featuredGameInfo->getBannedChampions()[1] instanceof BannedChampion
        );
    }

    public function testSetAndGetObservers()
    {
        $featuredGameInfo = new FeaturedGameInfo();
        $featuredGameInfo->setObservers(new Observer());

        self::assertTrue($featuredGameInfo->getObservers() instanceof Observer);

        $featuredGameInfo->setObservers(["encryptionKey" => "foo"]);

        self::assertTrue($featuredGameInfo->getObservers() instanceof Observer);
    }

    public function testSetAndGetParticipants()
    {
        $featuredGameInfo = new FeaturedGameInfo();
        $featuredGameInfo->setParticipants([new Participant()]);

        self::assertTrue(is_array($featuredGameInfo->getParticipants()));
        self::assertEquals(1, sizeof($featuredGameInfo->getParticipants()));
        self::assertTrue(
            $featuredGameInfo->getParticipants()[0] instanceof Participant
        );

        $featuredGameInfo->setParticipants(
            [new Participant(), ["bot" => true]]
        );

        self::assertEquals(2, sizeof($featuredGameInfo->getParticipants()));
        self::assertTrue(
            $featuredGameInfo->getParticipants()[1] instanceof Participant
        );
    }

    public function testSetAndGetGameLength()
    {
        $featuredGameInfo = new FeaturedGameInfo();
        $featuredGameInfo->setGameLength(1);

        self::assertEquals(1, $featuredGameInfo->getGameLength());

        $featuredGameInfo->setGameLength(2);

        self::assertEquals(2, $featuredGameInfo->getGameLength());
    }

    public function testSetAndGetGameQueueConfigId()
    {
        $featuredGameInfo = new FeaturedGameInfo();
        $featuredGameInfo->setGameQueueConfigId(1);

        self::assertEquals(1, $featuredGameInfo->getGameQueueConfigId());

        $featuredGameInfo->setGameQueueConfigId(2);

        self::assertEquals(2, $featuredGameInfo->getGameQueueConfigId());
    }
}