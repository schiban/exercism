<?php

function language_list(...$languages)
{
    return $languages;
}

function add_to_language_list($languageList, $language)
{
    $languageList[] = $language;
    return $languageList;
}

function prune_language_list($languageList)
{
    return array_shift($languageList);
}

function current_language($languageList)
{
    return $languageList[0];
}

function language_list_length($languageList)
{
    return count($languageList);
}