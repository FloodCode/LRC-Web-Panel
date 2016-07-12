<?php

require_once '/../settings.php';

try
{
    $GLOBALS['DB'] = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8mb4', $db_user, $db_pass);
}
catch (Exception $ex)
{
    echo '<p>Error: Could not connect to database</p>';
    die;
}