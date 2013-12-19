<?php

use Pattern\Commands\MoveCommand;
use Pattern\Commands\RotateCommand;
use Pattern\Commands\ScoopCommand;
use Pattern\Robot;
use Pattern\RobotController;

spl_autoload_extensions(".php");
spl_autoload_register();

//  lets create a robot
$robot = new Robot();

//  and a controller
$controller = new RobotController();

//  now, we can create and queue some commands
$moveCommand = new MoveCommand($robot);
$moveCommand->setForwardDistance(1200);

$controller->queueCommand($moveCommand);

$rotateCommand = new RotateCommand($robot);
$rotateCommand->setLeftRotation(30);

$controller->queueCommand($rotateCommand);

$scoopCommand = new ScoopCommand($robot);
$scoopCommand->setScoopUpwards(true);

$controller->queueCommand($scoopCommand);

//  finally, we can push the big red button
$controller->executeCommands();

//  and even revert some of robot's actions back
$controller->undoCommands(3);

// OUTPUT

//  Robot moved forwards 1200 mm.
//  Robot rotated left 30 degrees.
//  Robot gathered soil in scoop.
//  Robot released scoop contents.
//  Robot rotated right 30 degrees.
//  Robot moved backwards 1200 mm.
