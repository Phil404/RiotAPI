<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\LoLStatus;

class LoLStatusTest extends TestCase
{

    public function testGetLoLStatus()
    {
        $response = LolStatus::getStatus();
        $this->assertTrue(
            $response instanceof \Phil404\RiotAPI\Models\LoLStatus\ShardData,
            "The response of LoLStatus is not the ShardData model."
        );
    }
}