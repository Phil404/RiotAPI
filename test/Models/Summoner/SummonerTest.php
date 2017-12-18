<?php

namespace Phil404\RiotAPI\Tests\Models\Summoner;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\Summoner\Summoner;

class SummonerTest extends TestCase
{
    public function testConstructor()
    {
        $array = [
            "profileIconId" => 123,
            "name" => "Phil404",
            "summonerLevel" => 12,
            "revisionDate" => 123,
            "id" => 123,
            "accountId" => 123
        ];
        $summoner = new Summoner($array);

        self::assertEquals(123, $summoner->getProfileIconId());
        self::assertEquals("Phil404", $summoner->getName());
        self::assertEquals(12, $summoner->getSummonerLevel());
        self::assertEquals(123, $summoner->getRevisionDate());
        self::assertEquals(123, $summoner->getId());
        self::assertEquals(123, $summoner->getAccountId());
    }

    public function testSetAndGetProfilIconId()
    {
        $summoner = new Summoner();
        $summoner->setProfileIconId(123);

        self::assertEquals(123, $summoner->getProfileIconId());

        $summoner->setProfileIconId(789);

        self::assertEquals(789, $summoner->getProfileIconId());
    }

    public function testSetAndGetName()
    {
        $summoner = new Summoner();
        $summoner->setName("Phil404");

        self::assertEquals("Phil404", $summoner->getName());

        $summoner->setName("HansSama");

        self::assertEquals("HansSama", $summoner->getName());
    }

    public function testSetAndGetSummonerLevel()
    {
        $summoner = new Summoner();
        $summoner->setSummonerLevel(12);

        self::assertEquals(12, $summoner->getSummonerLevel());

        $summoner->setSummonerLevel(24);

        self::assertEquals(24, $summoner->getSummonerLevel());
    }

    public function testSetAndGetRevisionDate()
    {
        $summoner = new Summoner();
        $summoner->setRevisionDate(123);

        self::assertEquals(123, $summoner->getRevisionDate());

        $summoner->setRevisionDate(789);

        self::assertEquals(789, $summoner->getRevisionDate());
    }

    public function testSetAndGetId()
    {
        $summoner = new Summoner();
        $summoner->setId(123);

        self::assertEquals(123, $summoner->getId());

        $summoner->setId(789);

        self::assertEquals(789, $summoner->getId());
    }

    public function testSetAndGetAccountId()
    {
        $summoner = new Summoner();
        $summoner->setAccountId(123);

        self::assertEquals(123, $summoner->getAccountId());

        $summoner->setAccountId(789);

        self::assertEquals(789, $summoner->getAccountId());
    }
}