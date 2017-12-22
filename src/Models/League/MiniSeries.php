<?php

namespace Phil404\RiotAPI\Models\League;

class MiniSeries
{
    private $_wins;
    private $_losses;
    private $_target;
    private $_progress;

    public function __construct(array $args = [])
    {
        if (array_key_exists("wins", $args)) {
            $this->_wins = $args['wins'];
        }
        if (array_key_exists("losses", $args)) {
            $this->_losses = $args['losses'];
        }
        if (array_key_exists("target", $args)) {
            $this->_target = $args['target'];
        }
        if (array_key_exists("progress", $args)) {
            $this->_progress = $args['progress'];
        }
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
     * @param int $target
     */
    public function setTarget(int $target)
    {
        $this->_target = $target;
    }

    /**
     * @return int
     */
    public function getTarget()
    {
        return $this->_target;
    }

    /**
     * @param string $progress
     */
    public function setProgress(string $progress)
    {
        $this->_progress = $progress;
    }

    /**
     * @return string
     */
    public function getProgress()
    {
        return $this->_progress;
    }
}