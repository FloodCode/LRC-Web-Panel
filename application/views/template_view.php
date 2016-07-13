<?php

$pos = strpos($content_view, '_');
$module_name = 'none';
if ($pos != FALSE) $module_name = substr($content_view, 0, $pos);
unset($pos);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Remote administration Web panel">
        <meta name="viewport" content="width=device-width">
        <meta name="theme-color" content="#009688">
        <link rel="stylesheet" type="text/css" href="/css/style-indigo.css">
        <link rel="stylesheet" type="text/css" href="/css/fonts.css">
        <title><?php echo $view->title; ?> - LRC</title>
    </head>
    <body>
        <header>
            <div class="header-wrapper">
                <h1><a href="/">Control Panel</a></h1>
            </div>
            <div class="main-menu-wrapper">
               <ul class="main-menu">
                    <li><a <?php if ($module_name == 'main') { echo 'class="active" '; } ?>href="/">Main page</a></li>
                    <li><a <?php if ($module_name == 'userlist') { echo 'class="active" '; } ?>href="/userlist/index/">User list</a></li>
                    <li><a <?php if ($module_name == 'keyboardlist') { echo 'class="active" '; } ?>href="/keyboardlist/index/">Keyboard</a></li>
                    <li><a <?php if ($module_name == 'clipboardlist') { echo 'class="active" '; } ?>href="/clipboardlist/index/">Clipboard</a></li>
                    <li style="float: right;"><a href="/">Log out</a></li>
                </ul>
            </div>
        </header>
        <main>
            <div class="main-wrapper">
                <div class="content-block">
<?php include 'application/views/'.$content_view; ?>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-wrapper">
               <div class="content-block">
                   <p>Copyright &copy; 2016</p>
               </div>
            </div>
        </footer>
    </body>
</html>