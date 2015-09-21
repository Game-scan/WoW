<?php namespace GameScan\WoW\Entity;

use GameScan\WoW\EntityInformation;
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


    public function __construct(WowApiRequest $api, $locale = null)
    {
        $this->apiRequest = $api;
        if ($locale !== null) {
            $this->apiRequest->setLocale($locale);
        }
        $this->loadInformation();
    }

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
        return (new EntityInformation($entityInformation));
    }

    public function __toString()
    {
        return $this->entityInformation;
    }

    public function retreiveField($fieldName)
    {
        if (!$this->checkIfFieldExist($fieldName)) {
            $this->addField($fieldName);
            $this->loadInformation();
        }
    }

    protected function checkIfFieldExist($fieldName)
    {
        if ($this->parameters === null || empty($this->parameters['fields'])) {
            return false;
        }
        if (strpos($this->parameters['fields'], $fieldName) !== false) {
            return true;
        }
        return false;
    }

    protected function addField($fieldName)
    {
        $fields = explode(',', $this->parameters['fields']);
        if ($fields === false) {
            $fields = array();
        }
        $fields[] = $fieldName;
        $fields = array_unique($fields);
        $this->parameters['fields'] = implode(",", $fields);
    }

    protected function getHost()
    {
        return $this->apiRequest->getHost();
    }

    protected function getRegion()
    {
        return $this->apiRequest->getRegion();
    }

    protected function getApiRequest()
    {
        return $this->apiRequest;
    }
}
