<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\LoLStatus\Translation;

class TranslationTest extends TestCase
{
    public function testTranslation()
    {
        $translation = new Translation();
        self::assertTrue(is_object($translation));
        self::assertTrue($translation instanceof Translation);
    }

    public function testConstructor()
    {
        $translation = new Translation(
            ["locale" => "de_DE", "content" => "foo", "updated_at" => "DateA"]
        );
        self::assertEquals("de_DE", $translation->getLocale());
        self::assertEquals("foo", $translation->getContent());
        self::assertEquals("DateA", $translation->getUpdatedAt());
    }

    public function testSetAndGetLocale()
    {
        $translation = new Translation();
        $translation->setLocale("de_DE");

        self::assertEquals("de_DE", $translation->getLocale());

        $translation->setLocale("en_EN");

        self::assertEquals("en_EN", $translation->getLocale());
    }

    public function testSetAndGetContent()
    {
        $translation = new Translation();
        $translation->setContent("foo");

        self::assertEquals("foo", $translation->getContent());

        $translation->setContent("bar");

        self::assertEquals("bar", $translation->getContent());
    }

    public function testSetAndGetUpdatedAt()
    {
        $translation = new Translation();
        $translation->setUpdatedAt("DateA");

        self::assertEquals("DateA", $translation->getUpdatedAt());

        $translation->setUpdatedAt("DateB");

        self::assertEquals("DateB", $translation->getUpdatedAt());
    }
}