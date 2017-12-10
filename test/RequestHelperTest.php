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

    public function testGetApiKey()
    {
        $testFile = fopen("apiKey.txt.test", "w");
        fwrite($testFile, "TestApiKey-123");
        fclose($testFile);

        $this->assertEquals(
            "TestApiKey-123",
            RequestHelper::getApiKey("apiKey.txt.test")
        );

        unlink("apiKey.txt.test");
    }

    public function testGetApiKeyWithoutFile()
    {
        $this->assertNull(RequestHelper::getApiKey("apiKey.txt.test"));
    }
}