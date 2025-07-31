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

class ProteinTranslation
{
    public function getProteins(string $condons)
    {
        if(empty($condons)) return "Invalid codon";
        $proteins = [
            "Methionine"    => "AUG",
            "Phenylalanine" => "UUUUUC",
            "Leucine"       => "UUAUUG",
            "Serine"        => "UCUUCCUCAUCG",
            "Tyrosine"      => "UAUUAC",
            "Cysteine"      => "UGUUGC",
            "Tryptophan"    => "UGG",
            "STOP"          => "UAAUAGUGA"
        ];
        $newString = "";
        $newArray = "";

        for($i=0;$i<strlen($condons);$i++)
        {
            if($i%3 == 0 && $i!=0)
            {
                if(($condons[$i].$condons[$i+1].$condons[$i+2]) == "UAA" || ($condons[$i].$condons[$i+1].$condons[$i+2]) == "UAG" || ($condons[$i].$condons[$i+1].$condons[$i+2]) == "UGA")
                {
                    $i = strlen($condons);
                }
                else
                {
                    $newArray .= "$condons[$i]";
                }
            }
            else
            {
                $newArray .= "$condons[$i]";
            }
        }
        // print_r($newArray);
        // echo "\n";

        $translater = [];

        if((string) $newArray != "")
        {
            foreach($proteins as $key => $value)
            {
                if((string) $newArray == $value)
                {
                    $translater[] = $key;
                }
            }
        }
        else
        {
            foreach($proteins as $key => $value)
            {
                if($condons == $value)
                {
                    $translater[] = $key;
                }
            }
        }

        if(empty($translater)) throw new InvalidArgumentException("Invalid codon");

        return $translater;
    }
}

$teste = new ProteinTranslation();

print_r($teste->getProteins('AUG'));
