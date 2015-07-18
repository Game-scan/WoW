<?php namespace GameScan\WoW\Entity;

use GameScan\WoW\WowApiRequest;

class Realms extends Base
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
        return "/wow/realm/status";
    }

    public function realms()
    {
        return $this->getEntityInformations()->realms;
    }
}
