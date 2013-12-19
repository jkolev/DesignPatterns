<?php

namespace Pattern\Commands;

class ScoopCommand extends BaseCommand
{
    /** @var  boolean */
    private $scoopUpwards;

    /**
     * @param boolean $scoopUpwards
     */
    public function setScoopUpwards($scoopUpwards)
    {
        $this->scoopUpwards = $scoopUpwards;
    }

    /**
     * @return boolean
     */
    public function getScoopUpwards()
    {
        return $this->scoopUpwards;
    }

    public function execute()
    {
        $this->robot->scoop($this->scoopUpwards);
    }

    public function undo()
    {
        $this->robot->scoop(!$this->scoopUpwards);
    }
}