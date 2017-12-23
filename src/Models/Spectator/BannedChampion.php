<?php

namespace Phil404\RiotAPI\Models\Spectator;

class BannedChampion
{
    private $_pickTurn;
    private $_championId;
    private $_teamId;

    public function __construct(array $args = [])
    {
        if (array_key_exists("pickTurn", $args)) {
            $this->_pickTurn = $args['pickTurn'];
        }
        if (array_key_exists("championId", $args)) {
            $this->_championId = $args['championId'];
        }
        if (array_key_exists("teamId", $args)) {
            $this->_teamId = $args['teamId'];
        }
    }

    /**
     * @param int $pickTurn
     */
    public function setPickTurn(int $pickTurn)
    {
        $this->_pickTurn = $pickTurn;
    }

    /**
     * @return int
     */
    public function getPickTurn()
    {
        return $this->_pickTurn;
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
     * @param int $teamId
     */
    public function setTeamId(int $teamId)
    {
        $this->_teamId = $teamId;
    }

    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->_teamId;
    }
}