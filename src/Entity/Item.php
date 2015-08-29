<?php namespace GameScan\WoW\Entity;

use GameScan\WoW\WowApiRequest;

class Item extends Base
{
    protected $itemId;

    public function __construct(WowApiRequest $api, $itemId, $locale = null)
    {
        $this->apiRequest = $api;
        $this->itemId = $itemId;
        if ($locale !== null) {
            $this->apiRequest->setLocale($locale);
        }
        $this->loadInformation();
    }

    public function getRessource()
    {
        return "/wow/item/" . $this->itemId;
    }

    public function id()
    {
        return $this->getEntityInformations()->id;
    }

    public function disenchantingSkillRank()
    {
        return $this->getEntityInformations()->disenchantingSkillRank;
    }
    public function description()
    {
        return $this->getEntityInformations()->description;
    }
    public function name()
    {
        return $this->getEntityInformations()->name;
    }
    public function icon()
    {
        return $this->getEntityInformations()->icon;
    }
    public function stackable()
    {
        return $this->getEntityInformations()->stackable;
    }
    public function itemBind()
    {
        return $this->getEntityInformations()->itemBind;
    }
    public function bonusStats()
    {
        return $this->getEntityInformations()->bonusStats;
    }
    public function itemSpells()
    {
        return $this->getEntityInformations()->itemSpells;
    }
    public function buyPrice()
    {
        return $this->getEntityInformations()->buyPrice;
    }
    public function itemClass()
    {
        return $this->getEntityInformations()->itemClass;
    }
    public function itemSubClass()
    {
        return $this->getEntityInformations()->itemSubClass;
    }
    public function containerSlots()
    {
        return $this->getEntityInformations()->containerSlots;
    }
    public function weaponInfo()
    {
        return $this->getEntityInformations()->weaponInfo;
    }
    public function inventoryType()
    {
        return $this->getEntityInformations()->inventoryType;
    }
    public function equippable()
    {
        return $this->getEntityInformations()->equippable;
    }
    public function itemLevel()
    {
        return $this->getEntityInformations()->itemLevel;
    }
    public function maxCount()
    {
        return $this->getEntityInformations()->maxCount;
    }
    public function maxDurability()
    {
        return $this->getEntityInformations()->maxDurability;
    }
    public function minFactionId()
    {
        return $this->getEntityInformations()->minFactionId;
    }
    public function minReputation()
    {
        return $this->getEntityInformations()->minReputation;
    }
    public function quality()
    {
        return $this->getEntityInformations()->quality;
    }
    public function sellPrice()
    {
        return $this->getEntityInformations()->sellPrice;
    }
    public function requiredSkill()
    {
        return $this->getEntityInformations()->requiredSkill;
    }
    public function requiredLevel()
    {
        return $this->getEntityInformations()->requiredLevel;
    }
    public function requiredSkillRank()
    {
        return $this->getEntityInformations()->requiredSkillRank;
    }
    public function itemSource()
    {
        return $this->getEntityInformations()->itemSource;
    }
    public function baseArmor()
    {
        return $this->getEntityInformations()->baseArmor;
    }
    public function hasSockets()
    {
        return $this->getEntityInformations()->hasSockets;
    }
    public function isAuctionable()
    {
        return $this->getEntityInformations()->isAuctionable;
    }
    public function armor()
    {
        return $this->getEntityInformations()->armor;
    }
    public function displayInfoId()
    {
        return $this->getEntityInformations()->displayInfoId;
    }
    public function nameDescription()
    {
        return $this->getEntityInformations()->nameDescription;
    }
    public function nameDescriptionColor()
    {
        return $this->getEntityInformations()->nameDescriptionColor;
    }
    public function upgradable()
    {
        return $this->getEntityInformations()->upgradable;
    }
    public function heroicTooltip()
    {
        return $this->getEntityInformations()->heroicTooltip;
    }
    public function context()
    {
        return $this->getEntityInformations()->context;
    }
    public function bonusLists()
    {
        return $this->getEntityInformations()->bonusLists;
    }
    public function availableContexts()
    {
        return $this->getEntityInformations()->availableContexts;
    }
    public function bonusSummary()
    {
        return $this->getEntityInformations()->bonusSummary;
    }
}
