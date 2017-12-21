<?php

namespace Phil404\RiotAPI\Tests\Models\ChampionMastery;

use Phil404\RiotAPI\Models\ChampionMastery\ChampionMastery;
use PHPUnit\Framework\TestCase;

class ChampionMasteryTest extends TestCase
{
    public function testSetAndGetChestGranted()
    {
        $championMastery = new ChampionMastery();
        $championMastery->setChestGranted(true);

        self::assertTrue($championMastery->getChestGranted());

        $championMastery->setChestGranted(false);

        self::assertFalse($championMastery->getChestGranted());
    }

    public function testSetAndGetChampionLevel()
    {
        $championMastery = new ChampionMastery();
        $championMastery->setChampionLevel(7);

        self::assertEquals(7, $championMastery->getChampionLevel());

        $championMastery->setChampionLevel(4);

        self::assertEquals(4, $championMastery->getChampionLevel());
    }

    public function testSetAndGetChampionPoints()
    {
        $championMastery = new ChampionMastery();
        $championMastery->setChampionPoints(1213);

        self::assertEquals(1213, $championMastery->getChampionPoints());

        $championMastery->setChampionPoints(16922121);

        self::assertEquals(16922121, $championMastery->getChampionPoints());
    }

    public function testSetAndGetChampionId()
    {
        $championMastery = new ChampionMastery();
        $championMastery->setChampionId(412);

        self::assertEquals(412, $championMastery->getChampionId());

        $championMastery->setChampionId(12);

        self::assertEquals(12, $championMastery->getChampionId());
    }

    public function testSetAndGetPlayerId()
    {
        $championMastery = new ChampionMastery();
        $championMastery->setPlayerId(123);

        self::assertEquals(123, $championMastery->getPlayerId());

        $championMastery->setPlayerId(321);

        self::assertEquals(321, $championMastery->getPlayerId());
    }

    public function testSetAndGetChampionPointsUntilNextLevel()
    {
        $championMastery = new ChampionMastery();
        $championMastery->setChampionPointsUntilNextLevel(12);

        self::assertEquals(
            12,
            $championMastery->getChampionPointsUntilNextLevel()
        );

        $championMastery->setChampionPointsUntilNextLevel(40);

        self::assertEquals(
            40,
            $championMastery->getChampionPointsUntilNextLevel()
        );
    }

    public function testSetAndGetChampionPointsSinceLastLevel()
    {
        $championMastery = new ChampionMastery();
        $championMastery->setChampionPointsSinceLastLevel(12);

        self::assertEquals(
            12,
            $championMastery->getChampionPointsSinceLastLevel()
        );

        $championMastery->setChampionPointsSinceLastLevel(50);

        self::assertEquals(
            50,
            $championMastery->getChampionPointsSinceLastLevel()
        );
    }

    public function testSetAndGetLastPlayTime()
    {
        $championMastery = new ChampionMastery();
        $championMastery->setLastPlayTime(12);

        self::assertEquals(12, $championMastery->getLastPlayTime());

        $championMastery->setLastPlayTime(20);

        self::assertEquals(20, $championMastery->getLastPlayTime());
    }
}