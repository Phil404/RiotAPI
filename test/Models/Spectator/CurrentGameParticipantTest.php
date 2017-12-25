<?php

namespace Phil404\RiotAPI\Tests\Models\Spectator;

use Phil404\RiotAPI\Models\Spectator\GameCustomizationObject;
use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\Spectator\CurrentGameParticipant;

class CurrentGameParticipantTest extends TestCase
{
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
}