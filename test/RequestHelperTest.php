<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\RequestHelper;

class RequestHelperTest extends TestCase
{

    public function testCallApi()
    {
        $this->assertTrue(
            RequestHelper::callApi() instanceof \GuzzleHttp\Psr7\Response
        );
    }
}