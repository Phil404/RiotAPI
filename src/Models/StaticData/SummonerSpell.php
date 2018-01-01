<?php

namespace Phil404\RiotAPI\Models\StaticData;

class SummonerSpell
{
    private $_vars;
    private $_image;
    private $_costBurn;
    private $_cooldown;
    private $_effectBurn;
    private $_id;
    private $_cooldownBurn;
    private $_tooltip;
    private $_maxrank;
    private $_rangeBurn;
    private $_description;

    /**
     * @param array $vars
     */
    public function setVars(array $vars)
    {
        $qVars = [];
        foreach ($vars as $var) {
            $counter = sizeof($qVars);
            if ($var instanceof SpellVars) {
                $qVars[$counter] = $var;
            } else {
                $qVars[$counter] = new SpellVars($var);
            }
        }
        $this->_vars = $qVars;
    }

    /**
     * @return array[spellVars]
     */
    public function getVars()
    {
        return $this->_vars;
    }

    /**
     * @param array|Image $image
     */
    public function setImage($image)
    {
        if ($image instanceof Image) {
            $this->_image = $image;
        } else {
            $this->_image = new Image($image);
        }
    }

    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * @param string $costBurn
     */
    public function setCostBurn(string $costBurn)
    {
        $this->_costBurn = $costBurn;
    }

    /**
     * @return string
     */
    public function getCostBurn()
    {
        return $this->_costBurn;
    }

    /**
     * @param array[double] $cooldown
     */
    public function setCooldown(array $cooldown)
    {
        $this->_cooldown = $cooldown;
    }

    /**
     * @return array
     */
    public function getCooldown()
    {
        return $this->_cooldown;
    }

    /**
     * @param array[string] $effectBurn
     */
    public function setEffectBurn(array $effectBurn)
    {
        $this->_effectBurn = $effectBurn;
    }

    /**
     * @return array
     */
    public function getEffectBurn()
    {
        return $this->_effectBurn;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->_id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param string $cooldownBurn
     */
    public function setCooldownBurn(string $cooldownBurn)
    {
        $this->_cooldownBurn = $cooldownBurn;
    }

    /**
     * @return string
     */
    public function getCooldownBurn()
    {
        return $this->_cooldownBurn;
    }

    /**
     * @param string $tooltip
     */
    public function setTooltip(string $tooltip)
    {
        $this->_tooltip = $tooltip;
    }

    /**
     * @return string
     */
    public function getTooltip()
    {
        return $this->_tooltip;
    }

    /**
     * @param int $maxrank
     */
    public function setMaxrank(int $maxrank)
    {
        $this->_maxrank = $maxrank;
    }

    /**
     * @return int
     */
    public function getMaxrank()
    {
        return $this->_maxrank;
    }

    /**
     * @param string $rangeBurn
     */
    public function setRangeBurn(string $rangeBurn)
    {
        $this->_rangeBurn = $rangeBurn;
    }

    /**
     * @return string
     */
    public function getRangeBurn()
    {
        return $this->_rangeBurn;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->_description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }
}