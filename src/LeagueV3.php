<?php

namespace Phil404\RiotAPI;

use Phil404\RiotAPI\Models\League\LeaguePosition;

class LeagueV3
{
    private static $_route = "lol/league/v3";

    public static function getAllLeaguePositionsForSummoner(string $region,
                                                     int $summonerId)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);
        $data = $apiHandler->sendRequest(
            LeagueV3::$_route
            . "/positions/by-summoner/"
            . $summonerId
        );

        $qualifiedPositions = [];
        foreach ($data as $datum) {
            $qualifiedPositions[sizeof($qualifiedPositions)] =
                new LeaguePosition($datum);
        }

        return $qualifiedPositions;
    }
}