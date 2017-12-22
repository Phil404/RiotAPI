<?php

namespace Phil404\RiotAPI\Tests\League;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\League\MiniSeries;

class MiniSeriesTest extends TestCase
{
    public function testConstructor()
    {
        $miniSeries = new MiniSeries(
            [
                "wins" => 100,
                "losses" => 101,
                "target" => 102,
                "progress" => "foo"
            ]
        );

        self::assertEquals(100, $miniSeries->getWins());
        self::assertEquals(101, $miniSeries->getLosses());
        self::assertEquals(102, $miniSeries->getTarget());
        self::assertEquals("foo", $miniSeries->getProgress());
    }

    public function testSetAndGetWins()
    {
        $miniSeries = new MiniSeries();
        $miniSeries->setWins(100);

        self::assertEquals(100, $miniSeries->getWins());

        $miniSeries->setWins(200);

        self::assertEquals(200, $miniSeries->getWins());
    }

    public function testSetAndGetLosses()
    {
        $miniSeries = new MiniSeries();
        $miniSeries->setLosses(100);

        self::assertEquals(100, $miniSeries->getLosses());

        $miniSeries->setLosses(200);

        self::assertEquals(200, $miniSeries->getLosses());
    }

    public function testSetAndGetTarget()
    {
        $miniSeries = new MiniSeries();
        $miniSeries->setTarget(100);

        self::assertEquals(100, $miniSeries->getTarget());

        $miniSeries->setTarget(200);

        self::assertEquals(200, $miniSeries->getTarget());
    }

    public function testSetAndGetProgress()
    {
        $miniSeries = new MiniSeries();
        $miniSeries->setProgress("foo");

        self::assertEquals("foo", $miniSeries->getProgress());

        $miniSeries->setProgress("bar");

        self::assertEquals("bar", $miniSeries->getProgress());
    }
}