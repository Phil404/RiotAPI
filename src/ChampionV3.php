<?php

namespace Phil404\RiotAPI;

use Phil404\RiotAPI\Models\Champion\Champion;

class ChampionV3
{
    private static $_route = "lol/platform/v3/champions";

    public static function getChampions(string $region)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);
        $data = $apiHandler->sendRequest(ChampionV3::$_route)['champions'];
        $collectedChampions = [];
        for ($i = 0; $i < sizeof($data[0]); $i++) {
            $collectedChampions[$i] = new Champion($data[$i]);
        }
        return $collectedChampions;
    }

    public static function getChampionById(string $region, int $championId)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);
        $data = $apiHandler->sendRequest(
            ChampionV3::$_route
            . "/"
            . $championId
        );
        return new Champion($data);
    }
}