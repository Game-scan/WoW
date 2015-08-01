<?php namespace GameScan\WoW;

abstract class HostInformations
{
    protected $availableLocales = array();
    public function getHost()
    {
        return static::HOST;
    }

    public function getAvailableLocales()
    {
        return $this->availableLocales;
    }
}
