<?php

namespace Phil404\RiotAPI\Models\Summoner;

class Summoner
{
    private $_profileIconId;
    private $_name;
    private $_summonerLevel;
    private $_revisionDate;
    private $_id;
    private $_accountId;

    public function __construct(array $args = [])
    {
        if (array_key_exists("profileIconId", $args)) {
            $this->_profileIconId = $args['profileIconId'];
        }
        if (array_key_exists("name", $args)) {
            $this->_name = $args['name'];
        }
        if (array_key_exists("summonerLevel", $args)) {
            $this->_summonerLevel = $args['summonerLevel'];
        }
        if (array_key_exists("revisionDate", $args)) {
            $this->_revisionDate = $args['revisionDate'];
        }
        if (array_key_exists("id", $args)) {
            $this->_id = $args['id'];
        }
        if (array_key_exists("accountId", $args)) {
            $this->_accountId = $args['accountId'];
        }
    }

    /**
     * @param int $id
     */
    public function setProfileIconId(int $id)
    {
        $this->_profileIconId = $id;
    }

    /**
     * @return mixed
     */
    public function getProfileIconId()
    {
        return $this->_profileIconId;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param int $summonerLevel
     */
    public function setSummonerLevel(int $summonerLevel)
    {
        $this->_summonerLevel = $summonerLevel;
    }

    /**
     * @return mixed
     */
    public function getSummonerLevel()
    {
        return $this->_summonerLevel;
    }

    /**
     * @param int $revisionDate
     */
    public function setRevisionDate(int $revisionDate)
    {
        $this->_revisionDate = $revisionDate;
    }

    /**
     * @return mixed
     */
    public function getRevisionDate()
    {
        return $this->_revisionDate;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param int $accountId
     */
    public function setAccountId(int $accountId)
    {
        $this->_accountId = $accountId;
    }

    /**
     * @return mixed
     */
    public function getAccountId()
    {
        return $this->_accountId;
    }
}