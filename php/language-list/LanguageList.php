<?php

function language_list(...$array)
{
    foreach ($array as $a)
    {
        $b[] = $a;
    }
    return $b;
}

language_list("aaa", "bbbb");