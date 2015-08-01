<?php namespace GameScan\WoW\Entity\Player;

trait Guild
{

    abstract public function getEntityInformations();
    abstract public function retreiveField($fielName);

    public function guildName()
    {
        $this->retreiveField("guild");
        return $this->getEntityInformations()->guild->name;
    }

    public function guildRealm()
    {
        $this->retreiveField("guild");
        return $this->getEntityInformations()->guild->realm;
    }
    public function guildBattlegroup()
    {
        $this->retreiveField("guild");
        return $this->getEntityInformations()->guild->battlegroup;
    }
    public function guildMembers()
    {
        $this->retreiveField("guild");
        return $this->getEntityInformations()->guild->members;
    }
    public function guildAchievementPoints()
    {
        $this->retreiveField("guild");
        return $this->getEntityInformations()->guild->achievementPoints;
    }
    public function guildEmblem()
    {
        $this->retreiveField("guild");
        return $this->getEntityInformations()->guild->emblem;
    }
}
