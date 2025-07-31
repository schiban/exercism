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

class SimpleCipher
{
    public const ALPHABETH = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    public $key;

    function __construct(string $key)
    {
        $this->key = $key;

        // Checks if $this->key only has alphanumeric characters and if string is lowercase
        if(ctype_alpha($this->key) && ctype_lower($this->key))
        {
            // Gets the first element of $this->key and checks the key associated with it inside the const ALPHABETH
            $this->key = array_search($this->key[0], self::ALPHABETH);
        }
        // Checks if $this->key is empty
        else if ($this->key == "")
        {
            // Generates a random number, and checks the key associated with it inside the const ALPHABETH
            $this->key = array_search(self::ALPHABETH[rand(1,26)], self::ALPHABETH);
        }
        else
        {
            throw new Exception("Please insert only letters from a-z");
        }
    }

    public function encode(string $plainText): string
    {
        if(ctype_alpha($plainText) && ctype_lower($plainText))
        {
            $characters = str_split($plainText);
            $string = '';
            for ($i=0; $i < count($characters); $i++)
            {
                $keys = (array_search($characters[$i], self::ALPHABETH)) + $this->key;
                
                if ($keys >= 26)
                {
                    $string .= self::ALPHABETH[$keys-count(self::ALPHABETH)];
                }
                else
                {
                    $string .= self::ALPHABETH[$keys];
                }
            }
            return $string;
        }
        else
        {
            throw new Exception("Please insert only letters from a-z");
        }
    }

    

    public function decode(string $cipherText): string
    {
        if(ctype_alpha($cipherText) && ctype_lower($cipherText))
        {    
            $characters = str_split($cipherText);
            $string = '';
            for ($i=0; $i < count($characters); $i++)
            {
                $key = (array_search($characters[$i], self::ALPHABETH)) - $this->key;
                if ($key <= -1)
                {
                    $string .= self::ALPHABETH[$key+count(self::ALPHABETH)];
                }
                else
                {
                    $string .= self::ALPHABETH[$key];
                }
            }
            return $string;
        }
        else
        {
            throw new Exception("Please insert only letters from a-z");
        }
    }
}


$stuff = new SimpleCipher('');

echo $stuff->encode('iamapandabear');