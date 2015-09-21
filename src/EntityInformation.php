<?php namespace GameScan\WoW;

class EntityInformation
{

    private $informations = null;

    public function __construct($informations)
    {
        $this->informations = $informations;
    }

    public function __get($name)
    {
        if (! isset($this->informations->{$name})) {
            return null;
        }
        $requestedInformation = $this->informations->{$name};
        return (is_object($requestedInformation)) ? new EntityInformation($requestedInformation) : $requestedInformation;
    }
}
