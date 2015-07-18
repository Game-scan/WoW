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
        return "wow/character/". $this->realmName ."/" . $this->characterName;
    }
}
