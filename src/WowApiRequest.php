<?php namespace GameScan\WoW;

use GameScan\Core\Request\Api\GameApiRequest;
use GameScan\Core\Tools\LoggerFactory;
use GameScan\WoW\Exceptions\HostNotFoundException;

class WowApiRequest extends GameApiRequest
{
    /**
     * @type HostInformations
     */
    private $host = null;
    private $locale = null;

    public function setHost(HostInformations $hostInformations)
    {
        $this->host = $hostInformations;
    }

    public function getHost()
    {
        return $this->host->getHost();
    }

    public function setLocale($locale)
    {
        $this->checkHost();
        if ($this->isAvailableLocale($locale)) {
            $this->locale = $locale;
        } else {
            LoggerFactory::getLogger()->info("The locale $locale isn't available for the host " . $this->getHost());
        }
    }
    private function checkHost()
    {
        if ($this->host === null) {
            throw new HostNotFoundException;
        }
    }

    private function isAvailableLocale($locale)
    {
        return in_array($locale, $this->host->getAvailableLocales(), true);
    }

    public function get($ressourceToGrab, array $parameters = null)
    {
        $this->checkHost();
        $ressourceToGrab = $this->buildUrl($ressourceToGrab);
        $parameters = $this->addLocaleToParameters($parameters);
        return parent::get($ressourceToGrab, $parameters);
    }

    private function buildUrl($ressourceToGrab)
    {
        $ressourceToGrab = $this->getHost() . $ressourceToGrab;
        return $ressourceToGrab;
    }

    private function addLocaleToParameters($parameters)
    {
        if ($parameters === null || $this->locale === null) {
            return $parameters;
        }
        $parameters['locale'] = $this->locale;
        return $parameters;
    }
}
