<?php

use PHPUnit\Framework\TestCase;
use Phil404\RiotAPI\Models\LoLStatus\Message;
use Phil404\RiotAPI\Models\LoLStatus\Translation;

class MessageTest extends TestCase
{
    public function testMessage()
    {
        $message = new Message();
        $this->assertTrue(is_object($message));
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

        $this->assertEquals("foo", $message->getSeverity());
        $this->assertEquals("bar", $message->getAuthor());
        $this->assertEquals("DateA", $message->getCreatedAt());
        $this->assertEquals("DateA", $message->getUpdatedAt());
        $this->assertEquals("foo", $message->getContent());
        $this->assertEquals(123, $message->getId());
        $this->assertEquals([$translation], $message->getTranslations());
    }

    public function testConstructorWithTranslationAsArray()
    {
        $message = new Message(
            ["severity" => "foo",
            "translations" => [["locale" => "de_DE"]]]
        );

        $this->assertTrue(
            $message->getTranslations()[0] instanceof Translation
        );
        $this->assertTrue(sizeof($message->getTranslations()) == 1);
        $this->assertEquals(
            "de_DE",
            $message->getTranslations()[0]->getLocale()
        );
    }

    public function testConstructorWithEmptyTranslation()
    {
        $message = new Message(["translations" => []]);

        $this->assertTrue(sizeof($message->getTranslations()) == 0);
    }

    public function testSetAndGetSeverity()
    {
        $message = new Message();
        $message->setSeverity("foo");

        $this->assertEquals("foo", $message->getSeverity());

        $message->setSeverity("bar");

        $this->assertEquals("bar", $message->getSeverity());
    }

    public function testSetAndGetAuthor()
    {
        $message = new Message();
        $message->setAuthor("foo");

        $this->assertEquals("foo", $message->getAuthor());

        $message->setAuthor("bar");

        $this->assertEquals("bar", $message->getAuthor());
    }

    public function testSetAndGetCreatedAt()
    {
        $message = new Message();
        $message->setCreatedAt("DateA");

        $this->assertEquals("DateA", $message->getCreatedAt());

        $message->setCreatedAt("DateB");

        $this->assertEquals("DateB", $message->getCreatedAt());
    }

    public function testSetAndGetUpdatedAt()
    {
        $message = new Message();
        $message->setUpdatedAt("DateA");

        $this->assertEquals("DateA", $message->getUpdatedAt());

        $message->setUpdatedAt("DateB");

        $this->assertEquals("DateB", $message->getUpdatedAt());
    }

    public function testSetAndGetContent()
    {
        $message = new Message();
        $message->setContent("foo");

        $this->assertEquals("foo", $message->getContent());

        $message->setContent("bar");

        $this->assertEquals("bar", $message->getContent());
    }

    public function testSetAndGetId()
    {
        $message = new Message();
        $message->setId(123);

        $this->assertEquals(123, $message->getId());

        $message->setId(789);

        $this->assertEquals(789, $message->getId());
    }

    public function testSetAndGetTranslations()
    {
        $translationA = new Translation();
        $translationB = new Translation();

        $message = new Message();
        $message->setTranslations([$translationA]);

        $this->assertEquals([$translationA], $message->getTranslations());

        $message->setTranslations([$translationA, $translationB]);

        $this->assertEquals(
            [$translationA, $translationB],
            $message->getTranslations()
        );
    }
}
