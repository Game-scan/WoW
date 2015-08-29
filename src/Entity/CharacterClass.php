<?php namespace GameScan\WoW\Entity;

use GameScan\WoW\WowApiRequest;

class CharacterClass extends Base
{


    public function __construct(WowApiRequest $api, $locale = null)
    {
        $this->apiRequest = $api;
        if ($locale !== null) {
            $this->apiRequest->setLocale($locale);
        }
        $this->loadInformation();
    }

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
        foreach($classes as $characterClass ){
            $classesSet[$characterClass->id] = $characterClass->name ;
        }
        return  $classesSet;
    }



}
