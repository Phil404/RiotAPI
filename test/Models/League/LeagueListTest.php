<?php

namespace Phil404\RiotAPI\Tests\Models\League;

use Phil404\RiotAPI\Models\League\LeaguePosition;
use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\League\LeagueList;

class LeagueListTest extends TestCase
{
    public function testConstructor()
    {
        $leagueList = new LeagueList(
            [
                "leagueId" => "10",
                "tier" => "foo",
                "entries" => [new LeaguePosition()],
                "queue" => "foo",
                "name" => "bar"
            ]
        );

        self::assertEquals("10", $leagueList->getLeagueId());
        self::assertEquals("foo", $leagueList->getTier());
        self::assertTrue(
            $leagueList->getEntries()[0] instanceof LeaguePosition
        );
        self::assertEquals("foo", $leagueList->getQueue());
        self::assertEquals("bar", $leagueList->getName());
    }

    public function testSetAndGetLeaugeId()
    {
        $leagueList = new LeagueList();
        $leagueList->setLeagueId("12");

        self::assertEquals("12", $leagueList->getLeagueId());

        $leagueList->setLeagueId("13");

        self::assertEquals("13", $leagueList->getLeagueId());
    }

    public function testSetAndGetTier()
    {
        $leagueList = new LeagueList();
        $leagueList->setTier("Gold");

        self::assertEquals("Gold", $leagueList->getTier());

        $leagueList->setTier("Silver");

        self::assertEquals("Silver", $leagueList->getTier());
    }

    public function testSetAndGetEntries()
    {
        $leagueList = new LeagueList();
        $leagueList->setEntries([["wins" => 12], ["wins" => 13]]);

        self::assertEquals(2, sizeof($leagueList->getEntries()));
        self::assertTrue(
            $leagueList->getEntries()[0] instanceof LeaguePosition
        );

        $leagueList->setEntries([new LeaguePosition()]);

        self::assertEquals(1, sizeof($leagueList->getEntries()));
        self::assertTrue(
            $leagueList->getEntries()[0] instanceof LeaguePosition
        );
    }

    public function testSetAndGetQueue()
    {
        $leagueList = new LeagueList();
        $leagueList->setQueue("foo");

        self::assertEquals("foo", $leagueList->getQueue());

        $leagueList->setQueue("bar");

        self::assertEquals("bar", $leagueList->getQueue());
    }

    public function testSetAndGetName()
    {
        $leagueList = new LeagueList();
        $leagueList->setName("foo");

        self::assertEquals("foo", $leagueList->getName());

        $leagueList->setName("bar");

        self::assertEquals("bar", $leagueList->getName());
    }
}