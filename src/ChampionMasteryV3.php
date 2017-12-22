<?php

namespace Phil404\RiotAPI;

use Phil404\RiotAPI\Models\ChampionMastery\ChampionMastery;

class ChampionMasteryV3
{
    private static $_route = "lol/champion-mastery/v3";

    public static function getMasteryByChampion(string $region,
                                                int $summonerId,
                                                int $championId)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);
        $data = $apiHandler->sendRequest(
            ChampionMasteryV3::$_route
            . "/champion-masteries/by-summoner/"
            . $summonerId
            . "/by-champion/"
            . $championId
        );
        return new ChampionMastery($data);
    }

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
