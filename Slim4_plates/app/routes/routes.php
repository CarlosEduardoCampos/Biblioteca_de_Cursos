<?php

use Slim\App;
use app\controllers\HomeController;

return function (App $app)
{
    $app->get('/', [HomeController::class, 'index']);
    $app->get('/login', [HomeController::class, 'login']);
    
    // Arquivos de rotas
    $user = require_once('../app/routes/user.php');

    $user($app);
}
?>