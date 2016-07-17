<?php

$pos = strpos($content_view, '_');
$module_name = 'none';
if ($pos != FALSE) $module_name = substr($content_view, 0, $pos);
unset($pos);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
<?php include 'template_head.php' ?>
        <title><?php echo $view->title; ?> - LRC</title>
    </head>
    <body>
        <div id="wrapper">
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
                        <li style="float: right;"><a href="/login/logout/">Log out</a></li>
                        <li style="float: right;"><a <?php if ($module_name == 'settings') { echo 'class="active" '; } ?>href="/settings/index/">Settings</a></li>
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
        </div>
        <footer>
            <div class="footer-wrapper">
               <div class="content-block">
                   <p>Copyright &copy; 2016</p>
               </div>
            </div>
        </footer>
    </body>
</html>