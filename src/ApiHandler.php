<?php

namespace Phil404\RiotAPI;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ApiHandler
{
    private $_apiKey;
    private $_region;

    public function __construct(string $file = "apiKey.txt")
    {
        if (file_exists($file)) {
            $this->_apiKey = file_get_contents($file);
        } else {
            $this->_apiKey = null;
        }
    }

    public function sendRequest(string $route, array $array = [])
    {
        if(is_null($this->_region) || is_null($this->_apiKey)) return null;

        $array['api_key'] = $this->_apiKey;
        $query = $this->createQuery($route, $array);

        $client = new Client();

        try {
            $response = $client->request("GET", $query);
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }

        if($response->getStatusCode() != 200) return null;

        return json_decode($response->getBody(), true);
    }

    private function createQuery(string $route, array $array = [])
    {
        if (sizeof($array) == 0) return null;
        $parameters = "";
        foreach (array_keys($array) as $key) {
            if ($array[$key] != "") {
                if (strlen($parameters) > 0) $parameters .= "&";
                $parameters .= $key . "=" . $array[$key];
            }
        }

        return "https://" . $this->_region .
            ".api.riotgames.com/" . $route
            . "?" . $parameters;
    }

    /* --- Getter & Setter --- */

    public function getApiKey()
    {
        return $this->_apiKey;
    }

    public function setRegion(string $region)
    {
        $this->_region = $region;
    }

    public function getRegion()
    {
        return $this->_region;
    }
}