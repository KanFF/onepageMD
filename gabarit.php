<?php

/**
 *  Project: onepageMD
 *  File: gabarit.php HTML template around the content
 *  Author: Samuel Roland
 *  Creation date: 20.02.2021
 */

$title = $config['title'];
$defaultlanguage = $config['content']['default_language'];
?>

<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>

    <!-- CSS files -->
    <?php
    ////TODO: choose the CSS file to load
    //$basicstyle = $config['style']['basic-style'];
    //if ($basicstyle != null && in_array($basicstyle, array_keys(CSS_FILES)) == true) {
    //    echo '<link href="' . CSS_FILES[$basicstyle] . '" rel="stylesheet">';
    //}
    //$styles = $config['style']['load-css-files'];
    //foreach ($styles as $style) {
    //    if ($style != null) {
    //        echo '<link href="' . $style . '" rel="stylesheet">';
    //    }
    //}
    ?>
    <link rel="stylesheet" href="./node_modules/tailwindcss/dist/tailwind.css">
    <link rel="stylesheet" href="./node_modules/@tailwindcss/typography/dist/typography.min.css">
    <link rel="stylesheet" href="./css/kanff.css">
    <script src="main.js"></script>
    <style>
        /**Thanks to https://github.com/tailwindlabs/tailwindcss/discussions/3006 
        Disable top margins to avoid a very big spacing between elements
        */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        ul,
        ol,
        span,
        img,
        p,
        li {
            margin-top: 0 !important;
        }

        img {
            margin: 0 !important;
        }
    </style>
</head>

<body class="prose prose-md mdstyle" style="background-color: <?= $config['style']['body']['background-color'] ?>;
 color: <?= $config['style']['body']['font-color'] ?>;
 font-family: <?= $config['style']['font-list'] ?>;
 max-width: <?= $config['style']['body']['maxwidth'] ?>;
 margin: 30px auto;
 padding: 0 15px;
 ">
    <div class="thinBlackBorderForTitle " style="display: flex; flex-wrap: wrap;">
        <h1 style="min-width: max-content; flex: 1; text-align: center;"><?= $maintitle ?></h1>
        <span style="display: flex; flex-direction: column; align-items: end; justify-content: end; min-width: max-content;">
            <span style="display: inline;">
                <strong><?= $config['author'] ?></strong> -
                <a href="mailto:<?= $config['email'] ?>">Email</a> -
                <a href="<?= prefixURLIfRelative($config['link']) ?>"><?= $config['link-placeholder'] ?></a> -
                <a href="<?= prefixURLIfRelative($config['sourcelink']) ?>">Source</a>
            </span>
            <span>
                <span style="display: inline; cursor: help;" title="Version of the text (highest version of the translations)."><?= getTextVersion() ?></span>
                <select name="language" id="sltLanguage" required>
                    <?php
                    $files = $config['content']['content-files'];
                    foreach ($files as $file) {
                        echo "<option value='{$file['id']}' " . ($language == $file['id'] ? "selected" : "") . " >{$file['language']} - {$file['version']}" . ($defaultlanguage == $file['id'] ? " (default)" : "") . "</option>";
                    }
                    ?>
                </select>
            </span>
        </span>
    </div>


    <div class="mdstyle">
        <?= $content ?>
    </div>

</body>

</html>