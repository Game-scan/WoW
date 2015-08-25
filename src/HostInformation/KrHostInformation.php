<?php namespace GameScan\WoW\HostInformation;

use GameScan\WoW\HostInformations;

class KrHostInformation extends HostInformations
{

    const HOST = "https://kr.api.battle.net/";
    const REGION = "kr";
    protected $availableLocales = [
        'ko_KR',
    ];
}
