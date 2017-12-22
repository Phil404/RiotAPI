<?php

namespace Phil404\RiotAPI\Tests\Models\League;

use Phil404\RiotAPI\Models\League\MiniSeries;
use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\League\LeaguePosition;

class LeaguePositionTest extends TestCase
{
    public function testConstructor()
    {
        $leaguePosition = new LeaguePosition(
            [
                "rank" => "foo",
                "queueType" => "foo",
                "hotStreak" => true,
                "miniSeries" => [],
                "wins" => 10,
                "veteran" => true,
                "losses" => 90,
                "freshBlood" => true,
                "leagueId" => "foo",
                "playerOrTeamName" => "foo",
                "inactive" => false,
                "playerOrTeamId" => "bar",
                "leagueName" => "foo",
                "tier" => "foo",
                "leaguePoints" => 100
            ]
        );

        self::assertEquals("foo", $leaguePosition->getRank());
        self::assertEquals("foo", $leaguePosition->getQueueType());
        self::assertTrue($leaguePosition->isHotStreak());
        self::assertTrue(
            $leaguePosition->getMiniSeries() instanceof MiniSeries
        );
        self::assertEquals(10, $leaguePosition->getWins());
        self::assertTrue($leaguePosition->isVeteran());
        self::assertEquals(90, $leaguePosition->getLosses());
        self::assertTrue($leaguePosition->isFreshBlood());
        self::assertEquals("foo", $leaguePosition->getLeagueId());
        self::assertEquals("foo", $leaguePosition->getPlayerOrTeamName());
        self::assertFalse($leaguePosition->isInactive());
        self::assertEquals("bar", $leaguePosition->getPlayerOrTeamId());
        self::assertEquals("foo", $leaguePosition->getLeagueName());
        self::assertEquals("foo", $leaguePosition->getTier());
        self::assertEquals(100, $leaguePosition->getLeaguePoints());
    }

    public function testSetAndGetRank()
    {
        $leaguePosition = new LeaguePosition();
        $leaguePosition->setRank("foo");

        self::assertEquals("foo", $leaguePosition->getRank());

        $leaguePosition->setRank("bar");

        self::assertEquals("bar", $leaguePosition->getRank());
    }

    public function testSetAndGetQueueType()
    {
        $leaguePosition = new LeaguePosition();
        $leaguePosition->setQueueType("foo");

        self::assertEquals("foo", $leaguePosition->getQueueType());

        $leaguePosition->setQueueType("bar");

        self::assertEquals("bar", $leaguePosition->getQueueType());
    }

    public function testSetAndIsHotStreak()
    {
        $leaguePosition = new LeaguePosition();
        $leaguePosition->setHotStreak(true);

        self::assertTrue($leaguePosition->isHotStreak());

        $leaguePosition->setHotStreak(false);

        self::assertFalse($leaguePosition->isHotStreak());
    }

    public function testSetAndGetMiniSeries()
    {
        $miniSeriesA = ["wins" => 100];
        $miniSeriesB = new MiniSeries(["wins" => 200]);

        $leaguePositions = new LeaguePosition();
        $leaguePositions->setMiniSeries($miniSeriesA);

        self::assertTrue(
            $leaguePositions->getMiniSeries() instanceof MiniSeries
        );

        $leaguePositions->setMiniSeries($miniSeriesB);

        self::assertTrue(
            $leaguePositions->getMiniSeries() instanceof MiniSeries
        );
    }

    public function testSetAndGetWins()
    {
        $leaguePosition = new LeaguePosition();
        $leaguePosition->setWins(100);

        self::assertEquals(100, $leaguePosition->getWins());

        $leaguePosition->setWins(200);

        self::assertEquals(200, $leaguePosition->getWins());
    }

    public function testSetAndIsVeteran()
    {
        $leaguePosition = new LeaguePosition();
        $leaguePosition->setVeteran(true);

        self::assertTrue($leaguePosition->isVeteran());

        $leaguePosition->setVeteran(false);

        self::assertFalse($leaguePosition->isVeteran());
    }

    public function testSetAndGetLosses()
    {
        $leaguePosition = new LeaguePosition();
        $leaguePosition->setLosses(100);

        self::assertEquals(100, $leaguePosition->getLosses());

        $leaguePosition->setLosses(200);

        self::assertEquals(200, $leaguePosition->getLosses());
    }

    public function testSetAndIsFreshBlood()
    {
        $leaguePosition = new LeaguePosition();
        $leaguePosition->setFreshBlood(true);

        self::assertTrue($leaguePosition->isFreshBlood());

        $leaguePosition->setFreshBlood(false);

        self::assertFalse($leaguePosition->isFreshBlood());
    }

    public function testSetAndGetLeagueId()
    {
        $leaguePosition = new LeaguePosition();
        $leaguePosition->setLeagueId(12);

        self::assertEquals(12, $leaguePosition->getLeagueId());

        $leaguePosition->setLeagueId(24);

        self::assertEquals(24, $leaguePosition->getLeagueId());
    }

    public function testSetAndGetPlayerOrTeamName()
    {
        $leaguePosition = new LeaguePosition();
        $leaguePosition->setPlayerOrTeamName("foo");

        self::assertEquals("foo", $leaguePosition->getPlayerOrTeamName());

        $leaguePosition->setPlayerOrTeamName("bar");

        self::assertEquals("bar", $leaguePosition->getPlayerOrTeamName());
    }

    public function testSetAndGetInactive()
    {
        $leaguePosition = new LeaguePosition();
        $leaguePosition->setInactive(true);

        self::assertTrue($leaguePosition->isInactive());

        $leaguePosition->setInactive(false);

        self::assertFalse($leaguePosition->isInactive());
    }

    public function testSetAndGetPlayerOrTeamId()
    {
        $leaguePosition = new LeaguePosition();
        $leaguePosition->setPlayerOrTeamId("foo");

        self::assertEquals("foo", $leaguePosition->getPlayerOrTeamId());

        $leaguePosition->setPlayerOrTeamId("bar");

        self::assertEquals("bar", $leaguePosition->getPlayerOrTeamId());
    }

    public function testSetAndGetLeagueName()
    {
        $leaguePosition = new LeaguePosition();
        $leaguePosition->setLeagueName("foo");

        self::assertEquals("foo", $leaguePosition->getLeagueName());

        $leaguePosition->setLeagueName("bar");

        self::assertEquals("bar", $leaguePosition->getLeagueName());
    }

    public function testSetAndGetTier()
    {
        $leaguePosition = new LeaguePosition();
        $leaguePosition->setTier("foo");

        self::assertEquals("foo", $leaguePosition->getTier());

        $leaguePosition->setTier("bar");

        self::assertEquals("bar", $leaguePosition->getTier());
    }

    public function testSetAndGetLeaguePoints()
    {
        $leaguePosition = new LeaguePosition();
        $leaguePosition->setLeaguePoints(9);

        self::assertEquals(9, $leaguePosition->getLeaguePoints());

        $leaguePosition->setLeaguePoints(99);

        self::assertEquals(99, $leaguePosition->getLeaguePoints());
    }
}