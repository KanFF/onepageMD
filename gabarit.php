<?php

/**
 *  Project: onepageMD
 *  File: gabarit.php HTML template around the content
 *  Author: Samuel Roland
 *  Creation date: 20.02.2021
 */
$maintitle = $config['main-title'];
$title = $config['title'];
?>

<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>

    <!-- CSS files -->
    <?php
    //TODO: choose the CSS file to load
    $basicstyle = $config['style']['basic-style'];
    if ($basicstyle != null && in_array($basicstyle, array_keys(CSS_FILES)) == true) {
        echo '<link href="' . CSS_FILES[$basicstyle] . '" rel="stylesheet">';
    }
    $styles = $config['style']['load-css-files'];
    foreach ($styles as $style) {
        if ($style != null) {
            echo '<link href="' . $style . '" rel="stylesheet">';
        }
    }
    ?>
    <script src="main.js"></script>
</head>

<body style="background-color: <?= $config['style']['body']['background-color'] ?>;
 color: <?= $config['style']['body']['font-color'] ?>;
 font-family: <?= $config['style']['font-list'] ?>;
 font-size: <?= $config['style']['font-size'] ?>;
 max-width: <?= $config['style']['body']['maxwidth'] ?>;
 margin: auto;
 padding: 0 15px;
 ">
    <h1><?= $maintitle ?></h1>
    <select name="language" id="sltLanguage" required>
        <?php
        $files = $config['content']['content-files'];
        foreach ($files as $file) {
            echo "<option value='{$file['id']}' " . ($language == $file['id'] ? "selected" : "") . " >{$file['language']} - {$file['version']}</option>";
        }
        ?></select>
    <div class="mdstyle">
        <?= $content ?>
    </div>

</body>

</html>