<?php

namespace Phil404\RiotAPI\Models\Champion;

class Champion
{
    private $_rankedPlayEnabled;
    private $_botEnabled;
    private $_botMmEnabled;
    private $_active;
    private $_freeToPlay;
    private $_id;

    public function __construct(array $args = [])
    {
        if (array_key_exists("rankedPlayEnabled", $args)) {
           $this->_rankedPlayEnabled = $args['rankedPlayEnabled'];
        }
        if (array_key_exists("botEnabled", $args)) {
            $this->_botEnabled = $args['botEnabled'];
        }
        if (array_key_exists("botMmEnabled", $args)) {
            $this->_botMmEnabled = $args['botMmEnabled'];
        }
        if (array_key_exists("active", $args)) {
            $this->_active = $args['active'];
        }
        if (array_key_exists("freeToPlay", $args)) {
            $this->_freeToPlay = $args['freeToPlay'];
        }
        if (array_key_exists("id", $args)) {
            $this->_id = $args['id'];
        }
    }

    /**
     * @param boolean $rankedPlayEnabled
     */
    public function setRankedPlayEnabled(bool $rankedPlayEnabled)
    {
        $this->_rankedPlayEnabled = $rankedPlayEnabled;
    }

    /**
     * @return boolean
     */
    public function isRankedPlayEnabled()
    {
        return $this->_rankedPlayEnabled;
    }

    /**
     * @param boolean $botEnabled
     */
    public function setBotEnabled(bool $botEnabled)
    {
        $this->_botEnabled = $botEnabled;
    }

    /**
     * @return boolean
     */
    public function isBotEnabled()
    {
        return $this->_botEnabled;
    }

    /**
     * @param boolean $botMmEnabled
     */
    public function setBotMmEnabled(bool $botMmEnabled)
    {
        $this->_botMmEnabled = $botMmEnabled;
    }

    /**
     * @return boolean
     */
    public function isBotMmEnabled()
    {
        return $this->_botMmEnabled;
    }

    /**
     * @param boolean $active
     */
    public function setActive(bool $active)
    {
        $this->_active = $active;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->_active;
    }

    /**
     * @param boolean $freeToPlay
     */
    public function setFreeToPlay(bool $freeToPlay)
    {
        $this->_freeToPlay = $freeToPlay;
    }

    /**
     * @return boolean
     */
    public function isFreeToPlay()
    {
        return $this->_freeToPlay;
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