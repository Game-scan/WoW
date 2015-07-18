<?php namespace GameScan\WoW\Entity;

use GameScan\WoW\ApiConfiguration;
use GameScan\WoW\WowApiRequest;

class Base
{

    protected $apiRequest;

    public function __construct(WowApiRequest $apiRequest = null)
    {
        $this->apiRequest = $apiRequest !== null ? $apiRequest : new WowApiRequest(new ApiConfiguration());
    }
}
