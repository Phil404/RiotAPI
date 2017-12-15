<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\RequestHelper;
use Phil404\RiotAPI\Models\Region;

class RequestHelperTest extends TestCase
{

    public function testCallApi()
    {
        $this->assertNull(
            RequestHelper::callApi("test")
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
        $expect = "https://"
            . Region::EUW
            . ".api.riotgames.com/lol/test/shard-data?api_key=Test123";

        $query = RequestHelper::buildApiQuery(
            Region::EUW,
            "lol/test/shard-data",
            ["api_key" => "Test123"]
        );

        $this->assertEquals($expect, $query);
    }

    public function testBuildApiQueryWithBrokenInformation()
    {
        $this->assertNull(
            RequestHelper::buildApiQuery("", "foo/bar", ["foo" => "bar"])
        );
        $this->assertNull(
            RequestHelper::buildApiQuery("foo", "", ["foo" => "bar"])
        );
        $this->assertNull(RequestHelper::buildApiQuery("foo", "bar", []));
    }

    public function testBuildApiQueryWithoutApiKey()
    {
        $this->assertNull(
            RequestHelper::buildApiQuery("foo", "bar", ["foo" => "bar"])
        );
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