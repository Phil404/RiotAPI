<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\LoLStatus\Service;
use Phil404\RiotAPI\Models\LoLStatus\Incident;

class ServiceTest extends TestCase
{
    public function testService()
    {
        $service = new Service;
        $this->assertTrue(is_object($service));
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

        $this->assertEquals("online", $service->getStatus());
        $this->assertEquals("Store", $service->getName());
        $this->assertEquals("store", $service->getSlug());
        $this->assertEquals([$incident], $service->getIncidents());
    }

    public function testConstructorWithIncidentsAsArray()
    {
        $service = new Service(
            ["status" => "online",
            "incidents" => [["id" => 123]]]
        );

        $this->assertTrue($service->getIncidents()[0] instanceof Incident);
        $this->assertEquals(123, $service->getIncidents()[0]->getId());
        $this->assertEquals(1, sizeof($service->getIncidents()));
    }

    public function testConstructorWithoutIncidents()
    {
        $service = new Service(["incidents" => []]);

        $this->assertEquals(0, sizeof($service->getIncidents()));
    }

    public function testSetAndGetStatus()
    {
        $service = new Service();
        $service->setStatus("Running");

        $this->assertEquals("Running", $service->getStatus());

        $service->setStatus("Offline");

        $this->assertEquals("Offline", $service->getStatus());
    }

    public function testSetAndGetName()
    {
        $service = new Service();
        $service->setName("Game");

        $this->assertEquals("Game", $service->getName());

        $service->setName("Store");

        $this->assertEquals("Store", $service->getName());
    }

    public function testSetAndGetSlug()
    {
        $service = new Service();
        $service->setSlug("game");

        $this->assertEquals("game", $service->getSlug());

        $service->setSlug("store");

        $this->assertEquals("store", $service->getSlug());
    }

    public function testSetAndGetIncidents()
    {
        $incidentA = new Incident();
        $incidentB = new Incident();

        $service = new Service();
        $service->setIncidents([$incidentA]);

        $this->assertEquals([$incidentA], $service->getIncidents());

        $service->setIncidents([$incidentA, $incidentB]);

        $this->assertEquals([$incidentA, $incidentB], $service->getIncidents());
    }
}