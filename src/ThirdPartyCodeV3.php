<?php

namespace Phil404\RiotAPI;

class ThirdPartyCodeV3
{
    private static $_route = "lol/platform/v3/third-party-code/by-summoner/";

    public static function getBySummonerId(string $region, int $summonerId)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);
        return $apiHandler->sendRequest(
            ThirdPartyCodeV3::$_route
            . $summonerId
        );
    }
}