<?php

namespace Phil404\RiotAPI\Models\Spectator;

class GameCustomizationObject
{
    private $_category;
    private $_content;

    public function __construct(array $args = [])
    {
        if (array_key_exists("category", $args)) {
            $this->_category = $args['category'];
        }
        if (array_key_exists("content", $args)) {
            $this->_content = $args['content'];
        }
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category)
    {
        $this->_category = $category;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->_category;
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
}