<?php

namespace Phil404\RiotAPI;

use Phil404\RiotAPI\Models\League\LeagueList;
use Phil404\RiotAPI\Models\League\LeaguePosition;

class LeagueV3
{
    private static $_route = "lol/league/v3";

    public static function getChallengerLeague(string $region,
                                                    string $queue)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);
        $data = $apiHandler->sendRequest(
            LeagueV3::$_route
            . "/challengerleagues/by-queue/"
            . $queue
        );

        if (is_null($data)) {
            return null;
        } else {
            return new LeagueList($data);
        }
    }

    public static function getAllLeaguesForSummoner(string $region,
                                                    int $summonerId)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);
        $data = $apiHandler->sendRequest(
            LeagueV3::$_route
            . "/leagues/by-summoner/"
            . $summonerId
        );

        if (is_null($data)) {
            return null;
        } else {
            return new LeagueList($data);
        }
    }

    public static function getLeagueById(string $region, string $leagueId)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);
        $data = $apiHandler->sendRequest(
            LeagueV3::$_route
            . "/leagues/"
            . $leagueId
        );

        if (is_null($data)) {
            return null;
        } else {
            return new LeagueList($data);
        }
    }

    public static function getMasterLeague(string $region, string $queue)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);
        $data = $apiHandler->sendRequest(
            LeagueV3::$_route
            . "/masterleagues/by-queue/"
            . $queue
        );

        if (is_null($data)) {
            return null;
        } else {
            return new LeagueList($data);
        }
    }

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

        if (is_null($data)) {
            return null;
        } else {
            $qualifiedPositions = [];
            foreach ($data as $datum) {
                $qualifiedPositions[sizeof($qualifiedPositions)] =
                    new LeaguePosition($datum);
            }

            return $qualifiedPositions;
        }
    }
}