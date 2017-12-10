<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\Region;

class RegionTest extends TestCase
{

    public function testAllConstants()
    {
        $this->assertEquals("BR1", Region::BR);
        $this->assertEquals("EUN1", Region::EUNE);
        $this->assertEquals("EUW1", Region::EUW);
        $this->assertEquals("JP1", Region::JP);
        $this->assertEquals("KR", Region::KR);
        $this->assertEquals("LA1", Region::LAN);
        $this->assertEquals("LA2", Region::LAS);
        $this->assertEquals("NA1", Region::NA);
        $this->assertEquals("OC1", Region::OCE);
        $this->assertEquals("TR1", Region::TR);
        $this->assertEquals("RU", Region::RU);
        $this->assertEquals("PBE1", Region::PBE);
    }

    public function testGetRegionByString()
    {
        $this->assertEquals(Region::EUW, Region::getRegionByString("EUW"));
        $this->assertEquals(Region::EUNE, Region::getRegionByString("EUNE"));
        $this->assertNull(Region::getRegionByString("Foo"));
    }
}