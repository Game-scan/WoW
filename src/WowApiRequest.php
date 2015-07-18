<?php namespace GameScan\WoW;

use GameScan\Core\Request\Api\GameApiRequest;

class WowApiRequest extends GameApiRequest
{
    private $host = null;

    public function setHost(HostInformations $hostInformations)
    {
        $this->host = $hostInformations;
    }

    public function setLocale()
    {
        if($this->host === null){
            throw new
        }
    }
}
