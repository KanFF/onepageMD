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
    $filepath = "content/content-" . $language_id . ".md";
    if (file_exists($filepath) == false) {
        return false;
    }
    return file_get_contents($filepath);
}

function isLanguageAvailable($lang)
{
    $config = getConfig();
    $contents = $config['content']['content-files'];
    foreach ($contents as $content) {
        if ($content['id'] == $lang) {
            return true;
        }
    }
    return false;
}

function getConfig()
{
    return json_decode(file_get_contents("config.json"), true);
}
