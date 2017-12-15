<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\RequestHelper;
use Phil404\RiotAPI\Models\Region;

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

    public function testBuildApiQuery()
    {
        $array = [
            "region" => Region::EUW,
            "route" => "lol/test/shard-data",
            "api_key" => "Test123"
        ];
        $expect = "https://" . Region::EUW .
            ".api.riotgames.com/lol/test/shard-data?api_key=Test123";

        $this->assertEquals($expect, RequestHelper::buildApiQuery($array));
    }

    public function testBuildApiQueryWithBrokenInformation()
    {
        $arrayWithoutRegion = ["route" => "lol/test", "api_key" => "nom"];
        $arrayWithoutRoute = ["region" => Region::EUW, "api_key" => "nom"];
        $arrayWithoutApiKey = ["region" => Region::EUW, "route" => "lol/test"];

        $this->assertNull(RequestHelper::buildApiQuery($arrayWithoutRegion));
        $this->assertNull(RequestHelper::buildApiQuery($arrayWithoutRoute));
        $this->assertNull(RequestHelper::buildApiQuery($arrayWithoutApiKey));
    }

    public function testConvertQueryReady()
    {
        $array = ["test" => "A", "foo" => "bar", "random" => "number"];

        $this->assertEquals(
            "test=A&foo=bar&random=number",
            RequestHelper::convertArrayQueryReady($array)
        );
    }

    public function testConvertQueryReadyWithEmptyArray()
    {
        $this->assertEmpty(RequestHelper::convertArrayQueryReady([]));
    }

    public function testConvertQueryReadyWithEmptyValue()
    {
        $array = ["foo" => ""];

        $this->assertEmpty(RequestHelper::convertArrayQueryReady($array));
    }
}