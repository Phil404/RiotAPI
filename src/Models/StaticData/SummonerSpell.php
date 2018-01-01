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
    private $_effect;
    private $_key;
    private $_leveltip;
    private $_modes;
    private $_resource;
    private $_name;
    private $_costType;
    private $_sanitizedDescription;
    private $_sanitizedTooltip;
    private $_range;
    private $_cost;
    private $_summonerLevel;

    public function __construct(array $args = [])
    {
        if (array_key_exists("vars", $args)) {
            $this->setVars($args['vars']);
        }
        if (array_key_exists("image", $args)) {
            $this->setImage($args['image']);
        }
        if (array_key_exists("costBurn", $args)) {
            $this->_costBurn = $args['costBurn'];
        }
        if (array_key_exists("cooldown", $args)) {
            $this->_cooldown = $args['cooldown'];
        }
        if (array_key_exists("effectBurn", $args)) {
            $this->_effectBurn = $args['effectBurn'];
        }
        if (array_key_exists("id", $args)) {
            $this->_id = $args['id'];
        }
        if (array_key_exists("cooldownBurn", $args)) {
            $this->_cooldownBurn = $args['cooldownBurn'];
        }
        if (array_key_exists("tooltip", $args)) {
            $this->_tooltip = $args['tooltip'];
        }
        if (array_key_exists("maxrank", $args)) {
            $this->_maxrank = $args['maxrank'];
        }
        if (array_key_exists("rangeBurn", $args)) {
            $this->_rangeBurn = $args['rangeBurn'];
        }
        if (array_key_exists("description", $args)) {
            $this->_description = $args['description'];
        }
        if (array_key_exists("effect", $args)) {
            $this->_effect = $args['effect'];
        }
        if (array_key_exists("key", $args)) {
            $this->_key = $args['key'];
        }
        if (array_key_exists("leveltip", $args)) {
            $this->setLeveltip($args['leveltip']);
        }
        if (array_key_exists("modes", $args)) {
            $this->_modes = $args['modes'];
        }
        if (array_key_exists("resource", $args)) {
            $this->_resource = $args['resource'];
        }
        if (array_key_exists("name", $args)) {
            $this->_name = $args['name'];
        }
        if (array_key_exists("costType", $args)) {
            $this->_costType = $args['costType'];
        }
        if (array_key_exists("sanitizedDescription", $args)) {
            $this->_sanitizedDescription = $args['sanitizedDescription'];
        }
        if (array_key_exists("sanitizedTooltip", $args)) {
            $this->_sanitizedTooltip = $args['sanitizedTooltip'];
        }
        if (array_key_exists("range", $args)) {
            $this->_range = $args['range'];
        }
        if (array_key_exists("cost", $args)) {
            $this->_cost = $args['cost'];
        }
        if (array_key_exists("summonerLevel", $args)) {
            $this->_summonerLevel = $args['summonerLevel'];
        }
    }

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

    /**
     * @param array[array[double]] $effect
     */
    public function setEffect(array $effect)
    {
        $this->_effect = $effect;
    }

    /**
     * @return array
     */
    public function getEffect()
    {
        return $this->_effect;
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

    /**
     * @param array|LevelTip $leveltip
     */
    public function setLeveltip($leveltip)
    {
        if ($leveltip instanceof LevelTip) {
            $this->_leveltip = $leveltip;
        } else {
            $this->_leveltip = new LevelTip($leveltip);
        }
    }

    /**
     * @return LevelTip;
     */
    public function getLeveltip()
    {
        return $this->_leveltip;
    }

    /**
     * @param array[string] $modes
     */
    public function setModes(array $modes)
    {
        $this->_modes = $modes;
    }

    /**
     * @return array
     */
    public function getModes()
    {
        return $this->_modes;
    }

    /**
     * @param string $resource
     */
    public function setResource(string $resource)
    {
        $this->_resource = $resource;
    }

    /**
     * @return string
     */
    public function getResource()
    {
        return $this->_resource;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $costType
     */
    public function setCostType(string $costType)
    {
        $this->_costType = $costType;
    }

    /**
     * @return string
     */
    public function getCostType()
    {
        return $this->_costType;
    }

    /**
     * @param string $sanitizedDescription
     */
    public function setSanitizedDescription(string $sanitizedDescription)
    {
        $this->_sanitizedDescription = $sanitizedDescription;
    }

    /**
     * @return string
     */
    public function getSanitizedDescription()
    {
        return $this->_sanitizedDescription;
    }

    /**
     * @param string $sanitizedTooltip
     */
    public function setSanitizedTooltip(string $sanitizedTooltip)
    {
        $this->_sanitizedTooltip = $sanitizedTooltip;
    }

    /**
     * @return string
     */
    public function getSanitizedTooltip()
    {
        return $this->_sanitizedTooltip;
    }

    /**
     * @param string|array $range
     */
    public function setRange($range)
    {
        $this->_range = $range;
    }

    /**
     * @return mixed
     */
    public function getRange()
    {
        return $this->_range;
    }

    /**
     * @param array[int] $cost
     */
    public function setCost(array $cost)
    {
        $this->_cost = $cost;
    }

    /**
     * @return array
     */
    public function getCost()
    {
        return $this->_cost;
    }

    /**
     * @param int $summonerLevel
     */
    public function setSummonerLevel(int $summonerLevel)
    {
        $this->_summonerLevel = $summonerLevel;
    }

    /**
     * @return int
     */
    public function getSummonerLevel()
    {
        return $this->_summonerLevel;
    }
}