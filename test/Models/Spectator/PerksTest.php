<?php

namespace Phil404\RiotAPI\Tests\Models\Spectator;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\Spectator\Perks;

class PerksTest extends TestCase
{
    public function testConstructor()
    {
        $perks = new Perks(
            [
                "perkStyle" => 1,
                "perkIds" => [1,2,3],
                "perkSubStyle" => 2
            ]
        );

        self::assertEquals(1, $perks->getPerkStyle());
        self::assertEquals(3, sizeof($perks->getPerkIds()));
        self::assertEquals(2, $perks->getPerkSubStyle());
    }

    public function testSetAndGetPerkStyle()
    {
        $perks = new Perks();
        $perks->setPerkStyle(1);

        self::assertEquals(1, $perks->getPerkStyle());

        $perks->setPerkStyle(2);

        self::assertEquals(2, $perks->getPerkStyle());
    }

    public function testSetAndGetPerkIds()
    {
        $perks = new Perks();
        $perks->setPerkIds([1,2,3]);

        self::assertTrue(is_array($perks->getPerkIds()));
        self::assertEquals(3, sizeof($perks->getPerkIds()));
        self::assertEquals(1, $perks->getPerkIds()[0]);

        $perks->setPerkIds([1,2]);

        self::assertEquals(2, sizeof($perks->getPerkIds()));
    }

    public function testSetAndGetPerkSubStyle()
    {
        $perks = new Perks();
        $perks->setPerkSubStyle(1);

        self::assertEquals(1, $perks->getPerkSubStyle());

        $perks->setPerkSubStyle(2);

        self::assertEquals(2, $perks->getPerkSubStyle());
    }
}