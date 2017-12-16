<?php

namespace Phil404\RiotAPI;

use Phil404\RiotAPI\Models\LoLStatus\ShardData;

class LoLStatus
{
    private static $_route = "lol/status/v3/shard-data";

    public static function getStatus(string $region)
    {
        $apiHandler = new ApiHandler();
        $apiHandler->setRegion($region);
        $data = $apiHandler->sendRequest(LoLStatus::$_route);

        return is_null($data) ? null : self::transformJsonToShardData($data);
    }

    public static function transformJsonToShardData(array $data)
    {
        return sizeof($data) <= 0 ? null : new ShardData($data);
    }
}
