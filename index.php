<?php

/**
 *  Project: onepageMD
 *  File: index.php entry point for all requests
 *  Author: Samuel Roland
 *  Creation date: 20.02.2021
 */

require "helpers.php";
require "constants.php";

checkConfigBeforeLoading();
$config = json_decode(file_get_contents("config.json"), true);

//Get MD content
//TODO: choose the language depending on the cookies
$content = MDToHTML(getRawMDForAGivenLanguage("en"));

require_once "gabarit.php";
