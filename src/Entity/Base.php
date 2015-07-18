<?php namespace GameScan\WoW\Entity;

use GameScan\WoW\Exceptions\EntityInformationDecodeException;
use GameScan\WoW\WowApiRequest;

abstract class Base
{

    /**
     * @type WowApiRequest
     */
    protected $apiRequest = null;
    protected $entityInformation = null;
    protected $parameters = null;


    public function setApiRequest(WowApiRequest $apiRequest)
    {
        $this->apiRequest = $apiRequest;
    }

    abstract public function getRessource();

    public function getParametters()
    {
        return $this->parameters;
    }

    public function loadInformation()
    {
        $this->entityInformation = $this->apiRequest->get($this->getRessource(), $this->getParametters());
    }

    protected function getEntityInformations()
    {
        if ($this->entityInformation === null) {
            $this->loadInformation();
        }
        $entityInformation = json_decode($this->entityInformation);
        if (JSON_ERROR_NONE !== json_last_error()) {
            throw new EntityInformationDecodeException(json_last_error_msg());
        }
        return $entityInformation;
    }
}
