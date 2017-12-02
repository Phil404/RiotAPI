<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Dummy;

class TestDummy extends TestCase{

    public function testAdd(){
        $this->assertEquals(5, Dummy::add(2, 3));
    }
}
