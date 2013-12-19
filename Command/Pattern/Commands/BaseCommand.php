<?php

namespace Pattern\Commands;

use Pattern\Robot;

abstract class BaseCommand implements ICommand
{
    /** @var  Robot */
    protected $robot;

    /**
     * @param Robot $robot
     */
    public function __construct(Robot $robot)
    {
        $this->robot = $robot;
    }

    public abstract function execute();

    public abstract function undo();
}