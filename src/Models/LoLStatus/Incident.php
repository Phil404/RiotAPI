<?php

namespace Phil404\RiotAPI\Models\LoLStatus;

class Incident
{
    private $_active;
    private $_createdAt;
    private $_id;
    private $_updates;

    public function __construct(array $args = [])
    {
        if (array_key_exists("active", $args)) {
            $this->_active = $args['active'];
        }
        if (array_key_exists("created_at", $args)) {
            $this->_createdAt = $args['created_at'];
        }
        if (array_key_exists("id", $args)) {
            $this->_id = $args['id'];
        }
        if (array_key_exists("updates", $args)) {
            $this->setUpdates($args['updates']);
        }
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active)
    {
        $this->_active = $active;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->_active;
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
     * @param array $updates
     */
    public function setUpdates(array $updates)
    {
        $qualifiedUpdates = [];
        if (sizeof($updates) >= 1) {
            foreach ($updates as $update) {
                $counter = sizeof($qualifiedUpdates);
                if ($update instanceof Message) {
                    $qualifiedUpdates[$counter] = $update;
                } else {
                    $createdUpdate = new Message($update);
                    if ($createdUpdate != null) {
                        $qualifiedUpdates[$counter] = $createdUpdate;
                    }
                }
            }
        }
        $this->_updates = $qualifiedUpdates;
    }

    /**
     * @return array
     */
    public function getUpdates()
    {
        return $this->_updates;
    }
}