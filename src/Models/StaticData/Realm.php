<?php

namespace Phil404\RiotAPI\Models\StaticData;

class Realm
{
    private $_lg;
    private $_dd;
    private $_l;
    private $_n;
    private $_profileiconmax;
    private $_store;
    private $_v;
    private $_cdn;
    private $_css;

    public function __construct(array $args = [])
    {
        if (array_key_exists("lg", $args)) {
            $this->_lg = $args['lg'];
        }
        if (array_key_exists("dd", $args)) {
            $this->_dd = $args['dd'];
        }
        if (array_key_exists("l", $args)) {
            $this->_l = $args['l'];
        }
        if (array_key_exists("n", $args)) {
            $this->_n = $args['n'];
        }
        if (array_key_exists("profileiconmax", $args)) {
            $this->_profileiconmax = $args['profileiconmax'];
        }
        if (array_key_exists("store", $args)) {
            $this->_store = $args['store'];
        }
        if (array_key_exists("v", $args)) {
            $this->_v = $args['v'];
        }
        if (array_key_exists("cdn", $args)) {
            $this->_cdn = $args['cdn'];
        }
        if (array_key_exists("css", $args)) {
            $this->_css = $args['css'];
        }
    }

    /**
     * @param string $lg
     */
    public function setLg(string $lg)
    {
        $this->_lg = $lg;
    }

    /**
     * @return string
     */
    public function getLg()
    {
        return $this->_lg;
    }

    /**
     * @param string $dd
     */
    public function setDd(string $dd)
    {
        $this->_dd = $dd;
    }

    /**
     * @retur string
     */
    public function getDd()
    {
        return $this->_dd;
    }

    /**
     * @param string $l
     */
    public function setL(string $l)
    {
        $this->_l = $l;
    }

    /**
     * @return string
     */
    public function getL()
    {
        return $this->_l;
    }

    /**
     * @param array $n
     */
    public function setN(array $n)
    {
        $this->_n = $n;
    }

    /**
     * @return array
     */
    public function getN()
    {
        return $this->_n;
    }

    /**
     * @param int $profileiconmax
     */
    public function setProfileiconmax(int $profileiconmax)
    {
        $this->_profileiconmax = $profileiconmax;
    }

    /**
     * @return int
     */
    public function getProfileiconmax()
    {
        return $this->_profileiconmax;
    }

    /**
     * @param string $store
     */
    public function setStore(string $store)
    {
        $this->_store = $store;
    }

    /**
     * @return string
     */
    public function getStore()
    {
        return $this->_store;
    }

    /**
     * @param string $v
     */
    public function setV(string $v)
    {
        $this->_v = $v;
    }

    /**
     * @return string
     */
    public function getV()
    {
        return $this->_v;
    }

    /**
     * @param string $cdn
     */
    public function setCdn(string $cdn)
    {
        $this->_cdn = $cdn;
    }

    /**
     * @return string
     */
    public function getCdn()
    {
        return $this->_cdn;
    }

    /**
     * @param string $css
     */
    public function setCss(string $css)
    {
        $this->_css = $css;
    }

    /**
     * @return string
     */
    public function getCss()
    {
        return $this->_css;
    }
}