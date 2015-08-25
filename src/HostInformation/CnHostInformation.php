<?php namespace GameScan\WoW\HostInformation;

use GameScan\WoW\HostInformations;

class CnHostInformation extends HostInformations
{

    const HOST = "https://api.battlenet.com.cn";
    const REGION = "cn";
    protected $availableLocales = [
        'zh_CN',
    ];
}
