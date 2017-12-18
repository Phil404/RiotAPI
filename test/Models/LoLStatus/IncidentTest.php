<?php

namespace Phil404\RiotAPI\Tests\Models\LoLStatus;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\LoLStatus\Incident;
use Phil404\RiotAPI\Models\LoLStatus\Message;

class IncidentTest extends TestCase
{
    public function testIncident()
    {
        $incident = new Incident();
        self::assertTrue(is_object($incident));
    }

    public function testConstructor()
    {
        $message = new Message();

        $incident = new Incident(
            ["active" => true,
            "created_at" => "DateA",
            "id" => 123,
            "updates" => [$message]]
        );

        self::assertTrue($incident->getActive());
        self::assertEquals("DateA", $incident->getCreatedAt());
        self::assertEquals(123, $incident->getId());
        self::assertEquals([$message], $incident->getUpdates());
    }

    public function testConstructorWithMessageAsArray()
    {
        $incident = new Incident(
            ["active" => true,
            "updates" => [["author" => "Hans"]]]
        );

        self::assertEquals(1, sizeof($incident->getUpdates()));
        self::assertTrue($incident->getUpdates()[0] instanceof Message);

        $update = (object) $incident->getUpdates()[0];

        self::assertEquals("Hans", $update->getAuthor());
    }

    public function testConstructorWithoutMessage()
    {
        $incident = new Incident(["updates" => []]);

        self::assertEquals(0, sizeof($incident->getUpdates()));
    }

    public function testSetAndGetActive()
    {
        $incident = new Incident();
        $incident->setActive(true);

        self::assertTrue($incident->getActive());

        $incident->setActive(false);

        self::assertFalse($incident->getActive());
    }

    public function testSetAndGetCreatedAt()
    {
        $incident = new Incident();
        $incident->setCreatedAt("DateA");

        self::assertEquals("DateA", $incident->getCreatedAt());

        $incident->setCreatedAt("DateB");

        self::assertEquals("DateB", $incident->getCreatedAt());
    }

    public function testSetAndGetId()
    {
        $incident = new Incident();
        $incident->setId(123);

        self::assertEquals(123, $incident->getId());

        $incident->setId(789);

        self::assertEquals(789, $incident->getId());
    }

    public function testSetAndGetUpdates()
    {
        $messageA = new Message();
        $messageB = new Message();

        $incident = new Incident();
        $incident->setUpdates([$messageA]);

        self::assertEquals([$messageA], $incident->getUpdates());

        $incident->setUpdates([$messageA, $messageB]);

        self::assertEquals([$messageA, $messageB], $incident->getUpdates());
    }
}
