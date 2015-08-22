<?php namespace GameScan\WoW\Entity;

use GameScan\WoW\WowApiRequest;
use GameScan\WoW\Entity\Player\Base as PlayerBase;
use GameScan\WoW\Entity\Player\Items as PlayerItems;
use GameScan\WoW\Entity\Player\Guild as PlayerGuild;
use GameScan\WoW\Entity\Player\Talents as PlayerTalents;
use GameScan\WoW\Entity\Player\Progression as PlayerProgression;

class Player extends Base
{
    use PlayerBase, PlayerItems, PlayerGuild, PlayerTalents, PlayerProgression;
    protected $realmName;
    protected $characterName;

    public function __construct(WowApiRequest $api, $realmName, $characterName, $locale = null, array $scope = null)
    {
        $this->apiRequest = $api;
        $this->realmName = $realmName;
        $this->characterName = $characterName;
        if ($locale !== null) {
            $this->apiRequest->setLocale($locale);
        }
        if ($scope !== null) {
            foreach ($scope as $field) {
                $this->addField($field);
            }
        }
        $this->loadInformation();
    }

    public function getRessource()
    {
        return "wow/character/" . $this->realmName . "/" . $this->characterName;
    }
}
