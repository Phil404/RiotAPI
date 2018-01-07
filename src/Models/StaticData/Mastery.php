<?php

namespace Phil404\RiotAPI\Models\StaticData;

class Mastery
{
    private $_prereq;
    private $_masteryTree;
    private $_name;
    private $_ranks;
    private $_image;
    private $_sanitizedDescription;
    private $_id;
    private $_description;

    public function __construct(array $args = [])
    {
        if (array_key_exists("prereq", $args)) {
            $this->_prereq = $args['prereq'];
        }
        if (array_key_exists("masteryTree", $args)) {
            $this->_masteryTree = $args['masteryTree'];
        }
        if (array_key_exists("name", $args)) {
            $this->_name = $args['name'];
        }
        if (array_key_exists("ranks", $args)) {
            $this->_ranks = $args['ranks'];
        }
        if (array_key_exists("image", $args)) {
            $this->setImage($args['image']);
        }
        if (array_key_exists("sanitizedDescription", $args)) {
            $this->_sanitizedDescription = $args['sanitizedDescription'];
        }
        if (array_key_exists("id", $args)) {
            $this->_id = $args['id'];
        }
        if (array_key_exists("description", $args)) {
            $this->_description = $args['description'];
        }
    }

    /**
     * @param string $prereq
     */
    public function setPrereq(string $prereq)
    {
        $this->_prereq = $prereq;
    }

    /**
     * @return string
     */
    public function getPrereq()
    {
        return $this->_prereq;
    }

    /**
     * @param string $masteryTree
     */
    public function setMasteryTree(string $masteryTree)
    {
        $this->_masteryTree = $masteryTree;
    }

    /**
     * @return string
     */
    public function getMasteryTree()
    {
        return $this->_masteryTree;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param int $ranks
     */
    public function setRanks(int $ranks)
    {
        $this->_ranks = $ranks;
    }

    /**
     * @return int
     */
    public function getRanks()
    {
        return $this->_ranks;
    }

    /**
     * @param array|Image $image
     */
    public function setImage($image)
    {
        if ($image instanceof Image) {
            $this->_image = $image;
        } else {
            $this->_image = new Image($image);
        }
    }

    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * @param array $sanitizedDescription
     */
    public function setSanitizedDescription(array $sanitizedDescription)
    {
        $this->_sanitizedDescription = $sanitizedDescription;
    }

    /**
     * @return array
     */
    public function getSanitizedDescription()
    {
        return $this->_sanitizedDescription;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->_id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param array $description
     */
    public function setDescription(array $description)
    {
        $this->_description = $description;
    }

    /**
     * @return array
     */
    public function getDescription()
    {
        return $this->_description;
    }
}