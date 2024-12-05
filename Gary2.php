#!/usr/bin/env php
<?php

class Gary2
{
    private $x;
    private $y;
    private $direction;

    public function __construct()
    {
        $this->x = 0;
        $this->y = 0;
        $this->direction = 'N';
    }

    public function splitCommands($commands) {
        $splitCommands = str_split($commands);
        foreach($splitCommands as $command){
            if ($command == 'l'){
                if ($this->direction == 'N'){
                    $this->direction = 'W';
                }else if ($this->direction == 'E'){
                    $this->direction = 'N';
                }else if ($this->direction == 'S'){
                    $this->direction = 'E';
                }else if ($this->direction == 'W'){
                    $this->direction = 'S';
                }
            }elseif ($command == 'r'){
                if ($this->direction == 'N'){
                    $this->direction = 'E';
                }else if ($this->direction == 'E'){
                    $this->direction = 'S';
                }else if ($this->direction == 'S'){
                    $this->direction = 'W';
                }else if ($this->direction == 'W'){
                    $this->direction = 'N';
                }
            }elseif($command == 'm'){
                if ($this->direction == 'N'){
                    $this->y++;
                }else if ($this->direction == 'E'){
                    $this->x++;
                }else if ($this->direction == 'S'){
                    $this->y--;
                }else if ($this->direction == 'W'){
                    $this->x--;
                }
                $this->printPosition();
            }
        }
    }

    public function executeMove($command) {
            if ($command == 'l'){
                if ($this->direction == 'N'){
                    $this->direction = 'W';
                }else if ($this->direction == 'E'){
                    $this->direction = 'N';
                }else if ($this->direction == 'S'){
                    $this->direction = 'E';
                }else if ($this->direction == 'W'){
                    $this->direction = 'S';
                }
            }elseif ($command == 'r'){
                if ($this->direction == 'N'){
                    $this->direction = 'E';
                }else if ($this->direction == 'E'){
                    $this->direction = 'S';
                }else if ($this->direction == 'S'){
                    $this->direction = 'W';
                }else if ($this->direction == 'W'){
                    $this->direction = 'N';
                }
            }elseif($command == 'm'){
                if ($this->direction == 'N'){
                    $this->y++;
                }else if ($this->direction == 'E'){
                    $this->x++;
                }else if ($this->direction == 'S'){
                    $this->y--;
                }else if ($this->direction == 'W'){
                    $this->x--;
                }
                $this->printPosition();
            }
        }


    private function printPosition()
    {
        echo "($this->x, $this->y)\n";
    }
}
