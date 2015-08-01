<?php namespace GameScan\WoW\HostInformation;

use GameScan\WoW\HostInformations;

class EuHostInformation extends HostInformations
{

    const HOST = "https://eu.api.battle.net/";
    protected  $availableLocales = [
        'en_GB',
        'es_ES',
        'fr_FR',
        'ru_RU',
        'de_DE',
        'pt_PT',
        'it_IT',
    ];
}
