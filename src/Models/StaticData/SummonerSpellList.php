<?php

namespace Phil404\RiotAPI\Models\StaticData;

class SummonerSpellList
{
    private $_data;
    private $_version;
    private $_type;

    public function __construct(array $args = [])
    {
        if (array_key_exists("data", $args)) {
            $this->setData($args['data']);
        }
        if (array_key_exists("version", $args)) {
            $this->_version = $args['version'];
        }
        if (array_key_exists("type", $args)) {
            $this->_type = $args['type'];
        }
    }

    /**
     * @param array $data
     */
    public function setData(array $data)
    {
        $qData = [];
        foreach ($data as $key => $datum) {
            if ($datum instanceof SummonerSpell) {
                $qData[$key] = $datum;
            } else {
                $qData[$key] = new SummonerSpell($datum);
            }
        }
        $this->_data = $qData;
    }

    /**
     * @return array[SummonerSpell]
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->_version = $version;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->_version;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->_type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->_type;
    }
}