<?php

namespace Phil404\RiotAPI;

class ChampionMasteryV3
{
    private static $_route = "lol/champion-mastery/v3";

    public static function getScore(string $region, int $summonerId)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);
        $data = $apiHandler->sendRequest(
            ChampionMasteryV3::$_route
            . "/scores/by-summoner/"
            . $summonerId
        );
        return $data;
    }
}
