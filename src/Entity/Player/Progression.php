<?php namespace GameScan\WoW\Entity\Player;

trait Progression
{

    abstract public function getEntityInformations();
    abstract public function retreiveField($fielName);

    public function raids()
    {
        $this->retreiveField("progression");
        return $this->getEntityInformations()->progression->raids;
    }

    public function raidById($id)
    {
        return $this->extratRaid("id", $id);
    }

    public function raidByName($name)
    {
        return $this->extratRaid("name", $name);
    }

    protected function extratRaid($key, $value)
    {
        $raids = $this->raids();
        $raid = array_filter($raids, function ($raid) use ($key, $value) {
            return $raid->{$key} === $value;
        });

        return array_shift($raid);
    }
}
