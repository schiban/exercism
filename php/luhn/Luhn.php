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

function isValid(string $number): bool
{
    $number = preg_replace('/\s+/', '', $number);
    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $number) || preg_match("/[a-z]/i", $number) || strlen($number) <= 1) return false;
    $number = strrev($number);
    $newNumber = 0;
    $sum = 0;
    for($i = 0; $i < strlen($number); $i++)
    {
        if($i%2!=0)
            $newNumber = (int) $number[$i]*2 > 9 ? (int) $number[$i]*2 - 9 : (int) $number[$i]*2;
        else
            $newNumber = $number[$i];
        $sum += $newNumber;
    }
    return $sum % 10 == 0 ? true : false;
}

var_dump(isValid(" 5 9a "));
