<?php

namespace Phil404\RiotAPI\Models\Spectator;

class Observer
{
    private $_encryptionKey;

    public function __construct(array $args = [])
    {
        if (array_key_exists("encryptionKey", $args)) {
            $this->_encryptionKey = $args['encryptionKey'];
        }
    }

    /**
     * @param string $encryptionKey
     */
    public function setEncryptionKey(string $encryptionKey)
    {
        $this->_encryptionKey = $encryptionKey;
    }

    /**
     * @return string
     */
    public function getEncryptionKey()
    {
        return $this->_encryptionKey;
    }
}