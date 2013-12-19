<?php

namespace Pattern\Commands;

interface ICommand
{
    public function execute();

    public function undo();
} 