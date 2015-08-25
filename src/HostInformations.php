<?php namespace GameScan\WoW;

abstract class HostInformations
{
    protected $availableLocales = array();
    public function getHost()
    {
        return static::HOST;
    }

    public function getRegion()
    {
        return static::REGION;
    }

    public function getAvailableLocales()
    {
        return $this->availableLocales;
    }
}
