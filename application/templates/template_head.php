<?php

$theme = 'indigo';

if (isset($_SESSION['theme']))
{
    if (file_exists('css/' . $_SESSION['theme'] . '.css'))
    {
        $theme = $_SESSION['theme'];
    }
}

?>
        <meta charset="utf-8">
        <meta name="description" content="Remote administration Web panel">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="/css/<?php echo $theme; ?>.css">
        <link rel="stylesheet" type="text/css" href="/css/fonts.css">
        <script src="/js/lrc.js"></script>
