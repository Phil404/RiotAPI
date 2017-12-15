<?php

namespace Phil404\RiotAPI;

use Phil404\RiotAPI\Models\LoLStatus\ShardData;

class LoLStatus
{
    private static $_route = "lol/status/v3/shard-data";

    public static function getStatus(string $region)
    {
        $query = RequestHelper::buildApiQuery(
            $region,
            LoLStatus::$_route,
            ["api_key" => RequestHelper::getApiKey("apiKey.txt")]
        );
        $data = json_decode(RequestHelper::callApi($query), true);
        return(self::transformJsonToShardData($data));
    }

    public static function transformJsonToShardData(array $data)
    {
        return sizeof($data) <= 0 ? null : new ShardData($data);
    }
}
