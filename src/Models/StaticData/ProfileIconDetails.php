<?php

namespace Phil404\RiotAPI\Models\StaticData;

class ProfileIconDetails
{
    private $_id;
    private $_image;

    public function __construct(array $args = [])
    {
        if (array_key_exists("image", $args)) {
            $this->setImage($args['image']);
        }
        if (array_key_exists("id", $args)) {
            $this->_id = $args['id'];
        }
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
}