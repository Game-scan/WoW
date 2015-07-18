<?php namespace GameScan\WoW\HostInformation;

use GameScan\WoW\HostInformations;

class UsHostInformation extends HostInformations
{

    const HOST = "https://us.api.battle.net/";
    protected static $availableLocales = [
        'en_US',
        'es_MX',
        'pt_BR'
    ];
}
