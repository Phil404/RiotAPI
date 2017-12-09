<?php

namespace Phil404\RiotAPI\Models\LoLStatus;

class Message
{
    private $_severity;
    private $_author;
    private $_createdAt;
    private $_updatedAt;
    private $_content;
    private $_id;
    private $_translations;

    public function __construct(array $args = [])
    {
        if (array_key_exists("severity", $args)) {
            $this->_severity = $args['severity'];
        }
        if (array_key_exists("author", $args)) {
            $this->_author = $args['author'];
        }
        if (array_key_exists("createdAt", $args)) {
            $this->_createdAt = $args['createdAt'];
        }
        if (array_key_exists("updatedAt", $args)) {
            $this->_updatedAt = $args['updatedAt'];
        }
        if (array_key_exists("content", $args)) {
            $this->_content = $args['content'];
        }
        if (array_key_exists("id", $args)) {
            $this->_id = $args['id'];
        }
        if (array_key_exists("translations", $args)) {
            $this->setTranslations($args['translations']);
        }
    }

    /**
     * @param string $severity
     */
    public function setSeverity(string $severity)
    {
        $this->_severity = $severity;
    }

    /**
     * @return string
     */
    public function getSeverity()
    {
        return $this->_severity;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author)
    {
        $this->_author = $author;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->_author;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt)
    {
        $this->_createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->_createdAt;
    }

    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt(string $updatedAt)
    {
        $this->_updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->_updatedAt;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content)
    {
        $this->_content = $content;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->_content;
    }

    /**
     * @param integer $id
     */
    public function setId(int $id)
    {
        $this->_id = $id;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param array $translations
     */
    public function setTranslations(array $translations)
    {
        $this->_translations = $translations;
    }

    /**
     * @return array
     */
    public function getTranslations()
    {
        return $this->_translations;
    }
}