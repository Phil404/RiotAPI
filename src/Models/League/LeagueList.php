<?php

namespace Phil404\RiotAPI\Models\League;

class LeagueList
{
    private $_leagueId;
    private $_tier;
    private $_entries;
    private $_queue;
    private $_name;

    public function __construct(array $args = [])
    {
        if (array_key_exists("leagueId", $args)) {
            $this->_leagueId = $args['leagueId'];
        }
        if (array_key_exists("tier", $args)) {
            $this->_tier = $args['tier'];
        }
        if (array_key_exists("entries", $args)) {
            $this->setEntries($args['entries']);
        }
        if (array_key_exists("queue", $args)) {
            $this->_queue = $args['queue'];
        }
        if (array_key_exists("name", $args)) {
            $this->_name = $args['name'];
        }
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
     * @param array $entries
     */
    public function setEntries(array $entries)
    {
        $qualifiedEntries = [];
        foreach ($entries as $entry) {
            $counter = sizeof($qualifiedEntries);
            if ($entry instanceof LeaguePosition) {
                $qualifiedEntries[$counter] = $entry;
            } else {
                $qualifiedEntries[$counter] = new LeaguePosition($entry);
            }
        }

        $this->_entries = $qualifiedEntries;
    }

    /**
     * @return array
     */
    public function getEntries()
    {
        return $this->_entries;
    }

    /**
     * @param string $queue
     */
    public function setQueue(string $queue)
    {
        $this->_queue = $queue;
    }

    /**
     * @return string
     */
    public function getQueue()
    {
        return $this->_queue;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }
}