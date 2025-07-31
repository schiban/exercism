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

function toRoman(int $number): string
{
    /*
    I, V, X, L, C, D, M.
    I = 1
    II = 2
    III = 3
    IV = 4
    V = 5
    VI = 6
    VII = 7
    VIII = 8
    IX = 9
    X = 10
    L = 50
    C = 100
    D = 500
    M = 1000
    */

    $string = strrev((string) $number);
    $newString = "";
    for($i = 0; $i < strlen($string); $i++)
    {
        switch ($string[$i])
        {
            case 1:
                if ($i == 3)
                    $newString = "M"; // 1000 = M
                else if ($i == 2)
                    $newString .= "C"; // 100 = C
                else if ($i == 1)
                    $newString .= "X"; // 10 = X
                else
                    $newString .= "I"; // 1 = I
                break;
            case 2:
                if ($i == 3)
                    $newString = "II"; // 2000 = MM
                else if ($i == 2)
                    $newString .= "CC"; // 200 = CC
                else if ($i == 1)
                    $newString .= "XX"; // 20 = XX
                else
                    $newString .= "II"; // 2 = II
                break;
            case 3:
                if ($i == 3)
                    $newString = "MMM"; // 3000 = MMM
                else if ($i == 2)
                    $newString .= "CCC"; // 300 = CCC
                else if ($i == 1)
                    $newString .= "XXX"; // 30 = XXX
                else
                    $newString .= "III"; // 3 = III
                break;
            case 4:
                if ($i == 3)
                    $newString = "MMMM"; // 4000 = MMMM
                else if ($i == 2)
                    $newString .= "DC"; // 400 = CD
                else if ($i == 1)
                    $newString .= "LX"; // 40 = XL
                else
                    $newString .= "VI"; // 4 = IV
                break;
            case 5:
                if ($i == 3)
                    $newString .=  "MMMMM"; // 5000 = MMMMM
                else if ($i == 2)
                    $newString .=  "D"; // 500 = D
                else if ($i == 1)
                    $newString .= "L"; // 50 = L
                else
                    $newString .= "V"; // 5 = V
                break;
            case 6:
                if ($i == 2)
                    $newString .=  "CD"; // 600 = DC
                else if ($i == 1)
                    $newString .= "XL"; // 60 = LX
                else
                    $newString .= "IV"; // 6 = VI
                break;
            case 7:
                if ($i == 2)
                    $newString .=  "CCD"; // 700 = DCC
                else if ($i == 1)
                    $newString .= "XXL"; // 70 = LXX
                else
                    $newString .= "IIV"; // 7 = VI
                break;
            case 8:
                if ($i == 2)
                    $newString .=  "CCCD"; // 800 = DCCC
                else if ($i == 1)
                    $newString .= "XXXL"; // 80 = LXXX
                else
                    $newString .= "IIIV"; // 8 = VIII
                break;
            case 9:
                if ($i == 2)
                    $newString .=  "MC"; // 900 = CM
                else if ($i == 1)
                    $newString .= "CX"; // 90 = XC
                else
                    $newString .= "XI"; // 9 = IX
                break;
            default:
                $newString .= "";
                break;
        }
    }
    return strrev($newString);
}

print(toRoman(1104));