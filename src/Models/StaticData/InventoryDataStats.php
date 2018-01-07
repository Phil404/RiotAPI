<?php

namespace Phil404\RiotAPI\Models\StaticData;

class InventoryDataStats
{
    private $_percentCritDamageMod;
    private $_percentSpellBlockMod;
    private $_percentHPRegenMod;
    private $_percentMovementSpeedMod;
    private $_flatSpellBlockMod;
    private $_flatCritDamageMod;
    private $_flatEnergyPoolMod;
    private $_percentLifeStealMod;
    private $_flatMPPoolMod;
    private $_flatMovementSpeedMod;
    private $_percentAttackSpeedMod;
    private $_flatBlockMod;
    private $_percentBlockMod;
    private $_flatEnergyRegenMod;
    private $_percentSpellVampMod;
    private $_flatMPRegenMod;
    private $_percentDodgeMod;
    private $_flatAttackSpeedMod;
    private $_flatArmorMod;
    private $_flatHPRegenMod;
    private $_percentMagicDamageMod;
    private $_percentMPPoolMod;
    private $_flatMagicDamageMod;
    private $_percentMPRegenMod;
    private $_percentPhysicalDamageMod;
    private $_flatPhysicalDamageMod;
    private $_percentHPPoolMod;
    private $_percentArmorMod;
    private $_percentCritChanceMod;
    private $_percentEXPBonus;
    private $_flatHPPoolMod;
    private $_flatCritChanceMod;
    private $_flatEXPBonus;

    public function __construct(array $args = [])
    {
        if (array_key_exists("PercentCritDamageMod", $args)) {
            $this->_percentCritDamageMod = $args['PercentCritDamageMod'];
        }
        if (array_key_exists("PercentSpellBlockMod", $args)) {
            $this->_percentSpellBlockMod = $args['PercentSpellBlockMod'];
        }
        if (array_key_exists("PercentHPRegenMod", $args)) {
            $this->_percentHPRegenMod = $args['PercentHPRegenMod'];
        }
        if (array_key_exists("PercentMovementSpeedMod", $args)) {
            $this->_percentMovementSpeedMod = $args['PercentMovementSpeedMod'];
        }
        if (array_key_exists("FlatSpellBlockMod", $args)) {
            $this->_flatSpellBlockMod = $args['FlatSpellBlockMod'];
        }
        if (array_key_exists("FlatCritDamageMod", $args)) {
            $this->_flatCritDamageMod = $args['FlatCritDamageMod'];
        }
        if (array_key_exists("FlatEnergyPoolMod", $args)) {
            $this->_flatEnergyPoolMod = $args['FlatEnergyPoolMod'];
        }
        if (array_key_exists("PercentLifeStealMod", $args)) {
            $this->_percentLifeStealMod = $args['PercentLifeStealMod'];
        }
        if (array_key_exists("FlatMPPoolMod", $args)) {
            $this->_flatMPPoolMod = $args['FlatMPPoolMod'];
        }
        if (array_key_exists("FlatMovementSpeedMod", $args)) {
            $this->_flatMovementSpeedMod = $args['FlatMovementSpeedMod'];
        }
        if (array_key_exists("PercentAttackSpeedMod", $args)) {
            $this->_percentAttackSpeedMod = $args['PercentAttackSpeedMod'];
        }
        if (array_key_exists("FlatBlockMod", $args)) {
            $this->_flatBlockMod = $args['FlatBlockMod'];
        }
        if (array_key_exists("PercentBlockMod", $args)) {
            $this->_percentBlockMod = $args['PercentBlockMod'];
        }
        if (array_key_exists("FlatEnergyRegenMod", $args)) {
            $this->_flatEnergyRegenMod = $args['FlatEnergyRegenMod'];
        }
        if (array_key_exists("PercentSpellVampMod", $args)) {
            $this->_percentSpellVampMod = $args['PercentSpellVampMod'];
        }
        if (array_key_exists("FlatMPRegenMod", $args)) {
            $this->_flatMPRegenMod = $args['FlatMPRegenMod'];
        }
        if (array_key_exists("PercentDodgeMod", $args)) {
            $this->_percentDodgeMod = $args['PercentDodgeMod'];
        }
        if (array_key_exists("FlatAttackSpeedMod", $args)) {
            $this->_flatAttackSpeedMod = $args['FlatAttackSpeedMod'];
        }
        if (array_key_exists("FlatArmorMod", $args)) {
            $this->_flatArmorMod = $args['FlatArmorMod'];
        }
        if (array_key_exists("FlatHPRegenMod", $args)) {
            $this->_flatHPRegenMod = $args['FlatHPRegenMod'];
        }
        if (array_key_exists("PercentMagicDamageMod", $args)) {
            $this->_percentMagicDamageMod = $args['PercentMagicDamageMod'];
        }
        if (array_key_exists("PercentMPPoolMod", $args)) {
            $this->_percentMPPoolMod = $args['PercentMPPoolMod'];
        }
        if (array_key_exists("FlatMagicDamageMod", $args)) {
            $this->_flatMagicDamageMod = $args['FlatMagicDamageMod'];
        }
        if (array_key_exists("PercentMPRegenMod", $args)) {
            $this->_percentMPRegenMod = $args['PercentMPRegenMod'];
        }
        if (array_key_exists("PercentPhysicalDamageMod", $args)) {
            $this->_percentPhysicalDamageMod =
                $args['PercentPhysicalDamageMod'];
        }
        if (array_key_exists("FlatPhysicalDamageMod", $args)) {
            $this->_flatPhysicalDamageMod = $args['FlatPhysicalDamageMod'];
        }
        if (array_key_exists("PercentHPPoolMod", $args)) {
            $this->_percentHPPoolMod = $args['PercentHPPoolMod'];
        }
        if (array_key_exists("PercentArmorMod", $args)) {
            $this->_percentArmorMod = $args['PercentArmorMod'];
        }
        if (array_key_exists("PercentCritChanceMod", $args)) {
            $this->_percentCritChanceMod = $args['PercentCritChanceMod'];
        }
        if (array_key_exists("PercentEXPBonus", $args)) {
            $this->_percentEXPBonus = $args['PercentEXPBonus'];
        }
        if (array_key_exists("FlatHPPoolMod", $args)) {
            $this->_flatHPPoolMod = $args['FlatHPPoolMod'];
        }
        if (array_key_exists("FlatCritChanceMod", $args)) {
            $this->_flatCritChanceMod = $args['FlatCritChanceMod'];
        }
        if (array_key_exists("FlatEXPBonus", $args)) {
            $this->_flatEXPBonus = $args['FlatEXPBonus'];
        }
    }

