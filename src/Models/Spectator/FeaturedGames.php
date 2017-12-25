<?php

namespace Phil404\RiotAPI\Models\Spectator;

class FeaturedGames
{
    private $_clientRefreshInterval;
    private $_gameList;

    public function __construct(array $args = [])
    {
        if (array_key_exists("clientRefreshInterval", $args)) {
            $this->_clientRefreshInterval = $args['clientRefreshInterval'];
        }
        if (array_key_exists("gameList", $args)) {
            $this->setGameList($args['gameList']);
        }
    }

    /**
     * @param int $clientRefreshInterval
     */
    public function setClientRefreshInterval(int $clientRefreshInterval)
    {
        $this->_clientRefreshInterval = $clientRefreshInterval;
    }

    /**
     * @return int
     */
    public function getClientRefreshInterval()
    {
        return $this->_clientRefreshInterval;
    }

    /**
     * @param array $gameList
     */
    public function setGameList(array $gameList)
    {
        $qualifiedGameList = [];
        foreach ($gameList as $game) {
            $counter = sizeof($qualifiedGameList);
            if ($game instanceof FeaturedGameInfo) {
                $qualifiedGameList[$counter] = $game;
            } else {
                $qualifiedGameList[$counter] = new FeaturedGameInfo($game);
            }
        }

        $this->_gameList = $qualifiedGameList;
    }

    /**
     * @return array
     */
    public function getGameList()
    {
        return $this->_gameList;
    }
}