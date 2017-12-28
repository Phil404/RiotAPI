<?php

namespace Phil404\RiotAPI\Models\StaticData;

class LevelTip
{
    private $_effect;
    private $_label;

    public function __construct(array $args = [])
    {
        if (array_key_exists("effect", $args)) {
            $this->_effect = $args['effect'];
        }
        if (array_key_exists("label", $args)) {
            $this->_label = $args['label'];
        }
    }

    /**
     * @param array $effect
     */
    public function setEffect(array $effect)
    {
        $this->_effect = $effect;
    }

    /**
     * @return array
     */
    public function getEffect()
    {
        return $this->_effect;
    }

    /**
     * @param array $label
     */
    public function setLabel(array $label)
    {
        $this->_label = $label;
    }

    /**
     * @return array
     */
    public function getLabel()
    {
        return $this->_label;
    }
}