    /**
     * @param float $percentCritDamageMod
     */
    public function setPercentCritDamageMod(float $percentCritDamageMod)
    {
        $this->_percentCritDamageMod = $percentCritDamageMod;
    }

    /**
     * @return float
     */
    public function getPercentCritDamageMod()
    {
        return $this->_percentCritDamageMod;
    }

    /**
     * @param float $percentSpellBlockMod
     */
    public function setPercentSpellBlockMod(float $percentSpellBlockMod)
    {
        $this->_percentSpellBlockMod = $percentSpellBlockMod;
    }

    /**
     * @return float
     */
    public function getPercentSpellBlockMod()
    {
        return $this->_percentSpellBlockMod;
    }

    /**
     * @param float $percentHPRegenMod
     */
    public function setPercentHPRegenMod(float $percentHPRegenMod)
    {
        $this->_percentHPRegenMod = $percentHPRegenMod;
    }

    /**
     * @return float
     */
    public function getPercentHPRegenMod()
    {
        return $this->_percentHPRegenMod;
    }

    /**
     * @param float $percentMovementSpeedMod
     */
    public function setPercentMovementSpeedMod(float $percentMovementSpeedMod)
    {
        $this->_percentMovementSpeedMod = $percentMovementSpeedMod;
    }

    /**
     * @return float
     */
    public function getPercentMovementSpeedMod()
    {
        return $this->_percentMovementSpeedMod;
    }

    /**
     * @param float $flatSpellBlockMod
     */
    public function setFlatSpellBlockMod(float $flatSpellBlockMod)
    {
        $this->_flatSpellBlockMod = $flatSpellBlockMod;
    }

    /**
     * @return float
     */
    public function getFlatSpellBlockMod()
    {
        return $this->_flatSpellBlockMod;
    }

    /**
     * @param float $flatCritDamageMod
     */
    public function setFlatCritDamageMod(float $flatCritDamageMod)
    {
        $this->_flatCritDamageMod = $flatCritDamageMod;
    }

    /**
     * @return float
     */
    public function getFlatCritDamageMod()
    {
        return $this->_flatCritDamageMod;
    }

    /**
     * @param float $flatEnergyPoolMod
     */
    public function setFlatEnergyPoolMod(float $flatEnergyPoolMod)
    {
        $this->_flatEnergyPoolMod = $flatEnergyPoolMod;
    }

