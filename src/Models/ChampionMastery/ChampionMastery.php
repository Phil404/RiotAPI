<?php

namespace Phil404\RiotAPI\Models\ChampionMastery;

class ChampionMastery
{
    private $_chestGranted;
    private $_championLevel;
    private $_championPoints;
    private $_championId;
    private $_playerId;
    private $_championPointsUntilNextLevel;
    private $_championPointsSinceLastLevel;
    private $_lastPlayTime;

    /**
     * @param boolean $chestGranted
     */
    public function setChestGranted(bool $chestGranted)
    {
        $this->_chestGranted = $chestGranted;
    }

    /**
     * @return boolean
     */
    public function getChestGranted()
    {
        return $this->_chestGranted;
    }

    /**
     * @param int $championLevel
     */
    public function setChampionLevel(int $championLevel)
    {
        $this->_championLevel = $championLevel;
    }

    /**
     * @return int
     */
    public function getChampionLevel()
    {
        return $this->_championLevel;
    }

    /**
     * @param int $championPoints
     */
    public function setChampionPoints(int $championPoints)
    {
        $this->_championPoints = $championPoints;
    }

    /**
     * @return int
     */
    public function getChampionPoints()
    {
        return $this->_championPoints;
    }

    /**
     * @param int $championId
     */
    public function setChampionId(int $championId)
    {
        $this->_championId = $championId;
    }

    /**
     * @return int
     */
    public function getChampionId()
    {
        return $this->_championId;
    }

    /**
     * @param int $playerId
     */
    public function setPlayerId(int $playerId)
    {
        $this->_playerId = $playerId;
    }

    /**
     * @return int
     */
    public function getPlayerId()
    {
        return $this->_playerId;
    }

    /**
     * @param int $championPointsUntilNextLevel
     */
    public function setChampionPointsUntilNextLevel(
        int $championPointsUntilNextLevel)
    {
        $this->_championPointsUntilNextLevel = $championPointsUntilNextLevel;
    }

    /**
     * @return int
     */
    public function getChampionPointsUntilNextLevel()
    {
        return $this->_championPointsUntilNextLevel;
    }

    /**
     * @param int $championPointsSinceLastLevel
     */
    public function setChampionPointsSinceLastLevel(
        int $championPointsSinceLastLevel)
    {
        $this->_championPointsSinceLastLevel = $championPointsSinceLastLevel;
    }

    /**
     * @return int
     */
    public function getChampionPointsSinceLastLevel()
    {
        return $this->_championPointsSinceLastLevel;
    }

    /**
     * @param int $lastPlayTime
     */
    public function setLastPlayTime(int $lastPlayTime)
    {
        $this->_lastPlayTime = $lastPlayTime;
    }

    /**
     * @return int
     */
    public function getLastPlayTime()
    {
        return $this->_lastPlayTime;
    }
}