<?php

function language_list(...$array)
{
    foreach ($array as $a)
    {
        $b[] = $a;
    }
    return $b;
}

function add_to_language_list($array, $newLanguage)
{
    $array[] = $newLanguage;
    language_list($array);
    return $newLanguage;
}

function prune_language_list($language)
{
    return language_list(array_shift($language));
}

function current_language($element)
{
    
}