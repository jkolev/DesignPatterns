<?php

namespace Pattern\Commands;

class RotateCommand extends BaseCommand
{
    /** @var  int */
    private $leftRotation;

    /**
     * @param int $leftRotation
     */
    public function setLeftRotation($leftRotation)
    {
        $this->leftRotation = $leftRotation;
    }

    /**
     * @return int
     */
    public function getLeftRotation()
    {
        return $this->leftRotation;
    }

    public function execute()
    {
        $this->robot->rotateLeft($this->leftRotation);
    }

    public function undo()
    {
        $this->robot->rotateLeft(-$this->leftRotation);
    }
}