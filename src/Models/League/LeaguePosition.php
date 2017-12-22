<?php

namespace Phil404\RiotAPI\Models\League;

class LeaguePosition
{
    private $_rank;
    private $_queueType;
    private $_hotStreak;
    private $_miniSeries;
    private $_wins;
    private $_veteran;
    private $_losses;
    private $_freshBlood;
    private $_leagueId;
    private $_playerOrTeamName;
    private $_inactive;
    private $_playerOrTeamId;
    private $_leagueName;
    private $_tier;
    private $_leaguePoints;

    public function __construct(array $args = [])
    {
        if (array_key_exists("rank", $args)) {
            $this->_rank = $args["rank"];
        }
        if (array_key_exists("queueType", $args)) {
            $this->_queueType = $args["queueType"];
        }
        if (array_key_exists("hotStreak", $args)) {
            $this->_hotStreak = $args["hotStreak"];
        }
        if (array_key_exists("miniSeries", $args)) {
            $this->setMiniSeries($args['miniSeries']);
        }
        if (array_key_exists("wins", $args)) {
            $this->_wins = $args["wins"];
        }
        if (array_key_exists("veteran", $args)) {
            $this->_veteran = $args["veteran"];
        }
        if (array_key_exists("losses", $args)) {
            $this->_losses = $args["losses"];
        }
        if (array_key_exists("freshBlood", $args)) {
            $this->_freshBlood = $args["freshBlood"];
        }
        if (array_key_exists("leagueId", $args)) {
            $this->_leagueId = $args["leagueId"];
        }
        if (array_key_exists("playerOrTeamName", $args)) {
            $this->_playerOrTeamName = $args["playerOrTeamName"];
        }
        if (array_key_exists("inactive", $args)) {
            $this->_inactive = $args["inactive"];
        }
        if (array_key_exists("playerOrTeamId", $args)) {
            $this->_playerOrTeamId = $args["playerOrTeamId"];
        }
        if (array_key_exists("leagueName", $args)) {
            $this->_leagueName = $args["leagueName"];
        }
        if (array_key_exists("tier", $args)) {
            $this->_tier = $args["tier"];
        }
        if (array_key_exists("leaguePoints", $args)) {
            $this->_leaguePoints = $args["leaguePoints"];
        }
    }

    /**
     * @param string $rank
     */
    public function setRank(string $rank)
    {
        $this->_rank = $rank;
    }

    /**
     * @return string
     */
    public function getRank()
    {
        return $this->_rank;
    }

    /**
     * @param string $queueType
     */
    public function setQueueType(string $queueType)
    {
        $this->_queueType = $queueType;
    }

    /**
     * @return string
     */
    public function getQueueType()
    {
        return $this->_queueType;
    }

    /**
     * @param boolean $hotStreak
     */
    public function setHotStreak(bool $hotStreak)
    {
        $this->_hotStreak = $hotStreak;
    }

    /**
     * @return boolean
     */
    public function isHotStreak()
    {
        return $this->_hotStreak;
    }

    /**
     * @param mixed $miniSeries
     */
    public function setMiniSeries($miniSeries)
    {
        if ($miniSeries instanceof MiniSeries) {
            $this->_miniSeries = $miniSeries;
        } elseif (is_array($miniSeries)) {
            $this->_miniSeries = new MiniSeries($miniSeries);
        }
    }

    /**
     * @return MiniSeries
     */
    public function getMiniSeries()
    {
        return $this->_miniSeries;
    }

    /**
     * @param int $wins
     */
    public function setWins(int $wins)
    {
        $this->_wins = $wins;
    }

    /**
     * @return int
     */
    public function getWins()
    {
        return $this->_wins;
    }

    /**
     * @param boolean $veteran
     */
    public function setVeteran(bool $veteran)
    {
        $this->_veteran = $veteran;
    }

    /**
     * @return boolean
     */
    public function isVeteran()
    {
        return $this->_veteran;
    }

    /**
     * @param int $losses
     */
    public function setLosses(int $losses)
    {
        $this->_losses = $losses;
    }

    /**
     * @return int
     */
    public function getLosses()
    {
        return $this->_losses;
    }

    /**
     * @param boolean $freshBlood
     */
    public function setFreshBlood(bool $freshBlood)
    {
        $this->_freshBlood = $freshBlood;
    }

    /**
     * @return boolean
     */
    public function isFreshBlood()
    {
        return $this->_freshBlood;
    }

    /**
     * @param string $leagueId
     */
    public function setLeagueId(string $leagueId)
    {
        $this->_leagueId = $leagueId;
    }

    /**
     * @return string
     */
    public function getLeagueId()
    {
        return $this->_leagueId;
    }

    /**
     * @param string $playerOrTeamName
     */
    public function setPlayerOrTeamName(string $playerOrTeamName)
    {
        $this->_playerOrTeamName = $playerOrTeamName;
    }

    /**
     * @return string
     */
    public function getPlayerOrTeamName()
    {
        return $this->_playerOrTeamName;
    }

    /**
     * @param boolean $inactive
     */
    public function setInactive(bool $inactive)
    {
        $this->_inactive = $inactive;
    }

    /**
     * @return boolean
     */
    public function isInactive()
    {
        return $this->_inactive;
    }

    /**
     * @param string $leagueName
     */
    public function setLeagueName(string $leagueName)
    {
        $this->_leagueName = $leagueName;
    }

    /**
     * @param string $playerOrTeamId
     */
    public function setPlayerOrTeamId(string $playerOrTeamId)
    {
        $this->_playerOrTeamId = $playerOrTeamId;
    }

    /**
     * @return string
     */
    public function getPlayerOrTeamId()
    {
        return $this->_playerOrTeamId;
    }

    /**
     * @return string
     */
    public function getLeagueName()
    {
        return $this->_leagueName;
    }

    /**
     * @param string $tier
     */
    public function setTier(string $tier)
    {
        $this->_tier = $tier;
    }

    /**
     * @return string
     */
    public function getTier()
    {
        return $this->_tier;
    }

    /**
     * @param int $leaguePoints
     */
    public function setLeaguePoints(int $leaguePoints)
    {
        $this->_leaguePoints = $leaguePoints;
    }

    /**
     * @return int
     */
    public function getLeaguePoints()
    {
        return $this->_leaguePoints;
    }
}