<?php

namespace Phil404\RiotAPI\Models\LoLStatus;

class ShardData
{
    private $_name;
    private $_regionTag;
    private $_hostname;
    private $_slug;
    private $_locales;
    private $_services;

    public function __construct(array $args = [])
    {
        if (array_key_exists("name", $args)) {
            $this->_name = $args['name'];
        }
        if (array_key_exists("regionTag", $args)) {
            $this->_regionTag = $args['regionTag'];
        }
        if (array_key_exists("hostname", $args)) {
            $this->_hostname = $args['hostname'];
        }
        if (array_key_exists("slug", $args)) {
            $this->_slug = $args['slug'];
        }
        if (array_key_exists("locales", $args)) {
            $this->setLocales($args['locales']);
        }
        if (array_key_exists("services", $args)) {
            $this->setServices($args['services']);
        }
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

    /**
     * @param string $regionTag
     */
    public function setRegionTag(string $regionTag)
    {
        $this->_regionTag = $regionTag;
    }

    /**
     * @return string
     */
    public function getRegionTag()
    {
        return $this->_regionTag;
    }

    /**
     * @param string $hostname
     */
    public function setHostname(string $hostname)
    {
        $this->_hostname = $hostname;
    }

    /**
     * @return string
     */
    public function getHostname()
    {
        return $this->_hostname;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug)
    {
        $this->_slug = $slug;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->_slug;
    }

    /**
     * @param array $locales
     */
    public function setLocales(array $locales)
    {
        $this->_locales = $locales;
    }

    /**
     * @return array
     */
    public function getLocales()
    {
        return $this->_locales;
    }

    /**
     * @param array $services
     */
    public function setServices($services)
    {
        $this->_services = $services;
    }

    /**
     * @return array
     */
    public function getServices()
    {
        return $this->_services;
    }
}