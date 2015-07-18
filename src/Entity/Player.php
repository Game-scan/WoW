<?php namespace GameScan\WoW\Entity;

use GameScan\WoW\WowApiRequest;

class Player extends Base
{

    protected $realmName;
    protected $characterName;

    public function __construct(WowApiRequest $api, $realmName, $characterName, $locale = null)
    {
        $this->apiRequest = $api;
        $this->realmName = $realmName;
        $this->characterName = $characterName;
        if ($locale !== null) {
            $this->apiRequest->setLocale($locale);
        }
        $this->loadInformation();
    }

    public function getRessource()
    {
        return "wow/character/" . $this->realmName . "/" . $this->characterName;
    }

    public function getLastModified()
    {
        return $this->getEntityInformations()->lastInformation;
    }

    public function name()
    {
        return $this->getEntityInformations()->name;
    }

    public function realm()
    {
        return $this->getEntityInformations()->realm;
    }

    public function playerClass()
    {
        return $this->getEntityInformations()->class;
    }

    public function race()
    {
        return $this->getEntityInformations()->race;
    }

    public function gender()
    {
        return $this->getEntityInformations()->gender;
    }

    public function level()
    {
        return $this->getEntityInformations()->level;
    }

    public function achievementPoints()
    {
        return $this->getEntityInformations()->achievementPoints;
    }


    public function thumbnail()
    {
        return $this->getEntityInformations()->thumbnail;
    }

    public function calcClass()
    {
        return $this->getEntityInformations()->calcClass;
    }

    public function totalHonorableKills()
    {
        return $this->getEntityInformations()->totalHonorableKills;
    }
}
