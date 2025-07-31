<?php

class PizzaPi
{
    public function calculateDoughRequirement(int $pizzas, int $persons)
    {
        return $pizzas * (($persons * 20) + 200);
    }

    public function calculateSauceRequirement(int $pizzas, int $sauce)
    {
        return $pizzas * 125 / $sauce;
    }

    public function calculateCheeseCubeCoverage(int $cheese_dimension, float $thickness, int $diameter)
    {
        return floor(($cheese_dimension**3) / ($thickness * M_PI * $diameter));
    }

    public function calculateLeftOverSlices(int $pizzas, int $friends)
    {
        return ($pizzas*8) % $friends;
    }
}
