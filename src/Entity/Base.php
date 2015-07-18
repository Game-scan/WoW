<?php namespace GameScan\WoW\Entity;

use GameScan\WoW\WowApiRequest;

abstract class Base
{

    /**
     * @type WowApiRequest
     */
    protected $apiRequest = null;
    protected $playerInformation = null;


    public function setApiRequest(WowApiRequest $apiRequest)
    {
        $this->apiRequest = $apiRequest;
    }

    abstract public function getRessource();
    abstract public function getParametters();

    public function loadInformation()
    {
        $this->playerInformation = $this->apiRequest->get($this->getRessource(), $this->getParametters());
    }
}
