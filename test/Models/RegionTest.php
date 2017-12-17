<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\Region;

class RegionTest extends TestCase
{

    public function testAllConstants()
    {
        self::assertEquals("BR1", Region::BR);
        self::assertEquals("EUN1", Region::EUNE);
        self::assertEquals("EUW1", Region::EUW);
        self::assertEquals("JP1", Region::JP);
        self::assertEquals("KR", Region::KR);
        self::assertEquals("LA1", Region::LAN);
        self::assertEquals("LA2", Region::LAS);
        self::assertEquals("NA1", Region::NA);
        self::assertEquals("OC1", Region::OCE);
        self::assertEquals("TR1", Region::TR);
        self::assertEquals("RU", Region::RU);
        self::assertEquals("PBE1", Region::PBE);
    }

    public function testGetRegionByString()
    {
        self::assertEquals(Region::EUW, Region::getRegionByString("EUW"));
        self::assertEquals(Region::EUNE, Region::getRegionByString("EUNE"));
        self::assertNull(Region::getRegionByString("Foo"));
    }
}