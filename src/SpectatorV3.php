<?php

namespace Phil404\RiotAPI;

use Phil404\RiotAPI\Models\Spectator\CurrentGameInfo;
use Phil404\RiotAPI\Models\Spectator\FeaturedGames;

class SpectatorV3
{
    private static $_route = "lol/spectator/v3";

    public static function getCurrentGameInfoBySummoner(string $region,
                                                        int $summonerId)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);

        $data = $apiHandler->sendRequest(
            SpectatorV3::$_route
            . "/active-games/by-summoner/"
            . $summonerId
        );

        if (is_null($data)) {
            return null;
        } else {
            return new CurrentGameInfo($data);
        }
    }

    public static function getFeaturedGames(string $region)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);

        $data = $apiHandler->sendRequest(
            SpectatorV3::$_route
            . "/featured-games"
        );

        if (is_null($data)) {
            return null;
        } else {
            return new FeaturedGames($data);
        }
    }
}