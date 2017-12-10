<?php

namespace Phil404\RiotAPI;

use Phil404\RiotAPI\Models\LoLStatus\ShardData;

class LoLStatus
{

    public static function getStatus()
    {
        $return = new ShardData();

        return($return);
    }

    public static function transformJsonToShardData(array $json)
    {
        return sizeof($json) < 1 ? null : new ShardData($json);
    }
}
