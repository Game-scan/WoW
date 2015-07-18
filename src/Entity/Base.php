<?php namespace GameScan\WoW\Entity;

use GameScan\WoW\WowApiRequest;

class Base
{

    protected $apiRequest = null;

    public function setApiRequest(WowApiRequest $apiRequest)
    {
        $this->apiRequest = $apiRequest;
    }
}
