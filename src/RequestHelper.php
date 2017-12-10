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
}