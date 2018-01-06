<?php

namespace Phil404\RiotAPI;

use Phil404\RiotAPI\Models\StaticData\Realm;
use Phil404\RiotAPI\Models\StaticData\SummonerSpell;
use Phil404\RiotAPI\Models\StaticData\SummonerSpellList;

class LoLStaticDataV3
{
    private static $_route = "lol/static-data/v3/";

    public static function getRealms(string $region)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);

        $data = $apiHandler->sendRequest(
            LoLStaticDataV3::$_route
            . "realms"
        );

        if (!is_null($data)) {
            $data = new Realm($data);
        }
        return $data;
    }

    public static function getSummonerSpells(string $region, array $parameters)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);

        if (!empty($parameters['tags'])) {
            $forQuery['tags'] = $parameters['tags'];
        } else {
            $forQuery['tags'] = "all";
        }
        if (!empty($parameters['dataById'])) {
            $forQuery['dataById'] = $parameters['dataById'];
        } else {
            $forQuery['dataById'] = true;
        }
        if (!empty($parameters['locale'])) {
            $forQuery['locale'] = $parameters['locale'];
        }
        if (!empty($parameters['version'])) {
            $forQuery['version'] = $parameters['locale'];
        }

        $data = $apiHandler->sendRequest(
            LoLStaticDataV3::$_route
            . "summoner-spells",
            $forQuery
        );

        if (!is_null($data)) {
            $data = new SummonerSpellList($data);
        }
        return $data;
    }

    public static function getSummonerSpellById(string $region,
                                                int $id,
                                                array $parameters)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);

        if (!empty($parameters['tags'])) {
            $forQuery['tags'] = $parameters['tags'];
        } else {
            $forQuery['tags'] = "all";
        }
        if (!empty($parameters['locale'])) {
            $forQuery['locale'] = $parameters['locale'];
        }
        if (!empty($parameters['version'])) {
            $forQuery['version'] = $parameters['version'];
        }

        $data = $apiHandler->sendRequest(
            LoLStaticDataV3::$_route
            . "summoner-spells/"
            . $id,
            $forQuery
        );

        if (!is_null($data)) {
            $data = new SummonerSpell($data);
        }
        return $data;
    }

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