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
        $apiHandler = self::createApiHandlerTestCase();

        self::assertEquals($this->_apiKey, $apiHandler->getApiKey());

        self::deleteFileForTestCase();
    }

    public function testGetApiKeyWithoutFile()
    {
        $apiHandler = new ApiHandler("apikey.txt.test");

        self::assertNull($apiHandler->getApiKey());
    }

    public function testSetAndGetRegion()
    {
        $apiHandler = self::createApiHandlerTestCase();
        $apiHandler->setRegion(Region::EUW);

        self::assertEquals(Region::EUW, $apiHandler->getRegion());

        $apiHandler->setRegion(Region::BR);

        self::assertEquals(Region::BR, $apiHandler->getRegion());
    }

    public function testBuildQuery()
    {
        $apiHandler = self::createApiHandlerTestCase();
        $apiHandler->setRegion(Region::EUW);
        $expectedURL = "https://"
            . Region::EUW
            . ".api.riotgames.com/foo/bar?foo=bar&api_key="
            . $this->_apiKey;

        self::assertEquals(
            $expectedURL,
            $apiHandler->createQuery(
                "foo/bar",
                [
                    "foo" => "bar",
                    "api_key" => $this->_apiKey
                ]
            )
        );

        self::deleteFileForTestCase();
    }

    public function testBuildQueryWithoutArray()
    {
        $apiHandler = self::createApiHandlerTestCase();
        $apiHandler->setRegion(Region::EUW);

        self::assertNull($apiHandler->createQuery("foo/bar"));

        self::deleteFileForTestCase();
    }

    public function testSendRequest()
    {
        $apiHandler = self::createApiHandlerTestCase();
        $apiHandler->setRegion(Region::EUW);

        self::assertNull(
            $apiHandler->sendRequest("foo/bar", ["foo" => "bar"])
        );

        self::deleteFileForTestCase();
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