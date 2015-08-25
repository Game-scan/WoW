<?php namespace GameScan\WoW\HostInformation;

use GameScan\WoW\HostInformations;

class UsHostInformation extends HostInformations
{

    const HOST = "https://us.api.battle.net/";
    const REGION = "us";
    protected $availableLocales = [
        'en_US',
        'es_MX',
        'pt_BR'
    ];
}
