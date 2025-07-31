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
 * 
 * Bob answers 'Sure.' if you ask him a question, such as "How are you?".

He answers 'Whoa, chill out!' if you YELL AT HIM (in all capitals).

He answers 'Calm down, I know what I'm doing!' if you yell a question at him.

He says 'Fine. Be that way!' if you address him without actually saying
anything.

He answers 'Whatever.' to anything else.
 */

declare(strict_types=1);

class Bob
{
    public function respondTo(string $str): string
    {
        if($str == "How are you?") return "Sure";
        else if($str == strtoupper($str) && substr($str, -1) == "?") return "Calm down, I know what I'm doing!";
        else if($str == strtoupper($str) && substr($str, -1) != "?") return "Whoa, chill out!";
        else if($str == "") return "Fine. Be that way!";
        else return "Whatever.";
    }
}
