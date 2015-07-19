<?php namespace GameScan\WoW\Entity\Player;

trait Items
{

    abstract public function getEntityInformations();
    abstract public function retreiveField($fielName);

    public function averageItemLevel()
    {
        $this->retreiveField("items");
        return $this->getEntityInformations()->items->averageItemLevel;
    }

    public function averageItemLevelEquipped()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->averageItemLevelEquipped;
    }

    public function head()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->head;
    }
    public function neck()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->neck;
    }
    public function shoulder()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->shoulder;
    }
    public function back()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->back;
    }
    public function chest()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->chest;
    }
    public function wrist()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->wrist;
    }
    public function hands()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->hands;
    }
    public function waist()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->waist;
    }
    public function legs()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->legs;
    }
    public function feet()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->feet;
    }
    public function finger1()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->finger1;
    }
    public function finger2()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->finger2;
    }
    public function trinket1()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->trinket1;
    }
    public function trinket2()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->trinket2;
    }
    public function mainHand()
    {
        $this->retreiveField("items");

        return $this->getEntityInformations()->items->mainHand;
    }
}
