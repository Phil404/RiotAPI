<?php

namespace Phil404\RiotAPI\Models\Spectator;

class Participant
{
    private $_profileIconId;
    private $_championId;
    private $_summonerName;
    private $_bot;
    private $_spellTwoId;
    private $_teamId;
    private $_spellOneId;

    public function __construct(array $args = [])
    {
        if (array_key_exists("profileIconId", $args)) {
            $this->_profileIconId = $args['profileIconId'];
        }
        if (array_key_exists("championId", $args)) {
            $this->_championId = $args['championId'];
        }
        if (array_key_exists("summonerName", $args)) {
            $this->_summonerName = $args['summonerName'];
        }
        if (array_key_exists("bot", $args)) {
            $this->_bot = $args['bot'];
        }
        if (array_key_exists("spell2Id", $args)) {
            $this->_spellTwoId = $args['spell2Id'];
        }
        if (array_key_exists("teamId", $args)) {
            $this->_teamId = $args['teamId'];
        }
        if (array_key_exists("spell1Id", $args)) {
            $this->_spellOneId = $args['spell1Id'];
        }
    }

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
     * @param boolean $bot
     */
    public function setBot(bool $bot)
    {
        $this->_bot = $bot;
    }

    /**
     * @return boolean
     */
    public function isBot()
    {
        return $this->_bot;
    }

    /**
     * @param int $spellTwoId
     */
    public function setSpell2Id(int $spellTwoId)
    {
        $this->_spellTwoId = $spellTwoId;
    }

    /**
     * @return int
     */
    public function getSpell2Id()
    {
        return $this->_spellTwoId;
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

    /**
     * @param int $spellOneId
     */
    public function setSpell1Id($spellOneId)
    {
        $this->_spellOneId = $spellOneId;
    }

    /**
     * @return int
     */
    public function getSpell1Id()
    {
        return $this->_spellOneId;
    }
}