<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\LoLStatus;

class LoLStatusTest extends TestCase
{

    public function testGetLoLStatus()
    {
        $apiKey = "RGAPI-fe4646a2-ba45-4177-8717-a4f452e61266";
        $this->assertEquals(
            "eu",
            LolStatus::getStatus("euw1", $apiKey)['region_tag']
        );
    }
}