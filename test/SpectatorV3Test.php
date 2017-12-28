<?php

namespace Phil404\RiotAPI\Tests;

use Phil404\RiotAPI\Models\Region;
use Phil404\RiotAPI\Models\Spectator\CurrentGameInfo;
use Phil404\RiotAPI\Models\Spectator\FeaturedGames;
use Phil404\RiotAPI\Models\Summoner\Summoner;
use Phil404\RiotAPI\SpectatorV3;
use Phil404\RiotAPI\SummonerV3;
use PHPUnit\Framework\TestCase;

class SpectatorV3Test extends TestCase
{
    public function testGetCurrentGameInfoBySummoner()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $featuredGame = SpectatorV3::getFeaturedGames(Region::EUW);
            $summonerName = $featuredGame->getGameList()[0]
                ->getParticipants()[0]
                ->getSummonerName();
            $summoner = SummonerV3::getSummonerByName(Region::EUW, $summonerName);
            $response = SpectatorV3::getCurrentGameInfoBySummoner(
                Region::EUW,
                $summoner->getId()
            );

            self::assertTrue(
                $response instanceof CurrentGameInfo
            );
            self::assertNotNull($response->getGameId());
        }
    }

    public function testGetFeaturedGames()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = SpectatorV3::getFeaturedGames(Region::EUW);
            self::assertTrue(
                $response instanceof FeaturedGames
            );
            self::assertNotNull($response->getClientRefreshInterval());
        }
    }
}