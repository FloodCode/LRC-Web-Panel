<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="theme-color" content="#009688">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/fonts.css">
        <title>Control Panel</title>
    </head>
    <body>
        <header>
            <div class="header-wrapper">
                <h1><a href="/">Control Panel</a></h1>
            </div>
            <div class="main-menu-wrapper">
               <ul class="main-menu">
                    <li><a href="/">Main page</a></li>
                    <li><a href="/userlist/index/">User list</a></li>
                    <li><a href="/keyboardlist/index/">Keyboard</a></li>
                    <li><a href="/clipboardlist/index/">Clipboard</a></li>
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