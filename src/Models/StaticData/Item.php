<?php

namespace Phil404\RiotAPI\Models\StaticData;

class Item
{
    private $_gold;
    private $_plaintext;
    private $_hideFromAll;
    private $_inStore;
    private $_into;
    private $_id;
    private $_stats;
    private $_colloq;
    private $_maps;
    private $_specialRecipe;
    private $_image;
    private $_description;
    private $_tags;
    private $_effect;
    private $_requiredChampion;
    private $_from;
    private $_group;
    private $_consumeOnFull;
    private $_name;
    private $_consumed;
    private $_sanitizedDescription;
    private $_depth;
    private $_stacks;

    public function __construct(array $args = [])
    {
        if (array_key_exists("gold", $args)) {
            $this->setGold($args['gold']);
        }
        if (array_key_exists("plaintext", $args)) {
            $this->_plaintext = $args['plaintext'];
        }
        if (array_key_exists("hideFromAll", $args)) {
            $this->_hideFromAll = $args['hideFromAll'];
        }
        if (array_key_exists("inStore", $args)) {
            $this->_inStore = $args['inStore'];
        }
        if (array_key_exists("into", $args)) {
            $this->_into = $args['into'];
        }
        if (array_key_exists("id", $args)) {
            $this->_id = $args['id'];
        }
        if (array_key_exists("stats", $args)) {
            $this->setStats($args['stats']);
        }
        if (array_key_exists("colloq", $args)) {
            $this->_colloq = $args['colloq'];
        }
        if (array_key_exists("maps", $args)) {
            $this->_maps = $args['maps'];
        }
        if (array_key_exists("specialRecipe", $args)) {
            $this->_specialRecipe = $args['specialRecipe'];
        }
        if (array_key_exists("image", $args)) {
            $this->setImage($args['image']);
        }
        if (array_key_exists("description", $args)) {
            $this->_description = $args['description'];
        }
        if (array_key_exists("tags", $args)) {
            $this->_tags = $args['tags'];
        }
        if (array_key_exists("effect", $args)) {
            $this->_effect = $args['effect'];
        }
        if (array_key_exists("requiredChampion", $args)) {
            $this->_requiredChampion = $args['requiredChampion'];
        }
        if (array_key_exists("from", $args)) {
            $this->_from = $args['from'];
        }
        if (array_key_exists("group", $args)) {
            $this->_group = $args['group'];
        }
        if (array_key_exists("consumeOnFull", $args)) {
            $this->_consumeOnFull = $args['consumeOnFull'];
        }
        if (array_key_exists("name", $args)) {
            $this->_name = $args['name'];
        }
        if (array_key_exists("consumed", $args)) {
            $this->_consumed = $args['consumed'];
        }
        if (array_key_exists("sanitizedDescription", $args)) {
            $this->_sanitizedDescription = $args['sanitizedDescription'];
        }
        if (array_key_exists("depth", $args)) {
            $this->_depth = $args['depth'];
        }
        if (array_key_exists("stacks", $args)) {
            $this->_stacks = $args['stacks'];
        }
    }

    /**
     * @param array|Gold $gold
     */
    public function setGold($gold)
    {
        if ($gold instanceof Gold) {
            $this->_gold = $gold;
        } else {
            $this->_gold = new Gold($gold);
        }
    }

    /**
     * @return Gold
     */
    public function getGold()
    {
        return $this->_gold;
    }

    /**
     * @param string $plaintext
     */
    public function setPlaintext(string $plaintext)
    {
        $this->_plaintext = $plaintext;
    }

    /**
     * @return string
     */
    public function getPlaintext()
    {
        return $this->_plaintext;
    }

    /**
     * @param boolean $hideFromAll
     */
    public function setHideFromAll(bool $hideFromAll)
    {
        $this->_hideFromAll = $hideFromAll;
    }

    /**
     * @return boolean
     */
    public function isHideFromAll()
    {
        return $this->_hideFromAll;
    }

    /**
     * @param boolean $inStore
     */
    public function setInStore(bool $inStore)
    {
        $this->_inStore = $inStore;
    }

    /**
     * @return boolean
     */
    public function isInStore()
    {
        return $this->_inStore;
    }

    /**
     * @param array[string] $into
     */
    public function setInto(array $into)
    {
        $this->_into = $into;
    }

    /**
     * @return array[string]
     */
    public function getInto()
    {
        return $this->_into;
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
     * @param array|InventoryDataStats $stats
     */
    public function setStats($stats)
    {
        if ($stats instanceof InventoryDataStats) {
            $this->_stats = $stats;
        } else {
            $this->_stats = new InventoryDataStats($stats);
        }
    }

    /**
     * @return InventoryDataStats
     */
    public function getStats()
    {
        return $this->_stats;
    }

    /**
     * @param string $colloq
     */
    public function setColloq(string $colloq)
    {
        $this->_colloq = $colloq;
    }

    /**
     * @return string
     */
    public function getColloq()
    {
        return $this->_colloq;
    }

    /**
     * @param array $maps
     */
    public function setMaps(array $maps)
    {
        $this->_maps = $maps;
    }

    /**
     * @return array
     */
    public function getMaps()
    {
        return $this->_maps;
    }

    /**
     * @param int $specialRecipe
     */
    public function setSpecialRecipe(int $specialRecipe)
    {
        $this->_specialRecipe = $specialRecipe;
    }

    /**
     * @return int
     */
    public function getSpecialRecipe()
    {
        return $this->_specialRecipe;
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
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->_description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param array $tags
     */
    public function setTags(array $tags)
    {
        $this->_tags = $tags;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->_tags;
    }

    /**
     * @param array $effect
     */
    public function setEffect(array $effect)
    {
        $this->_effect = $effect;
    }

    /**
     * @return array
     */
    public function getEffect()
    {
        return $this->_effect;
    }

    /**
     * @param string $requiredChampion
     */
    public function setRequiredChampion(string $requiredChampion)
    {
        $this->_requiredChampion = $requiredChampion;
    }

    /**
     * @return string
     */
    public function getRequiredChampion()
    {
        return $this->_requiredChampion;
    }

    /**
     * @param array $from
     */
    public function setFrom(array $from)
    {
        $this->_from = $from;
    }

    /**
     * @return array
     */
    public function getFrom()
    {
        return $this->_from;
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
     * @param boolean $consumeOnFull
     */
    public function setConsumeOnFull(bool $consumeOnFull)
    {
        $this->_consumeOnFull = $consumeOnFull;
    }

    /**
     * @return boolean
     */
    public function isConsumeOnFull()
    {
        return $this->_consumeOnFull;
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
     * @param boolean $consumed
     */
    public function setConsumed(bool $consumed)
    {
        $this->_consumed = $consumed;
    }

    /**
     * @return boolean
     */
    public function isConsumed()
    {
        return $this->_consumed;
    }

    /**
     * @param string $sanitizedDescription
     */
    public function setSanitizedDescription(string $sanitizedDescription)
    {
        $this->_sanitizedDescription = $sanitizedDescription;
    }

    /**
     * @return string
     */
    public function getSanitizedDescription()
    {
        return $this->_sanitizedDescription;
    }

    /**
     * @param int $depth
     */
    public function setDepth(int $depth)
    {
        $this->_depth = $depth;
    }

    /**
     * @return int
     */
    public function getDepth()
    {
        return $this->_depth;
    }

    /**
     * @param int $stacks
     */
    public function setStacks(int $stacks)
    {
        $this->_stacks = $stacks;
    }

    /**
     * @return int
     */
    public function getStacks()
    {
        return $this->_stacks;
    }
}