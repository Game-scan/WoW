<?php namespace GameScan\WoW\Entity\Player;

trait Base
{
    abstract public function getEntityInformations();
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
