<?php

namespace Phil404\RiotAPI\Tests\Models\Spectator;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\Spectator\BannedChampion;

class BannedChampionTest extends TestCase
{
    public function testConstructor()
    {
        $bannedChampion = new BannedChampion(
            [
                "pickTurn" => 1,
                "championId" => 412,
                "teamId" => 100
            ]
        );

        self::assertEquals(1, $bannedChampion->getPickTurn());
        self::assertEquals(412, $bannedChampion->getChampionId());
        self::assertEquals(100, $bannedChampion->getTeamId());
    }

    public function testSetAndGetPickTurn()
    {
        $bannedChampion = new BannedChampion();
        $bannedChampion->setPickTurn(1);

        self::assertEquals(1, $bannedChampion->getPickTurn());

        $bannedChampion->setPickTurn(2);

        self::assertEquals(2, $bannedChampion->getPickTurn());
    }

    public function testSetAndGetChampionId()
    {
        $bannedChampion = new BannedChampion();
        $bannedChampion->setChampionId(1);

        self::assertEquals(1, $bannedChampion->getChampionId());

        $bannedChampion->setChampionId(2);

        self::assertEquals(2, $bannedChampion->getChampionId());
    }

    public function testSetAndGetTeamId()
    {
        $bannedChampion = new BannedChampion();
        $bannedChampion->setTeamId(100);

        self::assertEquals(100, $bannedChampion->getTeamId());

        $bannedChampion->setTeamId(200);

        self::assertEquals(200, $bannedChampion->getTeamId());
    }
}