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
    echo '<link href="css/kanff.css" rel="stylesheet">';
    ?>
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
    <select name="language" id="sltLanguage">
        <?php
        $files = $config['content']['content-files'];
        foreach ($files as $file) {
            echo "<option value='{$file['id']}'>{$file['language']} - {$file['version']}</option>";
        }
        ?></select>
    <div class="mdstyle">
        <?= $content ?>
    </div>

</body>

</html>