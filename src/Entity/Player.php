<?php namespace GameScan\WoW\Entity;

class Player extends Base
{

    protected $realmName;
    protected $characterName;

    public function __construct($realmName, $characterName, $locale = null)
    {
        $this->realmName = $realmName;
        $this->characterName = $characterName;
        if($locale !== null){
            $this->apiRequest->setLocale($locale);
        }
    }
}
