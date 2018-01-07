<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use Phil404\RiotAPI\Models\StaticData\InventoryDataStats;
use PHPUnit\Framework\TestCase;

class InventoryDataStatsTest extends TestCase
{
    public function testSetAndGetPercentCritDamageMod()
    {
        $object = new InventoryDataStats(["PercentCritDamageMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentCritDamageMod());

        $object->setPercentCritDamageMod(4.56);

        self::assertEquals(4.56, $object->getPercentCritDamageMod());
    }

    public function testSetAndGetPercentSpellBlockMod()
    {
        $object = new InventoryDataStats(["PercentSpellBlockMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentSpellBlockMod());

        $object->setPercentSpellBlockMod(4.56);

        self::assertEquals(4.56, $object->getPercentSpellBlockMod());
    }

    public function testSetAndGetPercentHPRegenMod()
    {
        $object = new InventoryDataStats(["PercentHPRegenMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentHPRegenMod());

        $object->setPercentHPRegenMod(4.56);

        self::assertEquals(4.56, $object->getPercentHPRegenMod());
    }

    public function testSetAndGetPercentMovementSpeedMod()
    {
        $object = new InventoryDataStats(["PercentMovementSpeedMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentMovementSpeedMod());

        $object->setPercentMovementSpeedMod(4.56);

        self::assertEquals(4.56, $object->getPercentMovementSpeedMod());
    }

    public function testSetAndGetFlatSpellBlockMod()
    {
        $object = new InventoryDataStats(["FlatSpellBlockMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatSpellBlockMod());

        $object->setFlatSpellBlockMod(4.56);

        self::assertEquals(4.56, $object->getFlatSpellBlockMod());
    }

    public function testSetAndGetFlatCritDamageMod()
    {
        $object = new InventoryDataStats(["FlatCritDamageMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatCritDamageMod());

        $object->setFlatCritDamageMod(4.56);

        self::assertEquals(4.56, $object->getFlatCritDamageMod());
    }

    public function testSetAndGetFlatEnergyPoolMod()
    {
        $object = new InventoryDataStats(["FlatEnergyPoolMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatEnergyPoolMod());

        $object->setFlatEnergyPoolMod(4.56);

        self::assertEquals(4.56, $object->getFlatEnergyPoolMod());
    }

    public function testSetAndGetPercentLifeStealMod()
    {
        $object = new InventoryDataStats(["PercentLifeStealMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentLifeStealMod());

        $object->setPercentLifeStealMod(4.56);

        self::assertEquals(4.56, $object->getPercentLifeStealMod());
    }

    public function testSetAndGetFlatMPPoolMod()
    {
        $object = new InventoryDataStats(["FlatMPPoolMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatMPPoolMod());

        $object->setFlatMPPoolMod(4.56);

        self::assertEquals(4.56, $object->getFlatMPPoolMod());
    }

    public function testSetAndGetFlatMovementSpeedMod()
    {
        $object = new InventoryDataStats(["FlatMovementSpeedMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatMovementSpeedMod());

        $object->setFlatMovementSpeedMod(4.56);

        self::assertEquals(4.56, $object->getFlatMovementSpeedMod());
    }

    public function testSetAndGetPercentAttackSpeedMod()
    {
        $object = new InventoryDataStats(["PercentAttackSpeedMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentAttackSpeedMod());

        $object->setPercentAttackSpeedMod(4.56);

        self::assertEquals(4.56, $object->getPercentAttackSpeedMod());
    }

    public function testSetAndGetFlatBlockMod()
    {
        $object = new InventoryDataStats(["FlatBlockMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatBlockMod());

        $object->setFlatBlockMod(4.56);

        self::assertEquals(4.56, $object->getFlatBlockMod());
    }

    public function testSetAndGetPercentBlockMod()
    {
        $object = new InventoryDataStats(["PercentBlockMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentBlockMod());

        $object->setPercentBlockMod(4.56);

        self::assertEquals(4.56, $object->getPercentBlockMod());
    }

    public function testSetAndGetFlatEnergyRegenMod()
    {
        $object = new InventoryDataStats(["FlatEnergyRegenMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatEnergyRegenMod());

        $object->setFlatEnergyRegenMod(4.56);

        self::assertEquals(4.56, $object->getFlatEnergyRegenMod());
    }

    public function testSetAndGetPercentSpellVampMod()
    {
        $object = new InventoryDataStats(["PercentSpellVampMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentSpellVampMod());

        $object->setPercentSpellVampMod(4.56);

        self::assertEquals(4.56, $object->getPercentSpellVampMod());
    }

    public function testSetAndGetFlatMPRegenMod()
    {
        $object = new InventoryDataStats(["FlatMPRegenMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatMPRegenMod());

        $object->setFlatMPRegenMod(4.56);

        self::assertEquals(4.56, $object->getFlatMPRegenMod());
    }

    public function testSetAndGetPercentDodgeMod()
    {
        $object = new InventoryDataStats(["PercentDodgeMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentDodgeMod());

        $object->setPercentDodgeMod(4.56);

        self::assertEquals(4.56, $object->getPercentDodgeMod());
    }

    public function testSetAndGetFlatAttackSpeedMod()
    {
        $object = new InventoryDataStats(["FlatAttackSpeedMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatAttackSpeedMod());

        $object->setFlatAttackSpeedMod(4.56);

        self::assertEquals(4.56, $object->getFlatAttackSpeedMod());
    }

    public function testSetAndGetFlatArmorMod()
    {
        $object = new InventoryDataStats(["FlatArmorMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatArmorMod());

        $object->setFlatArmorMod(4.56);

        self::assertEquals(4.56, $object->getFlatArmorMod());
    }

    public function testSetAndGetFlatHPRegenMod()
    {
        $object = new InventoryDataStats(["FlatHPRegenMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatHPRegenMod());

        $object->setFlatHPRegenMod(4.56);

        self::assertEquals(4.56, $object->getFlatHPRegenMod());
    }

    public function testSetAndGetPercentMagicDamageMod()
    {
        $object = new InventoryDataStats(["PercentMagicDamageMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentMagicDamageMod());

        $object->setPercentMagicDamageMod(4.56);

        self::assertEquals(4.56, $object->getPercentMagicDamageMod());
    }

    public function testSetAndGetPercentMPPoolMod()
    {
        $object = new InventoryDataStats(["PercentMPPoolMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentMPPoolMod());

        $object->setPercentMPPoolMod(4.56);

        self::assertEquals(4.56, $object->getPercentMPPoolMod());
    }

    public function testSetAndGetFlatMagicDamageMod()
    {
        $object = new InventoryDataStats(["FlatMagicDamageMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatMagicDamageMod());

        $object->setFlatMagicDamageMod(4.56);

        self::assertEquals(4.56, $object->getFlatMagicDamageMod());
    }

    public function testSetAndGetPercentMPRegenMod()
    {
        $object = new InventoryDataStats(["PercentMPRegenMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentMPRegenMod());

        $object->setPercentMPRegenMod(4.56);

        self::assertEquals(4.56, $object->getPercentMPRegenMod());
    }

    public function testSetAndGetPercentPhysicalDamageMod()
    {
        $object = new InventoryDataStats(["PercentPhysicalDamageMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentPhysicalDamageMod());

        $object->setPercentPhysicalDamageMod(4.56);

        self::assertEquals(4.56, $object->getPercentPhysicalDamageMod());
    }

    public function testSetAndGetFlatPhysicalDamageMod()
    {
        $object = new InventoryDataStats(["FlatPhysicalDamageMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatPhysicalDamageMod());

        $object->setFlatPhysicalDamageMod(4.56);

        self::assertEquals(4.56, $object->getFlatPhysicalDamageMod());
    }

    public function testSetAndGetPercentHPPoolMod()
    {
        $object = new InventoryDataStats(["PercentHPPoolMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentHPPoolMod());

        $object->setPercentHPPoolMod(4.56);

        self::assertEquals(4.56, $object->getPercentHPPoolMod());
    }

    public function testSetAndGetPercentArmorMod()
    {
        $object = new InventoryDataStats(["PercentArmorMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentArmorMod());

        $object->setPercentArmorMod(4.56);

        self::assertEquals(4.56, $object->getPercentArmorMod());
    }

    public function testSetAndGetPercentCritChanceMod()
    {
        $object = new InventoryDataStats(["PercentCritChanceMod" => 1.23]);

        self::assertEquals(1.23, $object->getPercentCritChanceMod());

        $object->setPercentCritChanceMod(4.56);

        self::assertEquals(4.56, $object->getPercentCritChanceMod());
    }

    public function testSetAndGetPercentEXPBonus()
    {
        $object = new InventoryDataStats(["PercentEXPBonus" => 1.23]);

        self::assertEquals(1.23, $object->getPercentEXPBonus());

        $object->setPercentEXPBonus(4.56);

        self::assertEquals(4.56, $object->getPercentEXPBonus());
    }

    public function testSetAndGetFlatHPPoolMod()
    {
        $object = new InventoryDataStats(["FlatHPPoolMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatHPPoolMod());

        $object->setFlatHPPoolMod(4.56);

        self::assertEquals(4.56, $object->getFlatHPPoolMod());
    }

    public function testSetAndGetFlatCritChanceMod()
    {
        $object = new InventoryDataStats(["FlatCritChanceMod" => 1.23]);

        self::assertEquals(1.23, $object->getFlatCritChanceMod());

        $object->setFlatCritChanceMod(4.56);

        self::assertEquals(4.56, $object->getFlatCritChanceMod());
    }

    public function testSetAndGetFlatEXPBonus()
    {
        $object = new InventoryDataStats(["FlatEXPBonus" => 1.23]);

        self::assertEquals(1.23, $object->getFlatEXPBonus());

        $object->setFlatEXPBonus(4.56);

        self::assertEquals(4.56, $object->getFlatEXPBonus());
    }
}