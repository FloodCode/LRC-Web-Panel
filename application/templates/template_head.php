<?php

$theme = 'red';
$theme_color = '#F44336';

if (isset($_SESSION['theme']))
{
    if (file_exists('css/' . $_SESSION['theme'] . '.css'))
    {
        $theme = $_SESSION['theme'];
    }
    
    switch ($theme)
    {
        case 'indigo':
            $theme_color = '#3F51B5';
            break;
        case 'red':
            $theme_color = '#F44336';
            break;
        case 'deep-purple':
            $theme_color = '#673AB7';
            break;
        case 'blue':
            $theme_color = '#2196F3';
            break;
        case 'teal':
            $theme_color = '#009688';
            break;
        case 'green':
            $theme_color = '#4CAF50';
            break;
        case 'yellow':
            $theme_color = '#FFEB3B';
            break;
        case 'brown':
            $theme_color = '#795548';
            break;
        case 'deep-orange':
            $theme_color = '#FF5722';
            break;
        case 'grey':
            $theme_color = '#9E9E9E';
            break;
    }
}

?>
        <meta charset="utf-8">
        <meta name="description" content="Remote administration Web panel">
        <meta name="viewport" content="width=device-width">
        <meta name="theme-color" content="<?php echo $theme_color; ?>">
        <link rel="stylesheet" type="text/css" href="/css/<?php echo $theme; ?>.css">
        <link rel="stylesheet" type="text/css" href="/css/fonts.css">
        <link rel="icon" type="image/png" href="/img/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/img/favicon-16x16.png" sizes="16x16">
        <script src="/js/lrc.js"></script>
