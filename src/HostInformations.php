<?php namespace GameScan\WoW;

abstract class HostInformations
{
    public static function getHost()
    {
        return static::HOST;
    }

    public static function getAvailableLocales()
    {
        return static::availableLocales;
    }
}
