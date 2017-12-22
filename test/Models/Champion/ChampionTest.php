<?php

namespace Phil404\RiotAPI\Tests\Models\Champion;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\Champion\Champion;

class ChampionTest extends TestCase
{
    public function testConstructor()
    {
        $champion = new Champion(
            [
                "rankedPlayEnabled" => true,
                "botEnabled" => true,
                "botMmEnabled" => true,
                "active" => true,
                "freeToPlay" => false,
                "id" => 412
            ]
        );

        self::assertTrue($champion->isRankedPlayEnabled());
        self::assertTrue($champion->isBotEnabled());
        self::assertTrue($champion->isBotMmEnabled());
        self::assertTrue($champion->isActive());
        self::assertFalse($champion->isFreeToPlay());
        self::assertEquals(412, $champion->getId());
    }

    public function testSetAndIsRankedPlayEnabled()
    {
        $champion = new Champion();
        $champion->setRankedPlayEnabled(true);

        self::assertTrue($champion->isRankedPlayEnabled());

        $champion->setRankedPlayEnabled(false);

        self::assertFalse($champion->isRankedPlayEnabled());
    }

    public function testSetAndIsBotEnabled()
    {
        $champion = new Champion();
        $champion->setBotEnabled(true);

        self::assertTrue($champion->isBotEnabled());

        $champion->setBotEnabled(false);

        self::assertFalse($champion->isBotEnabled());
    }

    public function testSetAndIsBotMmEnabled()
    {
        $champion = new Champion();
        $champion->setBotMmEnabled(true);

        self::assertTrue($champion->isBotMmEnabled());

        $champion->setBotMmEnabled(false);

        self::assertFalse($champion->isBotMmEnabled());
    }

    public function testSetAndIsActive()
    {
        $champion = new Champion();
        $champion->setActive(true);

        self::assertTrue($champion->isActive());

        $champion->setActive(false);

        self::assertFalse($champion->isActive());
    }

    public function testSetAndIsFreeToPlay()
    {
        $champion = new Champion();
        $champion->setFreeToPlay(true);

        self::assertTrue($champion->isFreeToPlay());

        $champion->setFreeToPlay(false);

        self::assertFalse($champion->isFreeToPlay());
    }

    public function testSetAndGetId()
    {
        $champion = new Champion();
        $champion->setId(12);

        self::assertEquals(12, $champion->getId());

        $champion->setId(99);

        self::assertEquals(99, $champion->getId());
    }
}