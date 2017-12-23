<?php

namespace Phil404\RiotAPI\Tests\Models\Spectator;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\Spectator\Observer;

class ObserverTest extends TestCase
{
    public function testConstructor()
    {
        $observer = new Observer(
            [
                "encryptionKey" => "foo"
            ]
        );

        self::assertEquals("foo", $observer->getEncryptionKey());
    }

    public function testSetAndGetEncryptionKey()
    {
        $observer = new Observer();
        $observer->setEncryptionKey("foo");

        self::assertEquals("foo", $observer->getEncryptionKey());

        $observer->setEncryptionKey("bar");

        self::assertEquals("bar", $observer->getEncryptionKey());
    }
}