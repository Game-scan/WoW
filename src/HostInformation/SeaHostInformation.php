<?php namespace GameScan\WoW\HostInformation;

use GameScan\WoW\HostInformations;

class SeaHostInformation extends HostInformations
{

    const HOST = "https://sea.api.battle.net/";
    const REGION = "sea";
    protected $availableLocales = [
        'en_US',
    ];
}
