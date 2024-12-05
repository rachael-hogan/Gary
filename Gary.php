#!/usr/bin/env php
<?php

class Gary
{
    private $x;
    private $y;
    private $direction;
    private $directions = ['N', 'E', 'S', 'W'];

    public function __construct()
    {
        $this->x = 0;
        $this->y = 0;
        $this->direction = 0; // Index in $directions, 0 -> North
    }

    public function move()
    {
        switch ($this->directions[$this->direction]) {
            case 'N':
                $this->y += 1;
                break;
            case 'E':
                $this->x += 1;
                break;
            case 'S':
                $this->y -= 1;
                break;
            case 'W':
                $this->x -= 1;
                break;
        }
        $this->printPosition();
    }

    public function turnLeft()
    {
        $this->direction = ($this->direction - 1 + 4) % 4; // Turn left
    }

    public function turnRight()
    {
        $this->direction = ($this->direction + 1) % 4; // Turn right
    }

    public function executeCommands($commands)
    {
        foreach (str_split($commands) as $command) {
            switch ($command) {
                case 'm':
                    $this->move();
                    break;
                case 'l':
                    $this->turnLeft();
                    break;
                case 'r':
                    $this->turnRight();
                    break;
                default:
                    echo "Invalid command: $command\n";
                    return;
            }
        }
    }

    private function printPosition()
    {
        echo "($this->x, $this->y)\n";
    }
}

