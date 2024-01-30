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

class Tournament
{
    public $output;
    public $result;

    public function __construct()
    {
        $this->output = "Team                           | MP |  W |  D |  L |  P";
        $this->result = [];
    }

    public function addPoints(string $team, int $points)
    {
        if (!array_key_exists($team, $this->result)) {
            $this->result[$team] = ['team' => $team, 'MP' => 0,'W' => 0,'D' => 0,'L' => 0,'P' => 0];
        }
        
        $this->result[$team]['MP']++;
        $this->result[$team]['P'] += $points;
        $this->result[$team]['W'] += $points == 3 ? 1 : 0;
        $this->result[$team]['D'] += $points == 1 ? 1 : 0;
        $this->result[$team]['L'] += $points == 0 ? 1 : 0;
    }

    public function manageScore($score)
    {
        $score = explode(';', $score);
        
        if (sizeof($score) != 3) return;
        $this->addPoints($score[0], [3,1,0][array_search($score[2], ['win','draw','loss'])]);
        $this->addPoints($score[1], [0,1,3][array_search($score[2], ['win','draw','loss'])]);
    }

    public function tally(string $input)
    {
        $scores = explode("\n", $input);

        array_walk($scores, [$this, 'manageScore']);
            
        uasort($this->result, function ($a, $b) {
            return $a['P'] == $b['P'] ? $a['team'] > $b['team'] : $a['P'] < $b['P'];
        });
        array_walk($this->result, function ($result) {
            $team = str_pad($result['team'], 31, ' ');
            $this->output .= "\n{$team}|  {$result['MP']} |  {$result['W']} |  {$result['D']} |  {$result['L']} |  {$result['P']}";
        });
        return $this->output;
    }
}