<?php

class Position
{
    public $x;
    public $y;

    public function __construct(int $y, int $x)
    {
        $this->y = $y;
        $this->x = $x;
    }
}
