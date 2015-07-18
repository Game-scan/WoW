<?php namespace GameScan\WoW;

use GameScan\Core\Request\Api\GameApiRequest;
use GameScan\Core\Tools\LoggerFactory;
use GameScan\WoW\Exceptions\HostNotFoundException;

class WowApiRequest extends GameApiRequest
{
    private $host = null;
    private $locale = null;

    public function setHost(HostInformations $hostInformations)
    {
        $this->host = $hostInformations;
    }

    public function setLocale($locale)
    {
        if($this->host === null){
            throw new HostNotFoundException;
        }
        if($this->isAvailableLocale($locale)){
            $this->locale = $locale;
        }else{
            LoggerFactory::getLogger()->info("The locale $locale isn't available for the host " . $this->host->getHost() );
        }

    }

    private function isAvailableLocale($locale)
    {
        return in_array($locale, $this->host->getAvailableLocales(), true);
    }
}
