<?php

namespace Phil404\RiotAPI\Models\Spectator;

class CurrentGameParticipant
{
    private $_profileIconId;
    private $_championId;
    private $_summonerName;
    private $_gameCustomizationObjects;

    /**
     * @param int $profileIconId
     */
    public function setProfileIconId(int $profileIconId)
    {
        $this->_profileIconId = $profileIconId;
    }

    /**
     * @return int
     */
    public function getProfileIconId()
    {
        return $this->_profileIconId;
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
     * @param string $summonerName
     */
    public function setSummonerName(string $summonerName)
    {
        $this->_summonerName = $summonerName;
    }

    /**
     * @return string
     */
    public function getSummonerName()
    {
        return $this->_summonerName;
    }

    /**
     * @param array $gameCustomizationObjects
     */
    public function setGameCustomizationObjects(array $gameCustomizationObjects)
    {
        $qualifiedObjects = [];
        foreach ($gameCustomizationObjects as $object) {
            $counter = sizeof($qualifiedObjects);
            if ($object instanceof GameCustomizationObject) {
                $qualifiedObjects[$counter] = $object;
            } else {
                $qualifiedObjects[$counter] =
                    new GameCustomizationObject($object);
            }
        }

        $this->_gameCustomizationObjects = $qualifiedObjects;
    }

    /**
     * @return array
     */
    public function getGameCustomizationObjects()
    {
        return $this->_gameCustomizationObjects;
    }
}