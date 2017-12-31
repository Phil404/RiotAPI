<?php

namespace Phil404\RiotAPI\Models\StaticData;

class Image
{
    private $_full;
    private $_group;
    private $_sprite;
    private $_height;
    private $_width;
    private $_y;
    private $_x;

    public function __construct(array $args = [])
    {
        if (array_key_exists("full", $args)) {
            $this->_full = $args['full'];
        }
        if (array_key_exists("group", $args)) {
            $this->_group = $args['group'];
        }
        if (array_key_exists("sprite", $args)) {
            $this->_sprite = $args['sprite'];
        }
        if (array_key_exists("h", $args)) {
            $this->_height = $args['h'];
        }
        if (array_key_exists("w", $args)) {
            $this->_width = $args['w'];
        }
        if (array_key_exists("y", $args)) {
            $this->_y = $args['y'];
        }
        if (array_key_exists("x", $args)) {
            $this->_x = $args['x'];
        }
    }

    /**
     * @param string $full
     */
    public function setFull(string $full)
    {
        $this->_full = $full;
    }

    /**
     * @return string
     */
    public function getFull()
    {
        return $this->_full;
    }

    /**
     * @param string $group
     */
    public function setGroup(string $group)
    {
        $this->_group = $group;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
        return $this->_group;
    }

    /**
     * @param string $sprite
     */
    public function setSprite(string $sprite)
    {
        $this->_sprite = $sprite;
    }

    /**
     * @return string
     */
    public function getSprite()
    {
        return $this->_sprite;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height)
    {
        $this->_height = $height;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width)
    {
        $this->_width = $width;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->_width;
    }

    /**
     * @param int $y
     */
    public function setY(int $y)
    {
        $this->_y = $y;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->_y;
    }

    /**
     * @param int $x
     */
    public function setX(int $x)
    {
        $this->_x = $x;
    }

    /**
     * @return int
     */
    public function getX()
    {
        return $this->_x;
    }
}