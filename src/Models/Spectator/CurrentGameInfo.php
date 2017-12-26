<?php

namespace Phil404\RiotAPI\Models\Spectator;

class CurrentGameInfo
{
    private $_gameId;
    private $_gameStartTime;
    private $_platformId;
    private $_gameMode;
    private $_mapId;
    private $_gameType;

    /**
     * @param int $gameId
     */
    public function setGameId(int $gameId)
    {
        $this->_gameId = $gameId;
    }

    /**
     * @return int
     */
    public function getGameId()
    {
        return $this->_gameId;
    }

    /**
     * @param int $gameStartTime
     */
    public function setGameStartTime(int $gameStartTime)
    {
        $this->_gameStartTime = $gameStartTime;
    }

    /**
     * @return int
     */
    public function getGameStartTime()
    {
        return $this->_gameStartTime;
    }

    /**
     * @param string $platformId
     */
    public function setPlatformId(string $platformId)
    {
        $this->_platformId = $platformId;
    }

    /**
     * @return string
     */
    public function getPlatformId()
    {
        return $this->_platformId;
    }

    /**
     * @param string $gameMode
     */
    public function setGameMode(string $gameMode)
    {
        $this->_gameMode = $gameMode;
    }

    /**
     * @return string
     */
    public function getGameMode()
    {
        return $this->_gameMode;
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
     * @param string $gameType
     */
    public function setGameType(string $gameType)
    {
        $this->_gameType = $gameType;
    }

    /**
     * @return string
     */
    public function getGameType()
    {
        return $this->_gameType;
    }
}