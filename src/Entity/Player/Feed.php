<?php namespace GameScan\WoW\Entity\Player;

trait Feed
{

    abstract public function getEntityInformations();
    abstract public function retreiveField($fielName);

    public function feed()
    {
        $this->retreiveField("feed");
        return $this->getEntityInformations()->feed;
    }
}
