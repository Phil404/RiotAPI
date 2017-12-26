<?php

namespace Phil404\RiotAPI\Tests\Models\Spectator;

use Phil404\RiotAPI\Models\Spectator\GameCustomizationObject;
use Phil404\RiotAPI\Models\Spectator\Perks;
use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\Spectator\CurrentGameParticipant;

class CurrentGameParticipantTest extends TestCase
{
    public function testConstructor()
    {
        $object = new CurrentGameParticipant(
            [
                "profileIconId" => 1,
                "championId" => 2,
                "summonerName" => "foo",
                "gameCustomizationObjects" => [new GameCustomizationObject()],
                "bot" => true,
                "perks" => new Perks,
                "spell2Id" => 3,
                "teamId" => 100,
                "spell1Id" => 4,
                "summonerId" => 5
            ]
        );

        self::assertEquals(1, $object->getProfileIconId());
        self::assertEquals(2, $object->getChampionId());
        self::assertEquals("foo", $object->getSummonerName());
        self::assertTrue(is_array($object->getGameCustomizationObjects()));
        self::assertTrue(
            $object->getGameCustomizationObjects()[0]
            instanceof GameCustomizationObject
        );
        self::assertTrue($object->isBot());
        self::assertTrue($object->getPerks() instanceof Perks);
        self::assertEquals(3, $object->getSpell2Id());
        self::assertEquals(100, $object->getTeamId());
        self::assertEquals(4, $object->getSpell1Id());
        self::assertEquals(5, $object->getSummonerId());
    }

    public function testSetAndGetProfileIconId()
    {
        $object = new CurrentGameParticipant();
        $object->setProfileIconId(1);

        self::assertEquals(1, $object->getProfileIconId());

        $object->setProfileIconId(2);

        self::assertEquals(2, $object->getProfileIconId());
    }

    public function testSetAndGetChampionId()
    {
        $object = new CurrentGameParticipant();
        $object->setChampionId(1);

        self::assertEquals(1, $object->getChampionId());

        $object->setChampionId(2);

        self::assertEquals(2, $object->getChampionId());
    }

    public function testSetAndGetSummonerName()
    {
        $object = new CurrentGameParticipant();
        $object->setSummonerName("foo");

        self::assertEquals("foo", $object->getSummonerName());

        $object->setSummonerName("bar");

        self::assertEquals("bar", $object->getSummonerName());
    }

    public function testSetAndGetGameCustomizationObjects()
    {
        $object = new CurrentGameParticipant();
        $object->setGameCustomizationObjects(
            [
                new GameCustomizationObject(),
                ["content" => "foo"]
            ]
        );

        self::assertTrue(is_array($object->getGameCustomizationObjects()));
        self::assertEquals(2, sizeof($object->getGameCustomizationObjects()));
        self::assertTrue(
            $object->getGameCustomizationObjects()[0]
            instanceof GameCustomizationObject
        );

        $object->setGameCustomizationObjects([new GameCustomizationObject()]);

        self::assertEquals(1, sizeof($object->getGameCustomizationObjects()));
    }

    public function testSetAndIsBot()
    {
        $object = new CurrentGameParticipant();
        $object->setBot(true);

        self::assertTrue($object->isBot());

        $object->setBot(false);

        self::assertFalse($object->isBot());
    }

    public function testSetAndGetPerks()
    {
        $object = new CurrentGameParticipant();
        $object->setPerks(new Perks());

        self::assertTrue($object->getPerks() instanceof Perks);

        $object->setPerks(["perkStyle" => 10]);

        self::assertTrue($object->getPerks() instanceof Perks);
    }

    public function testSetAndGetSpell2Id()
    {
        $object = new CurrentGameParticipant();
        $object->setSpell2Id(1);

        self::assertEquals(1, $object->getSpell2Id());

        $object->setSpell2Id(2);

        self::assertEquals(2, $object->getSpell2Id());
    }

    public function testSetAndGetTeamId()
    {
        $object = new CurrentGameParticipant();
        $object->setTeamId(100);

        self::assertEquals(100, $object->getTeamId());

        $object->setTeamId(200);

        self::assertEquals(200, $object->getTeamId());
    }

    public function testSetAndGetSpell1Id()
    {
        $object = new CurrentGameParticipant();
        $object->setSpell1Id(1);

        self::assertEquals(1, $object->getSpell1Id());

        $object->setSpell1Id(2);

        self::assertEquals(2, $object->getSpell1Id());
    }

    public function testSetAndGetSummonerId()
    {
        $object = new CurrentGameParticipant();
        $object->setSummonerId(1);

        self::assertEquals(1, $object->getSummonerId());

        $object->setSummonerId(2);

        self::assertEquals(2, $object->getSummonerId());
    }
}