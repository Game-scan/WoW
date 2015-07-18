<?php namespace GameScan\WoW;

use GameScan\Core\Request\Api\ApiConfigurationInterface;
use GameScan\Core\Tools\Environment;

class ApiConfiguration implements ApiConfigurationInterface
{
    private $apiKey = null;

    /**
     * Get parameters mandatory for request an api
     * @return array
     */
    public function getParameters()
    {
        return [
            "apikey" => $this->getApiKey()
        ];
    }

    /**
     * Get headers mandatory for request an api
     * @return array
     */
    public function getHeaders()
    {
        return array();
    }

    private function getApiKey()
    {
        if ($this->apiKey === null) {
            $this->apiKey = (new Environment())->get("WOW_API_KEY");
        }
        return $this->apiKey;
    }
}
