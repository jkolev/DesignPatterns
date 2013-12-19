<?php

namespace Pattern;
use Pattern\Commands\ICommand;

/**
 * Class RobotController
 *
 * Our invoker class.
 * This is somehow enhanced version of that in the template code for the pattern, as it will contain a queue of commands
 * rather than a single reference. In addition, a stack of commands will be used to keep a record of the robot's
 * activities. This stack can then be used to undo commands that were executed in error.
 *
 * @package Command
 */
class RobotController
{
    /** @var ICommand[] */
    private $commands;

    /** @var ICommand[] */
    private $undoStack;

    public function __construct()
    {
        $this->commands = [];
        $this->undoStack = [];
    }

    /**
     * @param ICommand $command
     */
    public function queueCommand(ICommand $command)
    {
        $this->commands[] = $command;
    }

    public function executeCommands()
    {
        foreach ($this->commands as $command) {
            $command->execute();
            $this->undoStack[] = $command;
        }
    }

    /**
     * @param int $count
     */
    public function undoCommands($count)
    {
        while ($count > 0 && count($this->undoStack) > 0) {
            $command = array_pop($this->undoStack);
            $command->undo();
            $count--;
        }
    }
}