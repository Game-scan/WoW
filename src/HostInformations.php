<?php namespace GameScan\WoW;

abstract class HostInformations
{
    public function getHost()
    {
        return static::HOST;
    }

    public function getAvailableLocales()
    {
        return static::availableLocales;
    }
}
