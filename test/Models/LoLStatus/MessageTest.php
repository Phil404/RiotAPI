<?php

namespace Phil404\RiotAPI\Tests\Models\LoLStatus;

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\LoLStatus\Message;
use Phil404\RiotAPI\Models\LoLStatus\Translation;

class MessageTest extends TestCase
{
    public function testMessage()
    {
        $message = new Message();
        self::assertTrue(is_object($message));
    }

    public function testConstructor()
    {
        $translation = new Translation();
        $message = new Message(
            ["severity" => "foo",
            "author" => "bar",
            "created_at" => "DateA",
            "updated_at" => "DateA",
            "content" => "foo",
            "id" => 123,
            "translations" => [$translation]]
        );

        self::assertEquals("foo", $message->getSeverity());
        self::assertEquals("bar", $message->getAuthor());
        self::assertEquals("DateA", $message->getCreatedAt());
        self::assertEquals("DateA", $message->getUpdatedAt());
        self::assertEquals("foo", $message->getContent());
        self::assertEquals(123, $message->getId());
        self::assertEquals([$translation], $message->getTranslations());
    }

    public function testConstructorWithTranslationAsArray()
    {
        $message = new Message(
            ["severity" => "foo",
            "translations" => [["locale" => "de_DE"]]]
        );

        self::assertTrue(sizeof($message->getTranslations()) == 1);
        self::assertTrue(
            $message->getTranslations()[0] instanceof Translation
        );

        $translation = (object) $message->getTranslations()[0];

        self::assertEquals("de_DE", $translation->getLocale());
    }

    public function testConstructorWithEmptyTranslation()
    {
        $message = new Message(["translations" => []]);

        self::assertTrue(sizeof($message->getTranslations()) == 0);
    }

    public function testSetAndGetSeverity()
    {
        $message = new Message();
        $message->setSeverity("foo");

        self::assertEquals("foo", $message->getSeverity());

        $message->setSeverity("bar");

        self::assertEquals("bar", $message->getSeverity());
    }

    public function testSetAndGetAuthor()
    {
        $message = new Message();
        $message->setAuthor("foo");

        self::assertEquals("foo", $message->getAuthor());

        $message->setAuthor("bar");

        self::assertEquals("bar", $message->getAuthor());
    }

    public function testSetAndGetCreatedAt()
    {
        $message = new Message();
        $message->setCreatedAt("DateA");

        self::assertEquals("DateA", $message->getCreatedAt());

        $message->setCreatedAt("DateB");

        self::assertEquals("DateB", $message->getCreatedAt());
    }

    public function testSetAndGetUpdatedAt()
    {
        $message = new Message();
        $message->setUpdatedAt("DateA");

        self::assertEquals("DateA", $message->getUpdatedAt());

        $message->setUpdatedAt("DateB");

        self::assertEquals("DateB", $message->getUpdatedAt());
    }

    public function testSetAndGetContent()
    {
        $message = new Message();
        $message->setContent("foo");

        self::assertEquals("foo", $message->getContent());

        $message->setContent("bar");

        self::assertEquals("bar", $message->getContent());
    }

    public function testSetAndGetId()
    {
        $message = new Message();
        $message->setId(123);

        self::assertEquals(123, $message->getId());

        $message->setId(789);

        self::assertEquals(789, $message->getId());
    }

    public function testSetAndGetTranslations()
    {
        $translationA = new Translation();
        $translationB = new Translation();

        $message = new Message();
        $message->setTranslations([$translationA]);

        self::assertEquals([$translationA], $message->getTranslations());

        $message->setTranslations([$translationA, $translationB]);

        self::assertEquals(
            [$translationA, $translationB],
            $message->getTranslations()
        );
    }
}
