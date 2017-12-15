<?php

namespace Phil404\RiotAPI;

use GuzzleHttp\Psr7\Response;

class RequestHelper
{

    public static function callApi()
    {
        return new Response();
    }

    /**
     * @param string $file
     * @return string
     */
    public static function getApiKey(string $file)
    {
        if (file_exists($file)) {
            $keyFile = file_get_contents($file);
        } else {
            $keyFile = null;
        }
        return $keyFile;
    }

    public static function buildApiQuery(string $region,
                                         string $route,
                                         array $args)
    {
        if (!empty($region)
            && !empty($route)
            && sizeof($args) >= 1
            && array_key_exists("api_key", $args)) {
            return "https://"
                . $region
                . ".api.riotgames.com/"
                . $route
                . "?"
                . self::convertArrayQueryReady($args);
        } else {
            return null;
        }
    }

    public static function convertArrayQueryReady(array $args)
    {
        $convertedArray = "";
        foreach (array_keys($args) as $key) {
            if ($args[$key] != "") {
                if (strlen($convertedArray) > 0) $convertedArray .= "&";
                $convertedArray .= $key . "=" . $args[$key];
            }
        }
        return $convertedArray;
    }
}