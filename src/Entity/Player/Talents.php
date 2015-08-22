<?php namespace GameScan\WoW\Entity\Player;

trait Talents
{

    abstract public function getEntityInformations();
    abstract public function retreiveField($fielName);

    public function mainTalentsTree()
    {
        $talents = $this->getMainTalent();
        return $talents->talents;
    }
    public function mainTalentsGlyphs()
    {
        $talents = $this->getMainTalent();
        return $talents->glyphs;
    }
    public function mainTalentsSpec()
    {
        $talents = $this->getMainTalent();
        return $talents->spec;
    }
    public function mainTalentsCalcTalent()
    {
        $talents = $this->getMainTalent();
        return $talents->calcTalent;
    }
    public function mainTalentsCalcSpec()
    {
        $talents = $this->getMainTalent();
        return $talents->calcSpec;
    }

    public function mainTalentsCalcGlyph()
    {
        $talents = $this->getMainTalent();
        return $talents->calcGlyph;
    }



    public function secondaryTalentsTree()
    {
        $talents = $this->getSecondaryTalent();
        return $talents->talents;
    }
    public function secondaryTalentsGlyphs()
    {
        $talents = $this->getSecondaryTalent();
        return $talents->glyphs;
    }
    public function secondaryTalentsSpec()
    {
        $talents = $this->getSecondaryTalent();
        return $talents->spec;
    }
    public function secondaryTalentsCalcTalent()
    {
        $talents = $this->getSecondaryTalent();
        return $talents->calcTalent;
    }
    public function secondaryTalentsCalcSpec()
    {
        $talents = $this->getSecondaryTalent();
        return $talents->calcSpec;
    }

    public function secondaryTalentsCalcGlyph()
    {
        $talents = $this->getSecondaryTalent();
        return $talents->calcGlyph;
    }



    public function getMainTalent()
    {
        $talents = $this->getTalents();
        return $talents[0];
    }

    public function getSecondaryTalent()
    {
        $talents = $this->getTalents();
        return $talents[1];
    }

    protected function getSelectedTalent($id)
    {
        $talents = $this->getTalents();
        if (isset($talents[0]->selected) && $talents[0]->selected === true) {
            return $talents[0];
        } else {
            return $talents[1];
        }
    }

    public function getTalents()
    {
        $this->retreiveField("talents");
        $talents = $this->getEntityInformations()->talents;
        return $talents;
    }
}
