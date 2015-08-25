<?php namespace GameScan\WoW\Entity\Player;

trait Base
{
    abstract public function getEntityInformations();
    abstract public function getHost();
    abstract public function getRegion();

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

    public function getAvatarUrl()
    {
        $host = str_replace(".api", '', $this->getHost());
        $region = $this->getRegion();
        return $host . "static-render/" . $region . "/" . $this->thumbnail();
    }

    public function getProfileMainUrl()
    {
        return str_replace("avatar", "profilemain", $this->getAvatarUrl());
    }


    public function getInsetUrl()
    {
        return str_replace("avatar", "inset", $this->getAvatarUrl());
    }
}
