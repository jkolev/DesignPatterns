<?php

namespace Pattern\Commands;

class MoveCommand extends BaseCommand
{
    /** @var  int */
    private $forwardDistance;

    /**
     * @param int $forwardDistance
     */
    public function setForwardDistance($forwardDistance)
    {
        $this->forwardDistance = $forwardDistance;
    }

    /**
     * @return int
     */
    public function getForwardDistance()
    {
        return $this->forwardDistance;
    }

    public function execute()
    {
        $this->robot->move($this->forwardDistance);
    }

    public function undo()
    {
        $this->robot->move(-$this->forwardDistance);
    }
}