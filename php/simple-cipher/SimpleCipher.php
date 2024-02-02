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
    public $key;
    public function __construct(string $key = null)
    {
        if (isset($key) && (!ctype_alpha($key) || $key !== strtolower($key))) {
            throw new InvalidArgumentException();
        }
        $this->key = $key ?? $this->keyGen();
    }
    private function keyGen(): string
    {
        $key = '';
        for($i = 0; $i < 100; $i++)
        {
            $key .=  chr(rand(ord('a'), ord('z')));
        }
        return $key;
    }
    public function encode(string $plainText): string
    {
        $string = '';
        foreach(str_split($plainText) as $i => $character)
        {
            $key = ord($this->key[$i % strlen($this->key)]) - ord('a');
            $string .= chr((ord($character) - ord('a') + $key) % 26 + ord('a'));
        }
        return $string;
    }
    public function decode(string $cipherText): string
    {
        $string = '';
        foreach (str_split($cipherText) as $i => $character) {
            $key = ord($this->key[$i % strlen($this->key)]) - ord('a');
            $string .= chr((ord($character) - ord('a') - $key + 26) % 26 + ord('a'));
        }
        return $string;
    }
}

$stuff = new SimpleCipher('zzzz');
echo $stuff->encode('iamapandabear');