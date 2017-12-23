<?php

namespace Phil404\RiotAPI\Tests\Models\Spectator;

use Phil404\RiotAPI\Models\Spectator\Participant;
use PHPUnit\Framework\TestCase;

class ParticipantTest extends TestCase
{
    public function testConstructor()
    {
        $participant = new Participant(
            [
                "profileIconId" => 10,
                "championId" => 11,
                "summonerName" => "foo",
                "bot" => true,
                "spell2Id" => 12,
                "teamId" => 100,
                "spell1Id" => 13
            ]
        );

        self::assertEquals(10, $participant->getProfileIconId());
        self::assertEquals(11, $participant->getChampionId());
        self::assertEquals("foo", $participant->getSummonerName());
        self::assertTrue($participant->isBot());
        self::assertEquals(12, $participant->getSpell2Id());
        self::assertEquals(100, $participant->getTeamId());
        self::assertEquals(13, $participant->getSpell1Id());
    }

    public function testSetAndGetProfileIconId()
    {
        $participant = new Participant();
        $participant->setProfileIconId(123);

        self::assertEquals(123, $participant->getProfileIconId());

        $participant->setProfileIconId(321);

        self::assertEquals(321, $participant->getProfileIconId());
    }

    public function testSetAndGetChampionId()
    {
        $participant = new Participant();
        $participant->setChampionId(12);

        self::assertEquals(12, $participant->getChampionId());

        $participant->setChampionId(15);

        self::assertEquals(15, $participant->getChampionId());
    }

    public function testSetAndGetSummonerName()
    {
        $participant = new Participant();
        $participant->setSummonerName("foo");

        self::assertEquals("foo", $participant->getSummonerName());

        $participant->setSummonerName("bar");

        self::assertEquals("bar", $participant->getSummonerName());
    }

    public function testSetAndIsBot()
    {
        $participant = new Participant();
        $participant->setBot(true);

        self::assertTrue($participant->isBot());

        $participant->setBot(false);

        self::assertFalse($participant->isBot());
    }

    public function testSetAndGetSpell2Id()
    {
        $participant = new Participant();
        $participant->setSpell2Id(12);

        self::assertEquals(12, $participant->getSpell2Id());

        $participant->setSpell2Id(50);

        self::assertEquals(50, $participant->getSpell2Id());
    }

    public function testSetAndGetTeamId()
    {
        $participant = new Participant();
        $participant->setTeamId(100);

        self::assertEquals(100, $participant->getTeamId());

        $participant->setTeamId(200);

        self::assertEquals(200, $participant->getTeamId());
    }

    public function testSetAndGetSpell1Id()
    {
        $participant = new Participant();
        $participant->setSpell1Id(12);

        self::assertEquals(12, $participant->getSpell1Id());

        $participant->setSpell1Id(50);

        self::assertEquals(50, $participant->getSpell1Id());
    }
}