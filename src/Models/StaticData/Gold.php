<?php

namespace Phil404\RiotAPI\Models\StaticData;

class Gold
{
    private $_sell;
    private $_total;
    private $_base;
    private $_purchasable;

    public function __construct(array $args = [])
    {
        if (array_key_exists("sell", $args)) {
            $this->_sell = $args['sell'];
        }
        if (array_key_exists("total", $args)) {
            $this->_total = $args['total'];
        }
        if (array_key_exists("base", $args)) {
            $this->_base = $args['base'];
        }
        if (array_key_exists("purchasable", $args)) {
            $this->_purchasable = $args['purchasable'];
        }
    }

    /**
     * @param int $sell
     */
    public function setSell(int $sell)
    {
        $this->_sell = $sell;
    }

    /**
     * @return int
     */
    public function getSell()
    {
        return $this->_sell;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total)
    {
        $this->_total = $total;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->_total;
    }

    /**
     * @param int $base
     */
    public function setBase(int $base)
    {
        $this->_base = $base;
    }

    /**
     * @return int
     */
    public function getBase()
    {
        return $this->_base;
    }

    /**
     * @param boolean $purchasable
     */
    public function setPurchasable(bool $purchasable)
    {
        $this->_purchasable = $purchasable;
    }

    /**
     * @return boolean
     */
    public function isPurchasable()
    {
        return $this->_purchasable;
    }
}