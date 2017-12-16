<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\LoLStatus\Translation;

class TranslationTest extends TestCase
{
    public function testTranslation()
    {
        $translation = new Translation();
        $this->assertTrue(is_object($translation));
        $this->assertTrue($translation instanceof Translation);
    }

    public function testConstructor()
    {
        $translation = new Translation(
            ["locale" => "de_DE", "content" => "foo", "updated_at" => "DateA"]
        );
        $this->assertEquals("de_DE", $translation->getLocale());
        $this->assertEquals("foo", $translation->getContent());
        $this->assertEquals("DateA", $translation->getUpdatedAt());
    }

    public function testSetAndGetLocale()
    {
        $translation = new Translation();
        $translation->setLocale("de_DE");

        $this->assertEquals("de_DE", $translation->getLocale());

        $translation->setLocale("en_EN");

        $this->assertEquals("en_EN", $translation->getLocale());
    }

    public function testSetAndGetContent()
    {
        $translation = new Translation();
        $translation->setContent("foo");

        $this->assertEquals("foo", $translation->getContent());

        $translation->setContent("bar");

        $this->assertEquals("bar", $translation->getContent());
    }

    public function testSetAndGetUpdatedAt()
    {
        $translation = new Translation();
        $translation->setUpdatedAt("DateA");

        $this->assertEquals("DateA", $translation->getUpdatedAt());

        $translation->setUpdatedAt("DateB");

        $this->assertEquals("DateB", $translation->getUpdatedAt());
    }
}