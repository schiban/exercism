<?php

/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */

declare(strict_types=1);

class HighScores
{
    // Your task is to build a high-score component of the classic Frogger game, one of the highest selling and addictive games of all time, and a classic of the arcade era. Your task is to write methods that return the highest score from the list, the last added score and the three highest scores.
    public $scores;
    public $personalBest;
    public $latest;
    public $personalTopThree;

    public function __construct(array $scores)
    {
        $this->scores = $scores;
        $this->personalBest = $this->personalBest();
        $this->latest = $this->latest();
        $this->personalTopThree = $this->personalTopThree();
    }

    public function personalBest()
    {       
        return min($this->scores);
    }

    public function latest()
    {
        return end($this->scores);
    }

    public function personalTopThree()
    {
        rsort($this->scores);
        $scores = [$this->scores[0], $this->scores[1], $this->scores[2]];
        return $scores;
    }
}

$teste = new HighScores([100, 110, 40, 30, 10, 92, 12]);

print_r($teste->highestThreeScores());
