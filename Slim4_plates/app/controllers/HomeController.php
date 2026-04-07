<?php 
namespace app\controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController{
    public function index(Request $request, Response $response)
    {
        view('home');
        return $response->withStatus(200);
    }
    public function login(Request $request, Response $response)
    {
        view('login');
        return $response->withStatus(200);
    }
}
?>