<?php namespace GameScan\WoW\HostInformation;

use GameScan\WoW\HostInformations;

class TwHostInformation extends HostInformations
{

    const HOST = "https://us.api.battle.net/";
    protected static $availableLocales = [
        'zh_TW',
    ];
}
