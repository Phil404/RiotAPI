<?php

namespace Phil404\RiotAPI;

use Phil404\RiotAPI\Models\LoLStatus\ShardData;
use Phil404\RiotAPI\Models\Region;

class LoLStatus
{

    public static function getStatus(string $region)
    {
        $return = new ShardData();

        return($return);
    }

    public static function transformJsonToShardData(array $data)
    {
        return sizeof($data) <= 0 ? null : new ShardData($data);
    }
}
