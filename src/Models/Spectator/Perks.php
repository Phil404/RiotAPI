<?php

namespace Phil404\RiotAPI\Models\Spectator;

class Perks
{
    private $_perkStyle;
    private $_perkIds;
    private $_perkSubStyle;

    public function __construct(array $args = [])
    {
        if (array_key_exists("perkStyle", $args)) {
            $this->_perkStyle = $args['perkStyle'];
        }
        if (array_key_exists("perkIds", $args)) {
            $this->_perkIds = $args['perkIds'];
        }
        if (array_key_exists("perkSubStyle", $args)) {
            $this->_perkSubStyle = $args['perkSubStyle'];
        }
    }

    /**
     * @param int $perkStyle
     */
    public function setPerkStyle(int $perkStyle)
    {
        $this->_perkStyle = $perkStyle;
    }

    /**
     * @return int
     */
    public function getPerkStyle()
    {
        return $this->_perkStyle;
    }

    /**
     * @param array $perkIds
     */
    public function setPerkIds(array $perkIds)
    {
        $this->_perkIds = $perkIds;
    }

    /**
     * @return array
     */
    public function getPerkIds()
    {
        return $this->_perkIds;
    }

    /**
     * @param int $perkSubStyle
     */
    public function setPerkSubStyle(int $perkSubStyle)
    {
        $this->_perkSubStyle = $perkSubStyle;
    }

    /**
     * @return int
     */
    public function getPerkSubStyle()
    {
        return $this->_perkSubStyle;
    }
}