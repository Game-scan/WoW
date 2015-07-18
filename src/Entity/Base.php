<?php namespace GameScan\WoW\Entity;

use GameScan\WoW\ApiConfiguration;
use GameScan\WoW\WowApiRequest;

class Base
{

    protected $apiRequest = null;

    protected function getApiRequest()
    {
        if ($this->apiRequest === null) {
            $this->apiRequest =  new WowApiRequest(new ApiConfiguration());
        }
        return $this->apiRequest;
    }

    public function setApiRequest(WowApiRequest $apiRequest)
    {
        $this->apiRequest = $apiRequest;
    }
}
