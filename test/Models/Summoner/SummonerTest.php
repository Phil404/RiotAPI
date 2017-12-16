<?php

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

        $this->assertEquals(123, $summoner->getProfileIconId());
        $this->assertEquals("Phil404", $summoner->getName());
        $this->assertEquals(12, $summoner->getSummonerLevel());
        $this->assertEquals(123, $summoner->getRevisionDate());
        $this->assertEquals(123, $summoner->getId());
        $this->assertEquals(123, $summoner->getAccountId());
    }

    public function testSetAndGetProfilIconId()
    {
        $summoner = new Summoner();
        $summoner->setProfileIconId(123);

        $this->assertEquals(123, $summoner->getProfileIconId());

        $summoner->setProfileIconId(789);

        $this->assertEquals(789, $summoner->getProfileIconId());
    }

    public function testSetAndGetName()
    {
        $summoner = new Summoner();
        $summoner->setName("Phil404");

        $this->assertEquals("Phil404", $summoner->getName());

        $summoner->setName("HansSama");

        $this->assertEquals("HansSama", $summoner->getName());
    }

    public function testSetAndGetSummonerLevel()
    {
        $summoner = new Summoner();
        $summoner->setSummonerLevel(12);

        $this->assertEquals(12, $summoner->getSummonerLevel());

        $summoner->setSummonerLevel(24);

        $this->assertEquals(24, $summoner->getSummonerLevel());
    }

    public function testSetAndGetRevisionDate()
    {
        $summoner = new Summoner();
        $summoner->setRevisionDate(123);

        $this->assertEquals(123, $summoner->getRevisionDate());

        $summoner->setRevisionDate(789);

        $this->assertEquals(789, $summoner->getRevisionDate());
    }

    public function testSetAndGetId()
    {
        $summoner = new Summoner();
        $summoner->setId(123);

        $this->assertEquals(123, $summoner->getId());

        $summoner->setId(789);

        $this->assertEquals(789, $summoner->getId());
    }

    public function testSetAndGetAccountId()
    {
        $summoner = new Summoner();
        $summoner->setAccountId(123);

        $this->assertEquals(123, $summoner->getAccountId());

        $summoner->setAccountId(789);

        $this->assertEquals(789, $summoner->getAccountId());
    }
}