<?php
/**
 * Created by IntelliJ IDEA.
 * User: phili
 * Date: 29.11.2017
 * Time: 19:37
 */

use PHPUnit\Framework\TestCase;

require "../src/dummy.php";

class Test extends TestCase
{
    public function testAdd(){
        $this->assertEquals(5, add(2, 3));
    }
}