    /**
     * @return float
     */
    public function getFlatEnergyPoolMod()
    {
        return $this->_flatEnergyPoolMod;
    }

    /**
     * @param float $percentLifeStealMod
     */
    public function setPercentLifeStealMod(float $percentLifeStealMod)
    {
        $this->_percentLifeStealMod = $percentLifeStealMod;
    }

    /**
     * @return float
     */
    public function getPercentLifeStealMod()
    {
        return $this->_percentLifeStealMod;
    }

    /**
     * @param float $flatMPPoolMod
     */
    public function setFlatMPPoolMod(float $flatMPPoolMod)
    {
        $this->_flatMPPoolMod = $flatMPPoolMod;
    }

    /**
     * @return float
     */
    public function getFlatMPPoolMod()
    {
        return $this->_flatMPPoolMod;
    }

    /**
     * @param float $flatMovementSpeedMod
     */
    public function setFlatMovementSpeedMod(float $flatMovementSpeedMod)
    {
        $this->_flatMovementSpeedMod = $flatMovementSpeedMod;
    }

    /**
     * @return float
     */
    public function getFlatMovementSpeedMod()
    {
        return $this->_flatMovementSpeedMod;
    }

    /**
     * @param float $percentAttackSpeedMod
     */
    public function setPercentAttackSpeedMod(float $percentAttackSpeedMod)
    {
        $this->_percentAttackSpeedMod = $percentAttackSpeedMod;
    }

    /**
     * @return float
     */
    public function getPercentAttackSpeedMod()
    {
        return $this->_percentAttackSpeedMod;
    }

    /**
     * @param float $flatBlockMod
     */
    public function setFlatBlockMod(float $flatBlockMod)
    {
        $this->_flatBlockMod = $flatBlockMod;
    }

    /**
     * @return float
     */
    public function getFlatBlockMod()
    {
        return $this->_flatBlockMod;
    }

    /**
     * @param float $percentBlockMod
     */
    public function setPercentBlockMod(float $percentBlockMod)
    {
        $this->_percentBlockMod = $percentBlockMod;
    }

    /**
     * @return float
     */
    public function getPercentBlockMod()
    {
        return $this->_percentBlockMod;
    }

    /**
     * @param float $flatEnergyRegenMod
     */
    public function setFlatEnergyRegenMod(float $flatEnergyRegenMod)
    {
        $this->_flatEnergyRegenMod = $flatEnergyRegenMod;
    }

    /**
     * @return float
     */
    public function getFlatEnergyRegenMod()
    {
        return $this->_flatEnergyRegenMod;
    }

    /**
     * @param float $percentSpellVampMod
     */
    public function setPercentSpellVampMod(float $percentSpellVampMod)
    {
        $this->_percentSpellVampMod = $percentSpellVampMod;
    }

    /**
     * @return float
     */
    public function getPercentSpellVampMod()
    {
        return $this->_percentSpellVampMod;
    }

    /**
     * @param float $flatMPRegenMod
     */
    public function setFlatMPRegenMod(float $flatMPRegenMod)
    {
        $this->_flatMPRegenMod = $flatMPRegenMod;
    }

    /**
     * @return float
     */
    public function getFlatMPRegenMod()
    {
        return $this->_flatMPRegenMod;
    }

    /**
     * @param float $percentDodgeMod
     */
    public function setPercentDodgeMod(float $percentDodgeMod)
    {
        $this->_percentDodgeMod = $percentDodgeMod;
    }

    /**
     * @return float
     */
    public function getPercentDodgeMod()
    {
        return $this->_percentDodgeMod;
    }

    /**
     * @param float $flatAttackSpeedMod
     */
    public function setFlatAttackSpeedMod(float $flatAttackSpeedMod)
    {
        $this->_flatAttackSpeedMod = $flatAttackSpeedMod;
    }

    /**
     * @return float
     */
    public function getFlatAttackSpeedMod()
    {
        return $this->_flatAttackSpeedMod;
    }

    /**
     * @param float $flatArmorMod
     */
    public function setFlatArmorMod(float $flatArmorMod)
    {
        $this->_flatArmorMod = $flatArmorMod;
    }

    /**
     * @return float
     */
    public function getFlatArmorMod()
    {
        return $this->_flatArmorMod;
    }

    /**
     * @param float $flatHPRegenMod
     */
    public function setFlatHPRegenMod(float $flatHPRegenMod)
    {
        $this->_flatHPRegenMod = $flatHPRegenMod;
    }

    /**
     * @return float
     */
    public function getFlatHPRegenMod()
    {
        return $this->_flatHPRegenMod;
    }

