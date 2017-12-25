<?php

namespace Phil404\RiotAPI\Models\Spectator;

class FeaturedGameInfo
{
    private $_gameId;
    private $_gameStartTime;
    private $_platformId;
    private $_gameMode;
    private $_mapId;
    private $_gameType;
    private $_bannedChampions;
    private $_observers;
    private $_participants;
    private $_gameLength;
    private $_gameQueueConfigId;

    public function __construct(array $args = [])
    {
        if (array_key_exists("gameId", $args)) {
            $this->_gameId = $args['gameId'];
        }
        if (array_key_exists("gameStartTime", $args)) {
            $this->_gameStartTime = $args['gameStartTime'];
        }
        if (array_key_exists("platformId", $args)) {
            $this->_platformId = $args['platformId'];
        }
        if (array_key_exists("gameMode", $args)) {
            $this->_gameMode = $args['gameMode'];
        }
        if (array_key_exists("mapId", $args)) {
            $this->_mapId = $args['mapId'];
        }
        if (array_key_exists("gameType", $args)) {
            $this->_gameType = $args['gameType'];
        }
        if (array_key_exists("bannedChampions", $args)) {
            $this->setBannedChampions($args['bannedChampions']);
        }
        if (array_key_exists("observers", $args)) {
            $this->setObservers($args['observers']);
        }
        if (array_key_exists("participants", $args)) {
            $this->setParticipants($args['participants']);
        }
        if (array_key_exists("gameLength", $args)) {
            $this->_gameLength = $args['gameLength'];
        }
        if (array_key_exists("gameQueueConfigId", $args)) {
            $this->_gameQueueConfigId = $args['gameQueueConfigId'];
        }
    }

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

    /**
     * @param array $bannedChampions
     */
    public function setBannedChampions(array $bannedChampions)
    {
        $qualifiedBannedChampions = [];
        foreach ($bannedChampions as $bannedChampion) {
            $counter = sizeof($qualifiedBannedChampions);
            if ($bannedChampion instanceof BannedChampion) {
                $qualifiedBannedChampions[$counter] = $bannedChampion;
            } else {
                $qualifiedBannedChampions[$counter] =
                    new BannedChampion($bannedChampion);
            }
        }
        $this->_bannedChampions = $qualifiedBannedChampions;
    }

    /**
     * @return array
     */
    public function getBannedChampions()
    {
        return $this->_bannedChampions;
    }

    /**
     * @param array|Observer $observers
     */
    public function setObservers($observers): void
    {
        if ($observers instanceof Observer) {
            $this->_observers = $observers;
        } else {
            $this->_observers = new Observer($observers);
        }
    }

    /**
     * @return Observer
     */
    public function getObservers()
    {
        return $this->_observers;
    }

    /**
     * @param array $participants
     */
    public function setParticipants(array $participants)
    {
        $qualifiedParticipants = [];
        foreach ($participants as $participant) {
            $counter = sizeof($qualifiedParticipants);
            if ($participant instanceof Participant) {
                $qualifiedParticipants[$counter] = $participant;
            } else {
                $qualifiedParticipants[$counter] =
                    new Participant($participant);
            }
        }

        $this->_participants = $qualifiedParticipants;
    }

    /**
     * @return array
     */
    public function getParticipants()
    {
        return $this->_participants;
    }

    /**
     * @param int $gameLength
     */
    public function setGameLength(int $gameLength)
    {
        $this->_gameLength = $gameLength;
    }

    /**
     * @return int
     */
    public function getGameLength()
    {
        return $this->_gameLength;
    }

    /**
     * @param int $gameQueueConfigId
     */
    public function setGameQueueConfigId(int $gameQueueConfigId)
    {
        $this->_gameQueueConfigId = $gameQueueConfigId;
    }

    /**
     * @return int
     */
    public function getGameQueueConfigId()
    {
        return $this->_gameQueueConfigId;
    }
}