<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\ApiHandler;
use Phil404\RiotAPI\Models\Region;

class ApiHandlerTest extends TestCase
{
    private $_filename = "apiKey.txt.test";
    private $_apiKey = "TestApiKey-123";

    public function testGetApiKey()
    {
        $apiHandler = $this->createApiHandlerTestCase();

        $this->assertEquals($this->_apiKey, $apiHandler->getApiKey());

        $this->deleteFileForTestCase();
    }

    public function testGetApiKeyWithoutFile()
    {
        $apiHandler = new ApiHandler("apikey.txt.test");

        $this->assertNull($apiHandler->getApiKey());
    }

    public function testSetAndGetRegion()
    {
        $apiHandler = $this->createApiHandlerTestCase();
        $apiHandler->setRegion(Region::EUW);

        $this->assertEquals(Region::EUW, $apiHandler->getRegion());

        $apiHandler->setRegion(Region::BR);

        $this->assertEquals(Region::BR, $apiHandler->getRegion());
    }

    public function testBuildQuery()
    {
        $apiHandler = $this->createApiHandlerTestCase();
        $apiHandler->setRegion(Region::EUW);
        $expectedURL = "https://"
            . Region::EUW
            . ".api.riotgames.com/foo/bar?foo=bar&api_key="
            . $this->_apiKey;

        $this->assertEquals(
            $expectedURL,
            $apiHandler->createQuery(
                "foo/bar",
                [
                    "foo" => "bar",
                    "api_key" => $this->_apiKey
                ]
            )
        );

        $this->deleteFileForTestCase();
    }

    public function testBuildQueryWithoutArray()
    {
        $apiHandler = $this->createApiHandlerTestCase();
        $apiHandler->setRegion(Region::EUW);

        $this->assertNull($apiHandler->createQuery("foo/bar"));

        $this->deleteFileForTestCase();
    }

    public function testSendRequest()
    {
        $apiHandler = $this->createApiHandlerTestCase();
        $apiHandler->setRegion(Region::EUW);

        $this->assertNull(
            $apiHandler->sendRequest("foo/bar", ["foo" => "bar"])
        );

        $this->deleteFileForTestCase();
    }

    /* --- Helper Functions --- */

    private function createApiHandlerTestCase()
    {
        $testFile = fopen($this->_filename, "w");
        fwrite($testFile, $this->_apiKey);
        fclose($testFile);

        return new ApiHandler($this->_filename);
    }

    private function deleteFileForTestCase()
    {
        unlink($this->_filename);
    }
}