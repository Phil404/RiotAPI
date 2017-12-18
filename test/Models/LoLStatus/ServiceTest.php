<?php

namespace Phil404\RiotAPI\Tests\Models\LoLStatus;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\LoLStatus\Service;
use Phil404\RiotAPI\Models\LoLStatus\Incident;

class ServiceTest extends TestCase
{
    public function testService()
    {
        $service = new Service();
        self::assertTrue(is_object($service));
    }

    public function testConstructor()
    {
        $incident = new Incident();

        $service = new Service(
            ["status" => "online",
            "name" => "Store",
            "slug" => "store",
            "incidents" => [$incident]]
        );

        self::assertEquals("online", $service->getStatus());
        self::assertEquals("Store", $service->getName());
        self::assertEquals("store", $service->getSlug());
        self::assertEquals([$incident], $service->getIncidents());
    }

    public function testConstructorWithIncidentsAsArray()
    {
        $service = new Service(
            ["status" => "online",
            "incidents" => [["id" => 123]]]
        );

        self::assertEquals(1, sizeof($service->getIncidents()));
        self::assertTrue($service->getIncidents()[0] instanceof Incident);

        $incident = (object) $service->getIncidents()[0];

        self::assertEquals(123, $incident->getId());
    }

    public function testConstructorWithoutIncidents()
    {
        $service = new Service(["incidents" => []]);

        self::assertEquals(0, sizeof($service->getIncidents()));
    }

    public function testSetAndGetStatus()
    {
        $service = new Service();
        $service->setStatus("Running");

        self::assertEquals("Running", $service->getStatus());

        $service->setStatus("Offline");

        self::assertEquals("Offline", $service->getStatus());
    }

    public function testSetAndGetName()
    {
        $service = new Service();
        $service->setName("Game");

        self::assertEquals("Game", $service->getName());

        $service->setName("Store");

        self::assertEquals("Store", $service->getName());
    }

    public function testSetAndGetSlug()
    {
        $service = new Service();
        $service->setSlug("game");

        self::assertEquals("game", $service->getSlug());

        $service->setSlug("store");

        self::assertEquals("store", $service->getSlug());
    }

    public function testSetAndGetIncidents()
    {
        $incidentA = new Incident();
        $incidentB = new Incident();

        $service = new Service();
        $service->setIncidents([$incidentA]);

        self::assertEquals([$incidentA], $service->getIncidents());

        $service->setIncidents([$incidentA, $incidentB]);

        self::assertEquals([$incidentA, $incidentB], $service->getIncidents());
    }
}