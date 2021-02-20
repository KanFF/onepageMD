<?php

/**
 *  Project: onepageMD
 *  File: helpers.php helpers functions used by several files
 *  Author: Samuel Roland
 *  Creation date: 20.02.2021
 */
function MDToHTML($raw)
{
    require_once "vendor/erusev/parsedown/Parsedown.php";
    $Parsedown = new Parsedown();
    return $Parsedown->text($raw);
}

//Check config.json validity before loading the one page
function checkConfigBeforeLoading()
{
    //TODO: write validity checks
}

function getRawMDForAGivenLanguage($language_id)
{
    return file_get_contents("content/content-" . $language_id . ".md");
}
