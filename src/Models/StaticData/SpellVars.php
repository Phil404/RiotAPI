<?php

namespace Phil404\RiotAPI\Models\StaticData;

class SpellVars
{
    private $_ranksWith;
    private $_dyn;
    private $_link;
    private $_coeff;
    private $_key;

    public function __construct(array $args = [])
    {
        if (array_key_exists("ranksWith", $args)) {
            $this->_ranksWith = $args['ranksWith'];
        }
        if (array_key_exists("dyn", $args)) {
            $this->_dyn = $args['dyn'];
        }
        if (array_key_exists("link", $args)) {
            $this->_link = $args['link'];
        }
        if (array_key_exists("coeff", $args)) {
            $this->_coeff = $args['coeff'];
        }
        if (array_key_exists("key", $args)) {
            $this->_key = $args['key'];
        }
    }

    /**
     * @param string $ranksWith
     */
    public function setRanksWith(string $ranksWith)
    {
        $this->_ranksWith = $ranksWith;
    }

    /**
     * @return string
     */
    public function getRanksWith()
    {
        return $this->_ranksWith;
    }

    /**
     * @param string $dyn
     */
    public function setDyn(string $dyn)
    {
        $this->_dyn = $dyn;
    }

    /**
     * @return string
     */
    public function getDyn()
    {
        return $this->_dyn;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link)
    {
        $this->_link = $link;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->_link;
    }

    /**
     * @param array[double] $coeff
     */
    public function setCoeff(array $coeff)
    {
        $this->_coeff = $coeff;
    }

    /**
     * @return array[double]
     */
    public function getCoeff()
    {
        return $this->_coeff;
    }

    /**
     * @param string $key
     */
    public function setKey(string $key)
    {
        $this->_key = $key;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->_key;
    }
}