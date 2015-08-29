<?php namespace GameScan\WoW\Entity;

use GameScan\WoW\WowApiRequest;

class Realms extends Base
{
    public function __construct(WowApiRequest $api, $locale = null)
    {
        parent::__construct($api, $locale);
    }

    public function getRessource()
    {
        return "/wow/realm/status";
    }

    public function realms()
    {
        return $this->getEntityInformations()->realms;
    }
}
