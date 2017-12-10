<?php

namespace Phil404\RiotAPI\Models\LoLStatus;

class Translation
{
    private $_locale;
    private $_content;
    private $_updatedAt;

    public function __construct(array $args = [])
    {
        if (array_key_exists("locale", $args)) {
            $this->_locale = $args['locale'];
        }
        if (array_key_exists("content", $args)) {
            $this->_content = $args['content'];
        }
        if (array_key_exists("updated_at", $args)) {
            $this->_updatedAt = $args['updated_at'];
        }
    }

    /**
     * @param string $locale
     */
    public function setLocale(string $locale)
    {
        $this->_locale = $locale;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->_locale;
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
}