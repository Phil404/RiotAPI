<?php

namespace Phil404\RiotAPI\Tests\Models\Spectator;

use Phil404\RiotAPI\Models\Spectator\FeaturedGameInfo;
use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\Spectator\FeaturedGames;

class FeaturedGamesTest extends TestCase
{
    public function testConstructor()
    {
        $featuredGames = new FeaturedGames(
            [
                "clientRefreshInterval" => 10,
                "gameList" => [new FeaturedGameInfo()]
            ]
        );

        self::assertEquals(10, $featuredGames->getClientRefreshInterval());
        self::assertTrue(is_array($featuredGames->getGameList()));
    }

    public function testSetAndGetClientRefreshInterval()
    {
        $featuredGames = new FeaturedGames;
        $featuredGames->setClientRefreshInterval(1);

        self::assertEquals(1, $featuredGames->getClientRefreshInterval());

        $featuredGames->setClientRefreshInterval(2);

        self::assertEquals(2, $featuredGames->getClientRefreshInterval());
    }

    public function testSetAndGetGameList()
    {
        $featuredGames = new FeaturedGames();
        $featuredGames->setGameList([new FeaturedGameInfo()]);

        self::assertTrue(is_array($featuredGames->getGameList()));
        self::assertEquals(1, sizeof($featuredGames->getGameList()));
        self::assertTrue(
            $featuredGames->getGameList()[0] instanceof FeaturedGameInfo
        );

        $featuredGames->setGameList(
            [new FeaturedGameInfo(), ["gameId" => 1]]
        );

        self::assertEquals(2, sizeof($featuredGames->getGameList()));
        self::assertTrue(
            $featuredGames->getGameList()[1] instanceof FeaturedGameInfo
        );
    }
}