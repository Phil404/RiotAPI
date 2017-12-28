<?php

namespace Phil404\RiotAPI;

class LoLStaticDataV3
{
    private static $_route = "/lol/static-data/v3/";

    public static function getVersions(string $region)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);

        $data = $apiHandler->sendRequest(
            LoLStaticDataV3::$_route
            . "versions"
        );

        return $data;
    }
}