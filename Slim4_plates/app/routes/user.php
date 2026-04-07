<?php

use Slim\App;
use app\controllers\UserController;

return function (App $app)
{
    $app->get('/user/list',               [UserController::class, 'list']);
    $app->get('/user/form/{id:[0-9]+}',   [UserController::class, 'form']);
    $app->post('/user/create',            [UserController::class, 'create']);
    $app->post('/user/update',            [UserController::class, 'update']);
    $app->get('/user/delete/{id:[0-9]+}', [UserController::class, 'delete']); 
    $app->post('/login',                  [UserController::class, 'login']);
}
?>