<?php

namespace Phil404\RiotAPI\Tests\Models\StaticData;

use Phil404\RiotAPI\Models\StaticData\Image;
use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\StaticData\ProfileIconDetails;

class ProfileIconDetailsTest extends TestCase
{
    public function testSetAndGetImage()
    {
        $object = new ProfileIconDetails(["image" => ["full" => "foo"]]);

        self::assertTrue($object->getImage() instanceof Image);

        $object->setImage(new Image());

        self::assertTrue($object->getImage() instanceof Image);
    }

    public function testSetAndGetId()
    {
        $object = new ProfileIconDetails(["id" => 1]);

        self::assertEquals(1, $object->getId());

        $object->setId(20);

        self::assertEquals(20, $object->getId());
    }
}