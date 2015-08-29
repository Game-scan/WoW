<?php namespace GameScan\WoW\Entity;

class Realms extends Base
{

    public function getRessource()
    {
        return "/wow/realm/status";
    }

    public function realms()
    {
        return $this->getEntityInformations()->realms;
    }
}
