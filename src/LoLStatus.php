<?php

namespace Phil404\RiotAPI;

use GuzzleHttp\Client;

class LoLStatus
{
    public static function getStatus($region, String $apiKey)
    {
        $client = new Client(
            [
                "base_uri" => "https://".$region.".api.riotgames.com"
            ]
        );
        $response = $client->get(
            '/lol/status/v3/shard-data',
            [
                'query' => [
                    "api_key" => $apiKey
                ]
            ]
        );

        return(json_decode($response->getBody(), true));
    }
}