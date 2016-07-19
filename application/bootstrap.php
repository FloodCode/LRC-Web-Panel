<?php

// Connect core files
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';

// Additional modules
// ...
// ...
require_once 'core/database.php';

function getUserTextIdentifier($user)
{
    if (!is_null($user['name']))
    {
        return $user['id'] . ' (' . $user['name'] . ')';
    }
    else
    {
        return $user['id'];
    }
}

// Include and start router
require_once 'core/route.php';

Route::start();
