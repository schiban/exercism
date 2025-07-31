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

class ResistorColorTrio
{
    public function label(array $colors): string
    {
        $array = [
            'black',
            'brown',
            'red',
            'orange',
            'yellow',
            'green',
            'blue',
            'violet',
            'grey',
            'white',
        ];

        $color[0] = array_search($colors[0], $array);
        $color[1] = array_search($colors[1], $array);
        $final = implode("", $color);

        $color[2] = array_search($colors[2], $array);
        for($i=1; $i <= $color[2]; $i++)
        {
            $final .= "0";
        }

        switch (true)
        {
            case ($color[2] < 3):
                return "$final ohms"; 
                break;
            case ($color[2] < 6):
                $final = substr($final, 0, -3);
                return "$final kiloohms";
                break;
            default:
                $final = substr($final, 0, -6);
                return "$final megaohms";
                break;
        }
    }
}
$test = new ResistorColorTrio();

print_r($test->label(['red', 'black', 'orange']));
