<?php namespace GameScan\WoW\Entity;

class CharacterClass extends Base
{

    public function getRessource()
    {
        return "/wow/data/character/classes";
    }

    public function getClasses()
    {
        return $this->getEntityInformations()->classes;
    }

    public function getClassesName()
    {
        $classes = $this->getClasses();
        $classesSet = array();
        foreach ($classes as $characterClass) {
            $classesSet[$characterClass->id] = $characterClass->name;
        }
        return  $classesSet;
    }
}