    /**
     * @param float $percentMagicDamageMod
     */
    public function setPercentMagicDamageMod(float $percentMagicDamageMod)
    {
        $this->_percentMagicDamageMod = $percentMagicDamageMod;
    }

    /**
     * @return float
     */
    public function getPercentMagicDamageMod()
    {
        return $this->_percentMagicDamageMod;
    }

    /**
     * @param float $percentMPPoolMod
     */
    public function setPercentMPPoolMod(float $percentMPPoolMod)
    {
        $this->_percentMPPoolMod = $percentMPPoolMod;
    }

    /**
     * @return float
     */
    public function getPercentMPPoolMod()
    {
        return $this->_percentMPPoolMod;
    }

    /**
     * @param float $flatMagicDamageMod
     */
    public function setFlatMagicDamageMod(float $flatMagicDamageMod)
    {
        $this->_flatMagicDamageMod = $flatMagicDamageMod;
    }

    /**
     * @return float
     */
    public function getFlatMagicDamageMod()
    {
        return $this->_flatMagicDamageMod;
    }

    /**
     * @param float $percentMPRegenMod
     */
    public function setPercentMPRegenMod(float $percentMPRegenMod)
    {
        $this->_percentMPRegenMod = $percentMPRegenMod;
    }

    /**
     * @return float
     */
    public function getPercentMPRegenMod()
    {
        return $this->_percentMPRegenMod;
    }

    /**
     * @param float $percentPhysicalDamageMod
     */
    public function setPercentPhysicalDamageMod(float $percentPhysicalDamageMod)
    {
        $this->_percentPhysicalDamageMod = $percentPhysicalDamageMod;
    }

    /**
     * @return float
     */
    public function getPercentPhysicalDamageMod()
    {
        return $this->_percentPhysicalDamageMod;
    }

    /**
     * @param float $flatPhysicalDamageMod
     */
    public function setFlatPhysicalDamageMod(float $flatPhysicalDamageMod)
    {
        $this->_flatPhysicalDamageMod = $flatPhysicalDamageMod;
    }

    /**
     * @return float
     */
    public function getFlatPhysicalDamageMod()
    {
        return $this->_flatPhysicalDamageMod;
    }

    /**
     * @param float $percentHPPoolMod
     */
    public function setPercentHPPoolMod(float $percentHPPoolMod)
    {
        $this->_percentHPPoolMod = $percentHPPoolMod;
    }

    /**
     * @return float
     */
    public function getPercentHPPoolMod()
    {
        return $this->_percentHPPoolMod;
    }

    /**
     * @param float $percentArmorMod
     */
    public function setPercentArmorMod(float $percentArmorMod)
    {
        $this->_percentArmorMod = $percentArmorMod;
    }

    /**
     * @return float
     */
    public function getPercentArmorMod()
    {
        return $this->_percentArmorMod;
    }

    /**
     * @param float $percentCritChanceMod
     */
    public function setPercentCritChanceMod(float $percentCritChanceMod)
    {
        $this->_percentCritChanceMod = $percentCritChanceMod;
    }

    /**
     * @return float
     */
    public function getPercentCritChanceMod()
    {
        return $this->_percentCritChanceMod;
    }

    /**
     * @param float $percentEXPBonus
     */
    public function setPercentEXPBonus(float $percentEXPBonus)
    {
        $this->_percentEXPBonus = $percentEXPBonus;
    }

    /**
     * @return float
     */
    public function getPercentEXPBonus()
    {
        return $this->_percentEXPBonus;
    }

    /**
     * @param float $flatHPPoolMod
     */
    public function setFlatHPPoolMod(float $flatHPPoolMod)
    {
        $this->_flatHPPoolMod = $flatHPPoolMod;
    }

    /**
     * @return float
     */
    public function getFlatHPPoolMod()
    {
        return $this->_flatHPPoolMod;
    }

    /**
     * @param float $flatCritChanceMod
     */
    public function setFlatCritChanceMod(float $flatCritChanceMod)
    {
        $this->_flatCritChanceMod = $flatCritChanceMod;
    }

    /**
     * @return float
     */
    public function getFlatCritChanceMod()
    {
        return $this->_flatCritChanceMod;
    }

    /**
     * @param float $flatEXPBonus
     */
    public function setFlatEXPBonus(float $flatEXPBonus)
    {
        $this->_flatEXPBonus = $flatEXPBonus;
    }

    /**
     * @return float
     */
    public function getFlatEXPBonus()
    {
        return $this->_flatEXPBonus;
    }
}