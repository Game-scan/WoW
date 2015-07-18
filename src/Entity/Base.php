<?php namespace GameScan\WoW\Entity;

use GameScan\WoW\WowApiRequest;

abstract class Base
{

    /**
     * @type WowApiRequest
     */
    protected $apiRequest = null;

    public function setApiRequest(WowApiRequest $apiRequest)
    {
        $this->apiRequest = $apiRequest;
    }

    abstract public function getRessource();
}
