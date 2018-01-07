<?php

namespace Phil404\RiotAPI\Models\StaticData;

class MapDetails
{
    private $_mapName;
    private $_image;
    private $_mapId;
    private $_unpurchasableItemList;

    public function __construct(array $args = [])
    {
        if (array_key_exists("mapName", $args)) {
            $this->_mapName = $args['mapName'];
        }
        if (array_key_exists("image", $args)) {
            $this->setImage($args['image']);
        }
        if (array_key_exists("mapId", $args)) {
            $this->_mapId = $args['mapId'];
        }
        if (array_key_exists("unpurchasableItemList", $args)) {
            $this->_unpurchasableItemList = $args['unpurchasableItemList'];
        }
    }

    /**
     * @param string $mapName
     */
    public function setMapName(string $mapName)
    {
        $this->_mapName = $mapName;
    }

    /**
     * @return string
     */
    public function getMapName()
    {
        return $this->_mapName;
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
     * @param int $mapId
     */
    public function setMapId(int $mapId)
    {
        $this->_mapId = $mapId;
    }

    /**
     * @return int
     */
    public function getMapId()
    {
        return $this->_mapId;
    }

    /**
     * @param array $unpurchasableItemList
     */
    public function setUnpurchasableItemList(array $unpurchasableItemList)
    {
        $this->_unpurchasableItemList = $unpurchasableItemList;
    }

    /**
     * @return array
     */
    public function getUnpurchasableItemList()
    {
        return $this->_unpurchasableItemList;
    }
}