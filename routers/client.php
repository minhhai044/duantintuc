<?php

use Minhhai\Duan\Controllers\Client\HomeController;
use Minhhai\Duan\Controllers\Client\LoginController;

$router->before('GET|POST', '/admin/*.*', function () {
    if (!isset($_SESSION['account'])) {
        header('location: /login');
        exit();
    }
});

$router->get('/',               HomeController::class   . '@index');
$router->get('/page/{id}',      HomeController::class   . '@paginate');
$router->get('/login',          LoginController::class  . '@formLogin');
$router->post('/handlelogin',   LoginController::class  . '@login');
$router->post('/createaccount', LoginController::class  . '@addAcc');
$router->get('/logout',         LoginController::class  . '@logout');
$router->get('/category/{id}',  HomeController::class   . '@listcategory');
$router->get('/detail/{id}',    HomeController::class   . '@detail');
$router->get('/about',          HomeController::class   . '@about');
$router->post('/search',        HomeController::class   . '@search');
$router->post('/comment',       HomeController::class   . '@comment');

